<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
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
        // $this->middleware('applanguage')->only(['index','create','store']);
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
        

        // $request->validate(['language' => 'required']);

        $latestTicket = Ticket::latest()->first();

        if($latestTicket){
            return view('ticket.take',['latestTicket'=>$latestTicket->ticket_number+1]);
        }
        else{
            return view('ticket.take',['latestTicket'=>1]);
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

        if($latestTicket){
            return to_route('ticket.create')->with(['success'=>'votre numero de ticket est '.$latestTicket->ticket_number,'enabled'=>true]);
        }
        else{
            return to_route('ticket.create')->with(['success'=>'votre numero de ticket est '..1,'enabled'=>true]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        $latestTicket = Ticket::latest()->first();

        $data=[
            'title'=>'ticket',
            'ticket_number'=>$latestTicket->ticket_number,
            'date_creation'=>date('m/d/Y'),
            'agence'=>'redal rabat',
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
