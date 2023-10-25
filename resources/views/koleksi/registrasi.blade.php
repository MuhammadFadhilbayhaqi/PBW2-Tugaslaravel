@extends('layouts.guest')
{{-- 6706223102_Muh.Fadhil Bayhaqi_46-03 --}}
    @section('content')
        <form method="POST" action="{{ route('koleksiStore') }}">
            @csrf

            <!-- Nama Koleksi -->
            <div>
                <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
                <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus />
                <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
            </div>

            <!-- Jenis Koleksi -->
            <div class="mt-4">
                <x-input-label :value="__('Jenis Koleksi')" for="jenisKoleksi" />
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="jenisKoleksi" value="1" class="form-radio mr-1" {{ old('jenisKoleksi') === '1' ? 'checked' : '' }} required>
                        <span class="mr-1">Novel</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="jenisKoleksi" value="2" class="form-radio ml-1" {{ old('jenisKoleksi') === '2' ? 'checked' : '' }} required>
                        <span class="mr-2 ml-1">Majalah</span>
                    </label>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="jenisKoleksi" value="3" class="form-radio ml-1" {{ old('jenisKoleksi') === '3' ? 'checked' : '' }} required>
                        <span class="ml-1">Komik</span>
                    </label>
                </div>
                <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
            </div>

            <!-- Jumlah Koleksi -->
            <div class="mt-4">
                <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
                <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autofocus />
                <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
            </div>

            <!-- Pengarang -->
            <div class="mt-4">
                <x-input-label for="namaPengarang" :value="__('Nama Pengarang')" />
                <x-text-input id="namaPengarang" class="block mt-1 w-full" type="text" name="namaPengarang" :value="old('namaPengarang')" required autofocus />
                <x-input-error :messages="$errors->get('namaPengarang')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-4" type="reset">
                    Reset
                </x-primary-button>
                <x-primary-button class="ml-4">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>

        {{-- button back --}}
        <a href="{{ route('user') }}" class="text-blue-500 hover:text-blue-700 underline" style="cursor: pointer; text-decoration: none;">
            Back &larr;
        </a>
    @endsection
