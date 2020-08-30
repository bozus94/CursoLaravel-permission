@extends('layouts.app')
@section('title', 'Lista de Productos')
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20px">#</th>
                            <th>First</th>
                            <th colspan="3" width="90px" class="text-center">
                                @can('products.create')
                                    <a class="text-primary" href="{{ route('products.create') }}">{{ __('Crear') }}</a>
                                @endcan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td width="30px">
                                    @can('products.show')
                                        <a class="text-secondary" href="{{ route('products.show', $product->id) }}">{{ __('Ver') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('products.edit')
                                        <a class="text-body" href="{{ route('products.edit', $product->id) }}">{{ __('Editar') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('products.destroy')
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DEL']) !!}
                                            {!! Form::submit('Eliminar', ['class'=> 'text-danger btn btn-link p-0']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4">
                                    <span class="h3">No hay productos</span>
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
               <div class="text-center">
                    {{ $products->links('vendor.pagination.simple-tailwind') }}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection