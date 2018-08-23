@extends('layouts.app')



@section('content')
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
                <th scope="row"></th>
                <td>{{$user_don->a}}</td>
            </tr>
            </tbody>
            @dd($user_don)
        @endforeach
    </table>
@stop