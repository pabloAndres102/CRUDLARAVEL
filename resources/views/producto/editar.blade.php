@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Productos</h3> <br>
        <a href="{{ url('/productos/crear')}}" class="btn btn-primary">Editar</a>
    </div>
    <div style="padding: 20px;">
        <form name="frmRegistrar" method="POST" action="{{ url('/producto/actualizar',$producto->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Codigo: </label>
                <input type="number" id="codigo" name="codigo" value="{{ $producto->codigo}}">
            </div>
            <div class="form-group">
                <label for="nombre">nombre: </label>
                <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre}}">
            </div>
            <div class="form-group">
                <label for="nombre">precio: </label>
                <input type="number" id="precio" name="precio" value="{{ $producto->precio}}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection