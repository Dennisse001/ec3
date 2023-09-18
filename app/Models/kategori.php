<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';

    protected $fillable = ['judul', 'isi', 'galeri', 'brand','stock', 'user_id', 'cover'];

    public function product()
    {
        return $this->hasMany(ProductAdmin::class, 'kategory_id');
    }
}
