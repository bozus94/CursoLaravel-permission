@extends('layouts.app')
@section('title', 'Lista de useros')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> 
                <h4 class="mb-0">Editar Usuario</h4>
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
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td width="30px">
                                    @can('users.show')
                                        <a class="text-secondary" href="{{ route('users.show', $user->id) }}">{{ __('Ver') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('users.edit')
                                        <a class="text-body" href="{{ route('users.edit', $user->id) }}">{{ __('Editar') }}</a>
                                    @endcan
                                </td>
                                <td width="30px">
                                    @can('users.destroy')
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DEL']) !!}
                                            {!! Form::submit('Eliminar', ['class'=> 'text-danger btn btn-link p-0']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4">
                                    <span class="h3">No hay Usuarios</span>
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
               <div class="text-center">
                    {{ $users->links('vendor.pagination.simple-tailwind') }}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection