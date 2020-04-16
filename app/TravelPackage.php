<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'foods', 'language', 'date_departure', 'day', 'night', 'type', 'price'
    ];

    protected $hidden = [
        
    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');

    }
}
