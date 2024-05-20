@extends('layouts.layout')
@section('title','prend ticket')
@section('content')
    <a href="/" >
      <img width="70px" class="m-2" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/logo_mobile_retina/public/Logo.jpg?itok=Aa4PVbse" alt="">
    </a>
    @if (session()->has('success'))
        <div class="alert alert-success mt-2 shadow container d-flex align-items-center justify-content-between">
          <div>{{session('success')}}</div>   
          {{-- <a href="{{route('ticket.show',$latestTicket-1)}}" class="btn btn-success">imprimer ticket</a>  --}}

          <form action="{{route('ticket.show',$latestTicket-1)}}" method="POST">
            @csrf
            @method('GET')
            <input type="hidden" name="address" value="{{$address}}" id="address">
            <input type="hidden" name="city" value="{{$city}}" id="city">
            <input type="hidden" name="agence" value="{{$agence}}" id="agence">
            <input type="submit" value="imprimer ticket" class="btn btn-success">
          </form>
        </div>     
    @endif
    
    <div style="height: 90dvh" class="d-flex justify-content-center m-auto col-9 col-md-7 flex-column">
      <h3 style="font-family: monospace" class="text-center">Bienvenue cher client</h3>
      <div class="rounded shadow p-2">
        <h4 style="font-family: monospace">position actuelle : {{$latestTicket}}</h4>
        <h4 style="font-family: monospace">date : {{date('Y-m-d')}}</h4>
        <h4 style="font-family: monospace">agence : {{$agence}}</h4>
        <h4 style="font-family: monospace">ville : {{$city}}</h4>
        <div class="d-flex align-items-center">
          <h4 style="font-family: monospace" class="me-3">Souhaitez-vous prendre un ticket ?</h4>
          <div class="d-flex align-items-center">
              <form action="{{route('ticket.store')}}" method="POST">
                  @csrf
                  {{-- <input type="hidden" name="language" value="{{$language}}"> --}}
                  {{-- <input type="hidden" name="address" value="{{$address}}" id="address">
                  <input type="hidden" name="city" value="{{$city}}" id="city">
                  <input type="hidden" name="agence" value="{{$agence}}" id="agence"> --}}
                  <input type="submit" class="btn btn-success"  value="oui">
              </form>
              <form action="/" method="POST">
                  @csrf
                  @method('GET')
                  <input type="submit" class="ms-3 btn btn-danger" value="non">
              </form>
              
          </div>
        </div>
      </div>
    </div>

@endsection