@extends('layouts.app')
{{-- 6706223102_Muh.Fadhil Bayhaqi_46-03 --}}
@section('content')
<div class="container">
    <h1 class="my-4" style="font-weight: bold;">Edit Koleksi</h1>


    <div class="card">
        <div class="card-body">
            {{-- <form method="POST" action="{{ route('koleksiUpdate', ['id' => $collection->id]) }}"> --}}
            <form method="POST" action="{{ route('koleksiUpdate') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $collection->id }}">
                <div class="mb-3">
                    <label for="namaKoleksi" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="namaKoleksi" name="namaKoleksi" value="{{ $collection->namaKoleksi }}">
                </div>

                <div class="mb-3">
                    <label for="jenisKoleksi" class="form-label">Jenis Koleksi</label>
                    <select class="form-select" id="jenisKoleksi" name="jenisKoleksi" >
                        {{-- add disabled next to jenisKoleksi if you wanted jenisKoleksi non modifiable --}}
                        <option value="1" {{ $collection->jenisKoleksi == 1 ? 'selected' : '' }}>Novel</option>
                        <option value="2" {{ $collection->jenisKoleksi == 2 ? 'selected' : '' }}>Majalah</option>
                        <option value="3" {{ $collection->jenisKoleksi == 3 ? 'selected' : '' }}>Komik</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="jumlahKoleksi" class="form-label">Jumlah Koleksi</label>
                    <input type="text" class="form-control" id="jumlahKoleksi" name="jumlahKoleksi" value="{{ $collection->jumlahKoleksi }}">
                </div>

                <div class="mb-3">
                    <label for="namaPengarang" class="form-label">Pengarang</label>
                    <p>{{ $collection->namaPengarang }}</p>
                </div>

            </table>
            <a href="{{ route('koleksi') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
