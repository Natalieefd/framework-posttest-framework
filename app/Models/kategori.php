<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = ['jenis'];

    public function menu(): HasMany
    {
        return $this->hasMany(menu::class);
    }
}
