<?php

namespace App\Http\Controllers;
use App\Models\Payment;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index_payment(){
        $payment = Payment::all();
        return response()->json($payment);
    }
}
