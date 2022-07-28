<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "item";
    protected $fillable = [
        'koli_id', 'nama', 'quantity'
    ];

    public function koli()
    {
        return $this->belongsTo(Koli::class);
    }
}
