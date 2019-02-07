@extends('layouts.app')
@section('title','Entrenadores')

@section('content')



    <div class="row" >
        @foreach($entrenadores as $entrenador)
            <div class="col-md-4">
                <div class="card text-center" style="width: 18rem; ">
                    <div class="card-body" style="margin-top: 5%">
                       <a href="/Entrenador/editP/{{$entrenador->slug}}"><img class="card-img-top rounded-circle" src="images/{{$entrenador->avatar}}" width="200" height="200"></a>
                        <h5 class="card-title">{{$entrenador->name}}</h5>
                        <p class="card-text">{{$entrenador->descripcion}} </p>
                        <a href="/Entrenador/{{$entrenador->slug}}" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>

            </div>


        @endforeach
    </div>
@endsection
