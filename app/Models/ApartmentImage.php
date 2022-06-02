<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
    use HasFactory;
    //protected $table = 'apartment_images';
    protected $guarded = [''];


    public function apartment(){
        return $this->belongsTo(Apartment::class)->withTimestamps();
    }
}
