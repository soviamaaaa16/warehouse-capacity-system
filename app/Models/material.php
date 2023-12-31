<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;

    protected $table = 'successdata';

    //protected $primaryKey = 'itemNumber';

    protected $fillable = [
        'itemNumber',
        'partNumber',
        'productName',
        'pjg',
        'lbr',
        'tng',
        'jr',
        'vol',
        'qtyBox',
        'qtyPack',
        'berat',
        'updated_time',
    ];

    public function material(){
        return $this->hasMany(Users::class);
    }

    
}
