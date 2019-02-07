@extends('layouts.app')
@section('title','Entrenador')
@section('content')
    <div class="text-center">
        <img class="card-img-top rounded-circle" src="/images/{{$entrenador->avatar}}" width="200" height="200">
        <h5 class="card-title">{{$entrenador->name}}</h5>
        <p class="card-text">{{$entrenador->descripcion}} </p>
        <a href="/Entrenador/{{$entrenador->slug}}/edit" class="btn btn-primary">Editar</a>
        {!! Form::open([ 'route' => ['Entrenador.destroy', $entrenador->slug], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>




@endsection
