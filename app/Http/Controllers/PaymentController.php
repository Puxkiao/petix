<?php

namespace App\Http\Controllers;
use App\Models\Payment;

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
}
