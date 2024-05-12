<?php

namespace App\Http\Controllers;
use Stevebauman\Location\Facades\Location;

use App\Models\Historique;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware(['auth','verified'])->only('index');
    }
    public function index()
    {
        $tickets = Ticket::paginate(7);
        return view('dashboard', compact('tickets'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->ip());

// if ($position = Location::get()) {
//     // Successfully retrieved position.
//     dd($position->countryName);
// } else {
//     // Failed retrieving position.
// }
        // $ip = $request->ip(); // Get IP address from request
        // // $city = $this->getCityFromIP($ip);
        // // dd($city);
        // $position = Location::get($request->ip());
        // dd($position);
        $request->validate(['language' => 'required']);
        $latestTicket = Ticket::latest()->first();
        if($latestTicket){
            return view('ticket.take',['language'=>$request->language,'latestTicket'=>$latestTicket->ticket_number+1]);
        }
        else{
            return view('ticket.take',['language'=>$request->language,'latestTicket'=>1]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ticket::create([
            'isValid' => false
        ]);

        $latestTicket = Ticket::latest()->first();
        $language = $request->input('language');
        if($latestTicket){
            if ($language) {

                return redirect('/ticket/create?language=' . $language)->with('success', 'Votre nombre de ticket est ' .  $latestTicket->ticket_number.' (la date de creation : '.$latestTicket->created_at.' )');
            } 
        }    
        else{
            if ($language) {

                return redirect('/ticket/create?language=' . $language)->with('success', 'Votre nombre de ticket est ' .'1'.' (la date de creation : '.now().' )');
            }
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update([
            'isValid' => $request->input('isValid') ? true : false
        ]);

        Historique::create([
            'ticket_number' => $request->ticket_number,
            'isValid' => $request->isValid ? true : false
        ]);

        return to_route('ticket.index')->with('success', 'ticket avec le nombre ' . $ticket->ticket_number . ' est valid !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
