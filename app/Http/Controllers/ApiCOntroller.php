<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCOntroller extends Controller
{
    //

    public function login()
    {
        return response()->json([
            'message' => 'Hello from Laravel!',
        ]);
    }
}
