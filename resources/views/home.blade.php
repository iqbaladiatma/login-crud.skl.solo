@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Dashboard : Form Pendataan Anak Basic') }}</div>

                <div class="card-body">
                    <a href="/anak" class="btn btn-primary">Daftar Anak</a>
                    <a href="/data-anak" class="btn btn-success">Data Anak</a>
                    <a href="/about" class="btn btn-warning">About This Website</a>
                </div>
                <x-footer></x-footer>
            </div>
        </div>
    </div>
</div>
@endsection