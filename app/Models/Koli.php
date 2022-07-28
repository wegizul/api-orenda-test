<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koli extends Model
{
    use HasFactory;
    protected $table = "koli";
    protected $fillable = [
        'user_id', 'nama'
    ];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
