@extends('layouts.app')

@section('title', 'Balance General')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Balance General</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Balance General</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-balance-scale"></i>
            Balance General
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Activos</h3>
                    <ul>
                        @foreach($activos as $activo)
                        <li>{{ $activo->nombre }}: {{ $activo->saldo }}</li>
                        @endforeach
                    </ul>
                    <p><strong>Total Activos:</strong> {{ $totalActivos }}</p>
                </div>
                <div class="col-md-6">
                    <h3>Pasivos</h3>
                    <ul>
                        @foreach($pasivos as $pasivo)
                        <li>{{ $pasivo->nombre }}: {{ $pasivo->saldo }}</li>
                        @endforeach
                    </ul>
                    <p><strong>Total Pasivos:</strong> {{ $totalPasivos }}</p>
                </div>
                <div class="col-md-12">
                    <h3>Patrimonio</h3>
                    <ul>
                        @foreach($patrimonio as $patrimonioItem)
                        <li>{{ $patrimonioItem->nombre }}: {{ $patrimonioItem->saldo }}</li>
                        @endforeach
                    </ul>
                    <p><strong>Total Patrimonio:</strong> {{ $totalPatrimonio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
