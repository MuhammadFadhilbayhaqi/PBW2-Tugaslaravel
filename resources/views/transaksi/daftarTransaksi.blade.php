@extends('layouts.app')
@section('content')

<div class="container mt-4">
        <div class="card">
            <div class="card-header">Manage Transaction</div>
            <div class="card-body">
                {{ $dataTable->table() }}

                <!-- <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Peminjam</th>
                            <th>Petugas</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Selesai</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                </table> -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush

