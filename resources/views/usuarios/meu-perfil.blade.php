@extends('layouts.app')

@section('content')
    <div class="container w-50">
        @if(session('successMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('successMessage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session('errorMessage'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errorMessage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card border border-1 border-primary shadow">
            <div class="card-header fw-bolder bg-primary text-white">
                <div class="row justify-content-md-center d-flex align-items-center">
                    <div class="col-md-2">
                        <img src="{{ asset('images/usuario1.png') }}" width="55px" alt="">
                    </div>

                    <div class="col-10">
                        <h5 class="fw-bolder">{{ $usuario->name }} - {{ $usuario->age() }} anos</h5>
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('images/vacina1.png') }}" width="60px" alt="">
                <p class="h4 fw-bolder text-success">Vacinas estão em dia</p>

                <a class="btn btn-info mt-3" href="{{ route('usuarios.minha-caderneta') }}">
                    <img src="{{ asset('images/calendario1.png') }}" width="60px" alt="">
                    <h5 class="text-white">Minha cardeneta</h5>
                </a>
            </div>
        </div>
    </div>
@endsection
