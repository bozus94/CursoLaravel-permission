@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> 
                <h4 class="mb-0">Editar Producto</h4>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                    </div>
                @endif
                {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
                @include('products.partials.form')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection