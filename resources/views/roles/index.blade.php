@extends('layouts.app')
@section('title', 'Lista de Roles')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> 
                <h4 class="mb-0">Editar Role</h4>
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
                            <th>Nombre</th>
                            <th colspan="3" width="90px" class="text-center">
                                @can('roles.create')
                                    <a class="text-primary" href="{{ route('roles.create') }}">{{ __('Crear') }}</a>
                                @endcan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="30px">
                                    @can('roles.show')
                                        <a class="text-secondary" href="{{ route('roles.show', $role->id) }}">{{ __('Ver') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('roles.edit')
                                        <a class="text-body" href="{{ route('roles.edit', $role->id) }}">{{ __('Editar') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('roles.destroy')
                                        {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                            {!! Form::submit('Eliminar', ['class'=> 'text-danger btn btn-link p-0']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4">
                                    <span class="h3">No hay Roles</span>
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
               <div class="text-center">
                    {{ $roles->links('vendor.pagination.simple-tailwind') }}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection