<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rak;
use DB;
use Illuminate\Support\Facades\Schema;


class RakController extends Controller
{
    public function index(){
        $partnum = DB::table('successdata')->get();
        
        return view('/rak', compact('partnum'));
    }

}


