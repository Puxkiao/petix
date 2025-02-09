<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index_payment(){
        $payment = Payment::all();
        return response()->json($payment);
    }

    public function store_payment(Request $request){
        $v_payment = Validator::make($request->all(), [
            'id_payment' => 'required',
            'id_ticket' => 'required',
            'payment_method' => 'required',
            'total_price' => 'required',
            'status' => 'required',
            'amount' => 'required'
            
        ]);
        if ($v_payment->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_payment->errors()
            ], 400);
        }
        $payment = Payment::create([
            'id_payment' => $request->id_payment,
            'id_ticket' => $request->id_ticket,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'status' => $request->status,
            'amount' => $request->amount
            
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'payment berhasil ditambahkan'
        ], 201);
    }

    public function show_payment($id)
    {
        $payment = Payment::find($id);
        if (is_null($payment)) {
            return response()->json([
                "success" => false,
                "message" => "Data tidak ditemukan.",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "payment berhasil ditemukan.",
            "data" => $payment
        ]);
    }

    public function update_payment(Request $request, Payment $id)
    {
        // Get the current data of the payment
        $currentData = $id->getAttributes();  // Get current payment attributes
    
        // Prepare the data for update
        $updatedData = [
            'id_ticket'      => $request->filled('id_ticket') ? $request->id_ticket : $currentData['id_ticket'],
            'payment_method' => $request->filled('payment_method') ? $request->payment_method : $currentData['payment_method'],
            'total_price'    => $request->filled('total_price') ? $request->total_price : $currentData['total_price'],
            'status'         => $request->filled('status') ? $request->status : $currentData['status'],
            'amount'         => $request->filled('amount') ? $request->amount : $currentData['amount'],
            'payment_date'   => $request->filled('payment_date') ? $request->payment_date : $currentData['payment_date'],
            
        ];
    
        // Perform the update
        $id->update($updatedData);
    
        // Return success response
        return new UserResource(true, 'payment Berhasil Diubah!', $id);
    }

    public function destroy_payment(Payment $id)
    {
        // destroy controller laravel
        $id->delete();
        return new UserResource(true, 'Data Payment Berhasil Dihapus!', $id);
    }
}
