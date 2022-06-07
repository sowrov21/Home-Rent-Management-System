<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $guarded = [''];


    public function locations()
    {
      return  $this->belongsTo(Location::class,'location_id','id');
    }

    
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
        //return $this->belongsToMany(Tag::class,'apartment_tag', 'apartment_id', 'tag_id');
    }
    public function apartment_images(){
        return $this->hasMany(ApartmentImage::class)->withTimestamps();
    }
    public function user(){
        return $this->belongsTo(User::class,'owner_id','id');//Convension nt maintained. So, must specify local + foreign key
    }
}
