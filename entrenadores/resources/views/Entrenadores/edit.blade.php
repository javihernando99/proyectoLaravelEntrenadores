@extends('layouts.app')
@section('title','editar entrenadores')

@section('content')
    <form class="form-group" method="POST" action="/Entrenador/{{$entrenador->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$entrenador->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" value="{{$entrenador->descripcion}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"> Actualizar</button>
    </form>

@endsection
