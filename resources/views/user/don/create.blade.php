@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="col-12">
        <div>
            <h1>Faire un Don</h1>
        </div>
        <div class="text-center p-5 border border-success rounded">
            <h5>Participer d'avantage à l'Association {{config('app.name')}}</h5>

            <div class="col-12 col-md-4 offset-md-4 mt-5">
                <form action="{{route('user.don.store',['id'=>$projects->id])}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="amount" class="form-control text-right">
                        <div class="input-group-append">
                            <span class="input-group-text">€</span>
                        </div>

                    </div>
                    <input value="Donner" type="submit" class="btn btn-outline-success btn-block pt-2 mt-2">
                </form>
            </div>

        </div>

    </div>
    </div>
@endsection