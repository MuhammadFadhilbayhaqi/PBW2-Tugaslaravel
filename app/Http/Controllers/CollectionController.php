<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\DataTables\CollectionsDataTable;
use DB;

// Muhammad Fadhil Bayhaqi_6706223102_46-03
class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CollectionsDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $collection = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'namaPengarang' => $request->namaPengarang,
        ]);

        event(new Registered($collection));
        return redirect(RouteServiceProvider::COLLECTIONS);
    }

    public function update(Request $request)
    {
        $request->validate([
            'namaKoleksi' => ['required', 'string', 'max:100'],
            'jenisKoleksi' => ['required', 'integer', 'max:4'],
            'jumlahKoleksi' => ['required', 'integer'],

        ]);
        $affected = DB::table('collections')
        ->where('id', $request->id)
        ->update([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' =>$request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);
        return redirect()->route('koleksi');
        // return view('koleksi.infoKoleksi');
    }
    // public function update(Request $request, Koleksi $koleksi) //controller buat edit
    // {
    // $request->validate([
    //     'namaKoleksi' => 'required',
    //     'jenisKoleksi' => 'required',
    //     'jumlahKoleksi' => 'required',
    // ]);

    // // Perbarui data koleksi dengan data yang dikirimkan dari formulir

    // $affacted = DB::table('koleksi')->where('id', $request->id)->update([
    //     'namaKoleksi' => $request->namaKoleksi,
    //     'jenisKoleksi' => $request->jenisKoleksi,   // Achmad Dani Saputra | 6706223131
    //     'jumlahKoleksi' => $request->jumlahKoleksi,
    // ]
    // );
    // // Redirect ke halaman yang sesuai, misalnya, halaman daftar koleksi
    // return redirect()->route('koleksi.daftarKoleksi')->with('success', 'Koleksi berhasil diperbarui.');
    // }


    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', ['collection' => $collection]);

    }


}
