<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    use HasFactory;

    protected $table = 'partNumber';

    protected $primaryKey = 'id';

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
        'updated_at',

    ];

    public function rak(){
        return $this->hasMany(Users::class);
    }
}
