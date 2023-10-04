<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denah extends Model
{

    protected $table = 'successdata';

    protected $primaryKey = 'itemNumber';

    public function material(){
        return $this->hasMany(Users::class);
    }
}
