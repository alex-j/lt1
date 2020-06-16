<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PayPalController extends Controller
{
    protected const PAYMENT_TYPE = 'Stripe';
    
    public function create(Request $request, $order_id){
         
        return response()->json([
              'success' => 'true',
              'product_id' => $order_id,
              'type' => self::PAYMENT_TYPE,
              'id' => 'INSERT ID'
            ]);        
    }
    
    public function show(Request $request, $order_id){
         
        return response()->json([
              'success' => 'true',
              'product_id' => $order_id,
              'type' => self::PAYMENT_TYPE,
              'status' => 'ok'
            ]);
        
    }
    
}
