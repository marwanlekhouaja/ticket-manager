@extends('layouts.layout')
@section('title','prend ticket')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success mt-3 shadow container">{{session('success')}}</div>        
    @endif
    <div style="height: 90dvh" class="d-flex justify-content-center align-items-center flex-column">
      @if ($latestTicket)
         <h2 style="font-family: monospace">Tu as dans la position {{$latestTicket}} Souhaitez-vous prendre un ticket ?</h2>
      @endif
        {{-- <h2 style="font-family: monospace">Tu as dans la position {{$latestTicket}} Souhaitez-vous prendre un ticket ?</h2> --}}
        <div class="d-flex align-items-center">
            <form action="{{route('ticket.store')}}" method="POST">
                @csrf
                <input type="hidden" name="language" value="{{$language}}">
                <input type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" value="oui">
            </form>
            <form action="/" method="POST">
                @csrf
                @method('GET')
                <input type="submit" class="ms-3 btn btn-danger" value="non">
            </form>
        </div>
    </div>

    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
   --}}
  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection