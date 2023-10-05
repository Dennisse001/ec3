<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productadmin extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = ['judul', 'isi', 'galeri', 'brand','stock', 'user_id', 'kategori', 'cover'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // ProductAdmin.php

public function category()
{
    return $this->belongsTo(kategori::class, 'id');
}

}

