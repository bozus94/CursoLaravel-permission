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

                    <ul class="list-group mb-2">
                        <li class="list-group-item d-flex justify-content-start align-items-center">
                            <span class="text-bold mr-2">ID</span>
                            {{ $product->id }}
                        </li>
                        <li class="list-group-item d-flex justify-content-start align-items-center">
                            <span class="text-bold mr-2">Nombre</span>
                            {{ $product->name }}
                        </li>
                        <li class="list-group-item d-flex justify-content-start align-items-center">
                            <span class="text-bold mr-2">Descripcion</span>
                            {{ $product->description }}
                        </li>
                    </ul>
                    <div class="btn-outline-group" role="group" aria-label="Acciones">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary ">Atras</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-dark ">Editar</a>
                        <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-outline-danger ">Eliminar</a>
                    </div>

            </div>
        </div> 
    </div>
</div>
@endsection