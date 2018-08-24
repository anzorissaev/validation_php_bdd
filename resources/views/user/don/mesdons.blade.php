@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Projet</th>
                    <th scope="col">Montant</th>
                </tr>
                </thead>
                @foreach($user_dons as $user_don)
                    <tbody>
                    <tr>
                        <th scope="row">{{$user_don->project_id}}</th>

                        <td>{{$user_don->amount}}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>
@stop

