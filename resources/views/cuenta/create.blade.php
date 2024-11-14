@extends('layouts.app')

@section('title','Crear Cuenta')

@push('css')
<style>
    #descripcion {
        resize: none;
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Cuenta</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('cuentas.index')}}">Cuentas</a></li>
        <li class="breadcrumb-item active">Crear Cuenta</li>
    </ol>

    <div class="card">
        <form action="{{ route('cuentas.store') }}" method="post">
            @csrf
            <div class="card-body text-bg-light">

                <div class="row g-4">

                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código:</label>
                        <input type="text" name="codigo" id="codigo" class="form-control" value="{{old('codigo')}}">
                        @error('codigo')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
                        @error('nombre')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="activo" {{ old('tipo') == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="pasivo" {{ old('tipo') == 'pasivo' ? 'selected' : '' }}>Pasivo</option>
                            <option value="capital" {{ old('tipo') == 'capital' ? 'selected' : '' }}>Capital</option>
                            <option value="ingreso" {{ old('tipo') == 'ingreso' ? 'selected' : '' }}>Ingreso</option>
                            <option value="gasto" {{ old('tipo') == 'gasto' ? 'selected' : '' }}>Gasto</option>
                        </select>
                        @error('tipo')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="saldo_inicial" class="form-label">Saldo Inicial:</label>
                        <input type="number" step="0.01" name="saldo_inicial" id="saldo_inicial" class="form-control" value="{{old('saldo_inicial')}}">
                        @error('saldo_inicial')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                  

                </div>
            </div>

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

</div>
@endsection

@push('js')

@endpush
