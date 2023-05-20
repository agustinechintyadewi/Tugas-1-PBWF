<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class shelterController extends Controller
{
    public function index(){
        $shelter = DB::table('shelter')->get();
        return view('shelter.shelter', compact('shelter'));
    }
}
