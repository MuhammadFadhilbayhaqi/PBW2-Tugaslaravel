@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="card">
            <div class="card-header">Manage Collection</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    {{ $dataTable->scripts() }}
@endpush


{{-- 6706223102_Muh. Fadhil Bayhaqi_46-03 --}}
