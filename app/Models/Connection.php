<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $fillable = [
        'id',
        'phone',
        'webSite',
        'email'
    ];
    use HasFactory;

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
