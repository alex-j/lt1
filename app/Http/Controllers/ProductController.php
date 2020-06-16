<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create(Request $request){
        
        return response()->json([
              'success' => 'true',
              'id' => 'INSERT ID'
            ]);
        
    }
    
    public function destroy(Request $request, $id){
      
        return response()->json([
              'success' => 'true',
              'id' => $id
            ]);
        
    }
    
    
}
