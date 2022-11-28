<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'id',
        'name',
        'BloodID'
    ];
    use HasFactory;

    public function bloodType(){

        return $this->belongsTo(BloodType::class);
    }

    public function visit(){

        return $this->hasMany(Visit::class);
    }
}
