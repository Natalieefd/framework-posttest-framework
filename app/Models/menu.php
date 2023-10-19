<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = ['nama', 'stok', 'harga', 'kategori_id'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
}
