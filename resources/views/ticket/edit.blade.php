@extends('layouts.layout')
@section('title','edit status of ticket')

@section('content')
    <div style="height: 90dvh" class="d-flex justify-content-center align-items-center flex-column m-auto">
        <form action="{{route('ticket.update',$ticket->ticket_number)}}" class="p-2 shadow rounded col-10 col-md-5" method="post">
            <h2>edit status of ticket</h2>
            @csrf
            @method('PATCH')
            ticket number
            <input type="text" class="form-control" name="ticket_number" readonly value="{{$ticket->ticket_number}}">
            <div class="form-check mt-2 mb-2">
                <label class="form-check-label" for="flexCheckChecked">
                    is valid
                  </label>
                <input class="form-check-input" type="checkbox" name="isValid" id="flexCheckChecked" >
              </div>
            <input type="submit" value="edit" class="btn btn-success">
        </form>
    </div>    
@endsection