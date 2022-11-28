<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $fillable = [
        'id',
        'name',
        'rhFactor'
];
    use HasFactory;

    public function donor(){

        return $this->hasMany(Donor::class);
    }
}
