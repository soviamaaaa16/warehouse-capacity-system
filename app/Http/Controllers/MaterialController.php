<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\material;
use DB;

class MaterialController extends Controller
{
    public function index(){
        $itemnum = DB::table('successdata')->get();
        
        return view('/material', compact('itemnum'));
    }

    public function getMaterial($itemNumber){
        $fill = DB::table('mainData')->where('itemnum', $itemNumber)->pluck('partNumber');
        return Response::json(['success'=>true, 'product'=>$fill]);
    }

}
