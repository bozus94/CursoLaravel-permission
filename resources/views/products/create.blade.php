@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> 
                <h4 class="mb-0">Crear Producto</h4>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}
                    @include('products.partials.form')
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
</div>
@endsection