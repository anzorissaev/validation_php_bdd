@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">


            @foreach($userProjects->projects as $userProject)
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="justify-content-between">
                            <div class="card-header"> <h5>{{$userProject->name}} de {{ $userProject->user->lastname }}</h5></div>


                            <div class="card-body">

                                <p class="card-text">{{$userProject->description}}</p>
                                <span> {{ $userProject->created_at }} </span>
                                <a href="{{route('user.updateMyProject',['id'=>$userProject->id])}}" class="btn btn-primary">Modifier</a>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>


@endsection