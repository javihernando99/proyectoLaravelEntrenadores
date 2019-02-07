@extends('layouts.app')
@section('title','editar entrenadores')
@section('content')
    <form class="form-group" method="POST" action="/Entrenador/editP/{{$entrenador->slug}}" enctype="multipart/form-data">
      @method('POST')
       @csrf
      <div class="form-group">
          <label for="">Avatar</label>
          <input type="file" name="avatar" >
      </div>
        <button type="submit" class="btn btn-primary"> Actualizar</button>
      </form>
@endsection
