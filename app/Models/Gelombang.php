<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    use HasFactory,  SoftDeletes;
    protected $table = 'gelombangs';
    protected $fillable = [
        'nama_gelombang', 
        'aktif', 
    ];
    
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
