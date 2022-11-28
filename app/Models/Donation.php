<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'id',
        'acceptanceStatus',
        'donationCode'
    ];
    use HasFactory;

    public function visit(){
        return $this->belongsTo(Visit::class);
    }
}
