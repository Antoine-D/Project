@extends('layout')

@section('title') Recherche @endsection

@section('pageTitle') Résultat de votre recherche @endsection

@section('content')
    @if(isset($users))
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Ajouter</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <th scope="row">{{ $key +1}}</th>
                    <td>{{ $user->name}}</td>
                    <td>
                        {!! Form::open(['url' => 'add']) !!}
                        {!! Form::submit('Ajouter',array('class' => 'btn btn-success')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            <tbody>
        </table>
        <p></p>


    @endif

    @if(isset($error))
        <p>{{$error }}</p>
    @endif


@endsection

