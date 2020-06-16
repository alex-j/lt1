<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request, $product_id){
         
        // place order   
        // $userId = Auth::user()->getAuthIdentifier();
        
        return response()->json([
              'success' => 'true',
              'product_id' => $product_id
            ]);        
    }
    
}
