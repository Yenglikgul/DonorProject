<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'id',
        'name',
        'address',
        'storageID',
        'mapID',
        'connectionID'
    ];
    use HasFactory;

    public function bloodType(){
        return $this->hasMany(BloodType::class);
    }

    public function visit(){
        return $this->hasMany(Visit::class);
    }

    public function connection(){
        return $this->hasMany(Connection::class);
    }

    public function map(){
        return $this->hasOne(Map::class);
    }
}