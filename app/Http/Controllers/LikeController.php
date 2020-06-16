<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function create(Request $request, $product_id){
        
        // $userId = Auth::user()->getAuthIdentifier();
         
        // add like    
        return response()->json([
              'success' => 'true',
              'product_id' => $product_id
            ]);
        
    }
    
     public function destroy(Request $request, $product_id){
        
        // $userId = Auth::user()->getAuthIdentifier();
         
        // add like    
        return response()->json([
              'success' => 'true',
              'product_id' => $product_id
            ]);
        
    }
    
}
