<?php

use App\Models\mainData;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\material;

$partNum = $_GET['partNum'];
$data = DB::table('mainData')::where('partNum', $partNum)->first();

return json_encode($data);

?>