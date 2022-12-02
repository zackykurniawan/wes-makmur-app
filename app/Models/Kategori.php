<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $guarded = ['id'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function postingan()
    {
        return $this->hasMany(Postingan::class);
    }
}
