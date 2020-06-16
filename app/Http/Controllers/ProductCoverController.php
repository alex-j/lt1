<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductCoverController extends Controller
{
    public function update(Request $request, $id){
         
        // update product cover
        
        return response()->json([
              'success' => 'true',
              'id' => $id
            ]);
        
    }
    
}
