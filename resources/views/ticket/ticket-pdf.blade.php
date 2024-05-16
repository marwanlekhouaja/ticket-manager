@extends('layouts.layout')
@section('title','ticket')
    
@section('content')
    <div>
        <div class="d-flex mb-5 flex-row align-items-center justify-content-between">
            <img width="200" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/logo_mobile_retina/public/Logo.jpg?itok=Aa4PVbse" alt="">
            
        </div>
        <div class="content mt-5">
            <h2 style="font-family: monospace">Votre numero de ticket : {{$ticket_number}}</h2>
            <h2 style="font-family: monospace">La date de creation : {{$date_creation}}</h2>
            <h2 style="font-family: monospace">Agence : {{$agence}}</h2>
            <h2 style="font-family: monospace">Ville : Rabat</h2>
        </div>
    </div>
@endsection