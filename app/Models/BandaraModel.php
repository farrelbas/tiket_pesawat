<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandaraModel extends Model
{
    protected $table = 'bandara';
    protected $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id','kode','kota','nama_bandara',
    ];
}
