<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];
    use HasFactory;

    public function bloodType(){

        return $this->hasMany(BloodType::class);
    }
}