<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'price',
        'property_size',
        'garage_size',
        'rooms',
        'bathrooms',
        'availability',
        'description',
        'available_from',
        'renter_id',
    ];
    public function renter(){
        return $this->belongsTo(Renter::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
