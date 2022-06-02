<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function apartments(){
        return $this->belongsToMany(Apartment::class);
        //return $this->belongsToMany(Apartment::class,'apartment_tag', 'tag_id', 'apartment_id');
    }
}
