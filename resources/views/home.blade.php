@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="justify-content-between">
                <div class="card-header">Hello</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div> {{$user->lastname}} {{$user->firstname}} </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
