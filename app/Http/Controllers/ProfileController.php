<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Datatables\UsersDataTable;
use DB;
// Muhammad Fadhil Bayhaqi_6706223102_46-03
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function ganti(Request $request)
    {
    // Validate the request data
    $request->validate([
        'fullname' => ['required', 'string', 'max:100'],
        'password' => ['required', 'confirmed'],
        'phonenumber' => ['required', 'string', 'max:20'],
        'address' => ['required', 'string', 'max:1000'],
        'agama' => ['required', 'string', 'max:20'],
        'jenisKelamin' => ['required', 'integer', 'max:4']
    ]);

    DB::table('users')
        ->where('id', $request->id)
        ->update([
            'fullname' => $request->fullname,
            'password' => Hash::make($request->password),
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'agama' => $request->agama,
            'jenisKelamin' => $request->jenisKelamin,
        ]);
        return redirect()->route('user');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // display list
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    // display particular user
    public function show(User $user)
    {
        return view('user.infoPengguna', ['user' => $user]);
    }
}
