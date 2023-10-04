<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\Denah;
use DB;

class DenahController extends Controller
{
    public function index(){
        $itemnum = DB::table('successdata')->get();
        
        return view('/denah', compact('itemnum'));
    }

}
