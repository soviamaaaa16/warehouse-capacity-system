<?php

namespace App\Http\Controllers;

use App\Models\mainData;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\material;
use DB;

class MaterialController extends Controller
{
    public function index(){
        $partnum = DB::table('mainData')->get();
        
        return view('/material', compact('partnum'));
    }

    public function getData(Request $request){
        $partNum = $request->input('partNum');

        //$data = DB::table('mainData')::where('partNum', $partNum)->first();

        //return json_encode($data);

        $data = material::where('partNumber', $request->partNum)->first();
        return response()->json($data);
    }
}
?>
