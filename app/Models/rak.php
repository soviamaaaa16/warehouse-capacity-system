<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    use HasFactory;

    protected $table = 'Rak';

    protected $fillable = [
        'kode',
        'alamat',
        'pjg',
        'lbr',
        'tng',
        'tngAtas',
        'tngTotal',
        'vol',
    ];

    public function rak(){
        return $this->hasMany(Users::class);
    }
}
