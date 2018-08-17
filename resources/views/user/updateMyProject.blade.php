@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-8 mt-3">
                <form action="{{ URL::route('user.updatevalidate',['idProject' => $projects->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card bg-light m-5 pb-5 pl-5 pr-5 pt-3">

                        <div class="card-header mt-1 mb-5 font-weight-bold border"><h4 class="mb-0">Info</h4></div>

                        <div class="form-group">
                            <label for="name">Nom projet</label>
                            <input type="text"
                                   class="form-control {{$errors->has('name') ? 'is-invalid':''}}"
                                   name="name"
                                   value="{{ old('name') ? old('name')  : $projects->name}}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description"
                                   class="form-control {{$errors->has('description') ? 'is-invalid':''}}"
                                   value="{{ old('description') ? old('description')  : $projects->description}}">

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Modifier</button>
                        </div>

                    </div>
                </form>
            </div>
            {{--@dd($projects)--}}
        </div>
    </div>


@endsection