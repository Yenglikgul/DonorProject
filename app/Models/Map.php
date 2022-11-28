<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'id',
        'coorX',
        'coorY'
    ];
    use HasFactory;

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
