@extends('layouts.layout')
@section('title','ticket manager')
@section('content')
<div style="height: 90vh" class="d-flex justify-content-center align-items-center">
    <form action="/ticket/create" class="d-flex justify-content-center flex-column align-items-center">
        {{-- @method('GET') --}}
        <h2 style="font-family: monospace">Bienvenue cher client sur TicketManager !</h2>
        <div class="d-flex align-items-center">
            <select class="form-select" name="language">
                <option value="">choisir votre langue prefere</option>
                <option value="ar">arabe</option>
                <option value="fr">francais</option>
                <option value="en">english</option>
            </select>
            <input type="submit" value="confirmer" class="ms-2 btn btn-dark">
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
            @endforeach
         @endif
    
    </form>
</div>    
    
@endsection