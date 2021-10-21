<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesawatModel extends Model
{
    protected $table = 'pesawat';
    protected $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id', 'nama_pesawat', 'eco_seat', 'buss_seat', 'first_seat',
    ];
}
