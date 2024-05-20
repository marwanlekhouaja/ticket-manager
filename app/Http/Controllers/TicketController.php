<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Historique;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only('index');
        // $this->middleware('applanguage')->only(['index','create','store']);
    }
    public function index()
    {
        $tickets = Ticket::with('agence')->where([['agenceId',Auth::user()->agenceId],['isValid',false]])->paginate(7);
        // dd(Auth::user()->agenceId);
        return view('dashboard', compact('tickets'));
        if(strlen($tickets)){
            return view('dashboard', compact('tickets')); 
        }
        else{
            return view('dashboard') ;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    $agence = Agence::where('adress', $request->address.','.$request->city)
                    ->where('ville', $request->city)
                    ->first();
    $defaultAgence= Agence::find(2)->first();               

    $latestTicket = Ticket::with('agence')->latest()->first();


    if ($latestTicket) {
        $latestTicketNumber = $latestTicket->ticket_number+1;
    } else {
        $latestTicketNumber = 1; // Set to 0 if no tickets exist
    }

    // dd($request->all());

    return view('ticket.take', [
        'latestTicket' => $latestTicketNumber ,
        'address' => $agence ? $agence->adress : $defaultAgence->adress,
        'city' => $agence ? $agence->ville : $defaultAgence->ville,
        'agence'=>$agence?$agence->nom:$defaultAgence->nom
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agence = Agence::where('adress', $request->address.','.$request->city)
        ->where('ville', $request->city)
        ->first();

        $agenceId = $agence ? $agence->id : 2; 

        Ticket::create([
            'isValid' => false,
            'agence_id' => $agenceId,
        ]);

        $latestTicket = Ticket::with('agence')->latest()->first();

        if ($latestTicket) {
            return to_route('ticket.create')->with(['success' => 'votre numero de ticket est ' . $latestTicket->ticket_number . " (votre demande est dans la liste d'attente)"]);
        } else {
            return to_route('ticket.create')->with(['success' => 'votre numero de ticket est ' . .1, 'enabled' => true]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket,Request $request)
    {
        $latestTicket = Ticket::latest()->first();

        $data = [
            'title' => 'ticket',
            'ticket_number' => $latestTicket->ticket_number,
            'date_creation' => date('m/d/Y'),
            'agence' => $request->agence,
            'ville'=>$request->city
        ];

        $pdf = Pdf::loadView('ticket.ticket-pdf', $data);
        return $pdf->download('ticket.pdf');
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
