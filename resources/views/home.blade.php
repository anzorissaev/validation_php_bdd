@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{--@dd($projects)--}}
            @foreach($projects as $project)
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="justify-content-between">
                            <div class="card-header"><h5>{{$project->name}} de {{ $project->lastname }}</h5></div>


                            <div class="card-body">

                                <p class="card-text">{{$project->description}}</p>
                                <span class="badge badge-pill badge-dark"> {{ $project->created_at }} </span> <br>
                            </div>
                            @guest
                            <div class="ml-3 mb-3">
                                <a class="btn btn-dark" href="{{route('user.projectinfo',['user' => $user], ['projects' => $projects])}}">Info</a>
                            </div>
                            @else
                            <div></div>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach

            @empty($project)

                <h5 class="">Aucun Project En Cours </h5>

            @endempty

        </div>
    </div>
@endsection
