<?php

namespace App\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\material;
use DB;

//use CodeIgniter\API\ResponseTrait;
//use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{

    use ResponseTrait;

    public function show($itemnum = null)
    {
        $model = new Material();
        $data = $model->findAll();

        return $this->respond($data);
    }
}