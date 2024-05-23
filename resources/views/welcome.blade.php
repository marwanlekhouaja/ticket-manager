@extends('layouts.layout')
@section('title')
Home page | Redal
@endsection
@section('content')
<div>
    <x-navHomePage /> 
    <x-partieMetier />
    <x-ticket />
    <div class="partie_info_metier d-flex p-4 justify-content-around align-items-center">
        <div >
            <h3>{{__("messages.Nos métiers")}}</h3>
            <p class="w-75">{{__("messages.Nos métiers se concentrent sur la distribution de l’électricité, l’eau potable, l’assainissement liquide tout en plaçant notre clientèle au centre de notre préoccupation")}}.</p>
            <a class="btn text-light" style="background-color: cornflowerblue" href="https://www.redal.ma/fr/nos-metiers">{{__("messages.En savoir plus sur nos metiers")}}</a>
        </div>
        <div class="image ">
            <img style="width:600px" class="rounded" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/vst_hp_generic_content_868/public/image/2023/10/Nos%20m%C3%A9tiers%20STEP.png?itok=lUklFuhH" alt="">
        </div>
    </div>
    <x-ouvrage /> 
    <x-facture />
    <x-footer />   
</div>    
    
@endsection