@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">




                    <div class="col-md-8 mt-3">
                        <div class="card">
                            <div class="justify-content-between">
                                <div class="card-header"> <h5>{{$projects->name}} de {{ $projects->user->lastname }}</h5></div>
                                <div class="card-body">
                                    <p class="card-text">{{$projects->description}}</p>
                                    <span> {{ $projects->created_at }} </span>
                                    <a href="{{route('user.don.create')}}" class="btn btn-success"> Faire un Don</a>

                                </div>
                            </div>
                        </div>
                    </div>




            </div>
        </div>
    </div>

@endsection