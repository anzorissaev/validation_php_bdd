@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <img src="https://previews.123rf.com/images/imagevectors/imagevectors1603/imagevectors160300850/53026871-flat-ic%C3%B4ne-noire-profil-web-en-cercle-sur-fond-blanc.jpg" class="img-thumbnail"  height="70" width="70" alt="">
                <p class="card-text"> {{$userProjects->lastname}} {{$userProjects->firstname}} </p>
                <a href="{{route('user.edit')}}" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="col-md-12 text-center mt-2"> <h4 class="mt-3">Mes Projets</h4> </div>
                @foreach($userProjects->projects as $userProject)
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="justify-content-between">
                                <div class="card-header"><h5>{{$userProject->name}}
                                        de {{ $userProject->user->lastname }}</h5></div>


                                <div class="card-body">

                                    <p class="card-text">{{$userProject->description}}</p>


                                    <a href="{{route('user.updateMyProject',['id'=>$userProject->id])}}"
                                       class="btn btn-primary">Modifier</a>
                                    <a href="#" class="btn btn-danger">Suprimer</a><br>
                                    <span class="badge badge-pill badge-dark"> {{ $userProject->created_at }}</span>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <div class="col-md-12 text-center mt-2"> <h4 class="mt-3">Mes Dons</h4> </div>

                @include('user.don.mesdons')

            </div>


        </div>
    </div>


@endsection