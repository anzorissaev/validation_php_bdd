@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <form action="{{ URL::route('user.update', ['user'=> $user]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card bg-light m-5 pb-5 pl-5 pr-5 pt-3">

                        <div class="card-header mt-1 mb-5 font-weight-bold border"><h4 class="mb-0">Mes Infos</h4></div>

                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <input type="text"
                                   class="form-control {{$errors->has('lastname') ? 'is-invalid':''}}"
                                   name="lastname"
                                   id="lastname"
                                   value="{{ old('lastname') ? old('lastname')  : $user->lastname}}">

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" name="firstname"
                                   class="form-control {{$errors->has('firstname') ? 'is-invalid':''}}" id="firstname"
                                   value="{{ old('firstname') ? old('firstname')  : $user->firstname}}">

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
                                   value="{{ old('email') ? old('email')  : $user->email}}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>







                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Modifier</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection