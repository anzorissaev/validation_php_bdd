@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <form action="{{ URL::route('user.projectadd', ['user'=> $user]) }}" method="post">
                {{----}}

                    @csrf
                    <div class="card bg-light m-5 pb-5 pl-5 pr-5 pt-3">


                        <div class="form-group">
                            <label for="name">Nom de mon project</label>
                            <input type="text"
                                   class="form-control {{$errors->has('name') ? 'is-invalid':''}}"
                                   name="name"
                                   id="name"
                                   value="{{ old('name') ? old('name')  : $user->name}}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Descpritpion</label>
                            <input type="text" name="description"
                                   class="form-control {{$errors->has('description') ? 'is-invalid':''}}" id="description"
                                   value="{{ old('description') ? old('description')  : $user->description}}">

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection