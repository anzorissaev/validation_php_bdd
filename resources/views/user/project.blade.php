@extends('layouts.app')

@section('content')

   <div class="container">
      <div class="row justify-content-center">


          @foreach($projects as $project)
          <div class="col-md-8 mt-3">
              <div class="card">
                  <div class="justify-content-between">
                      <div class="card-header"> <h5>{{$project->name}} de {{ $project->user->lastname }}</h5></div>


                      <div class="card-body">

                          <p class="card-text">{{$project->description}}</p>
                          <span class="badge badge-pill badge-dark"> {{ $project->created_at }} </span> <br>
                          <a href="{{route('user.projectinfo',['project'=> $project])}}" class="btn btn-primary">INFO</a>
                      </div>


                  </div>
              </div>
          </div>
          @endforeach


          <div class="col-md-8">
              <div class="mt-3"><a href="{{route('user.projectcreate')}}" class="btn btn-success">Crée un Projet</a> </div>
          </div>



      </div>
   </div>

@endsection