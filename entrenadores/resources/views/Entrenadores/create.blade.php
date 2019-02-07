@extends('layouts.app')
@section('title','crear entrenadores')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>

    @endif
    <form class="form-group" method="POST" action="/Entrenador" enctype="multipart/form-data">
        @include('Entrenadores.form')
        <button type="submit" class="btn btn-primary"> Crear</button>
    </form>

@endsection

