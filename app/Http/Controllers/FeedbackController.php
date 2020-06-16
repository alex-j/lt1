<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create(Request $request, $product_id){
         
        // $userId = Auth::user()->getAuthIdentifier();
        
        return response()->json([
              'success' => 'true',
              'product_id' => $product_id,
              'id' => 'INSERT ID'
            ]);        
    }
    
    public function list(Request $request, $product_id){
         
        return response()->json([
              'success' => 'true',
              'product_id' => $product_id,
              'list' => []
            ]);
        
    }
    
}
