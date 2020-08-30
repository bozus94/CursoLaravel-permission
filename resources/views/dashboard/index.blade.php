@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> 
                <h4 class="mb-0">Dashboard</h4>
            </div>
            <div class="card-body">
                <span class="h3 text-center text-dark my-3 ">
                    Bienvenido {{ '@'.auth()->user()->name }}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection