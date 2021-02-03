@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produk Index</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Show Produk !
                    <p>* {{$produk->nama_produk}} ( {{$produk->part_number}} )</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
