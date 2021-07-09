<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{

    function index(Request $request)
    {
        return response()->json($this->classe::all(),200);
    }

}
