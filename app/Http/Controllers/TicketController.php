<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;

class TicketController extends Controller
{
    public function index(){
        return view('getticket');
    }

    public function ticket(){
        return view('myticket');
    }
    
    public function viewticket(){
        return view('viewticket');
    }

    public function index_ticket(){
        $ticket = Ticket::all();
        return response()->json($ticket);
    }

    public function store_ticket(Request $request){
        $v_ticket = Validator::make($request->all(), [
            'id_ticket' => 'required',
            'id_users' => 'required',
            'id_studio' => 'required',
            'id_films' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
        if ($v_ticket->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_ticket->errors()
            ], 400);
        }
        $ticket = Ticket::create([
            'id_ticket' => $request->id_ticket,
            'id_users' => $request->id_users,
            'id_studio' => $request->id_studio,
            'id_films' => $request->id_films,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'ticket berhasil ditambahkan'
        ], 201);
    }

    public function show_ticket($id)
    {
        $ticket = Ticket::find($id);
        if (is_null($ticket)) {
            return response()->json([
                "success" => false,
                "message" => "Data tidak ditemukan.",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "ticket berhasil ditemukan.",
            "data" => $ticket
        ]);
    }

    public function update_ticket(Request $request, Ticket $id)
    {
        // Get the current data of the ticket
        $currentData = $id->getAttributes();  // Get current ticket attributes
    
        // Prepare the data for update
        $updatedData = [
            'id_users'     => $request->filled('id_users') ? $request->id_users : $currentData['id_users'],
            'id_studio' => $request->filled('id_studio') ? $request->id_studio : $currentData['id_studio'],
            'id_films' => $request->filled('id_films') ? $request->id_films : $currentData['id_films'],
            'price' => $request->filled('price') ? $request->price : $currentData['price'],
            'status' => $request->filled('status') ? $request->status : $currentData['status'],
        ];
    
        // Perform the update
        $id->update($updatedData);
    
        // Return success response
        return new UserResource(true, 'ticket Berhasil Diubah!', $id);
    }

    public function destroy_ticket(Ticket $id)
    {
        // destroy controller laravel
        $id->delete();
        return new UserResource(true, 'Data User Berhasil Dihapus!', $id);
    }
    
}

