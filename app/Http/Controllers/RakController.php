<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rak;
use DB;
use Illuminate\Support\Facades\Schema;


class RakController extends Controller
{
    public function index(){
        $alamat = DB::table('Rak')->get();
        
        return view('/rak', compact('alamat'));
    }

    public function getRak(Request $request){
        $alamat = $request->input('alamat');

        $data = rak::where('alamat', $request->alamat)->first();
        return response()->json($data);
    }

}


