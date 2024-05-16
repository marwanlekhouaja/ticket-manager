@extends('layouts.layout')
@section('title')
Home page | Redal
@endsection
@section('content')
<div>
    <x-navHomePage />   
    <x-partieMetier />
    <x-ouvrage /> 
    <x-facture />
    <x-ticket />
    <x-footer />   
</div>    
    
@endsection