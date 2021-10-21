<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id', 'nama', 'nomor_telepon', 'email', 'password',
    ];
}
