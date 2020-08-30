@extends('layouts.app')
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
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
                    @include('roles.partials.form')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection