<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'id',
        'name',
        'hospitalID',
        'donorID',
        'VisitDate'
    ];
    use HasFactory;

    public function donor(){
        return $this->belongsTo(Donor::class);
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function donation(){
        return $this->hasOne(Donation::class);
    }
}