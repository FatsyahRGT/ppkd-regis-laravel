<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'jurusans';
    protected $fillable = [
        'nama_jurusan', 
    ];
}
