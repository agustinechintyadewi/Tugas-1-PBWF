<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class hewanController extends Controller
{
    public function index(){
        $hewan = DB::table('hewan')->get();
        return view('hewan.listhewan', compact('hewan'));
    }
}
