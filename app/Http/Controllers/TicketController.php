<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index(){
        return view('getticket');
    }

    public function ticket(){
        return view('myticket');
    }

    public function index_ticket(){
        $ticket = Ticket::all();
        return response()->json($ticket);
    }
    
}

