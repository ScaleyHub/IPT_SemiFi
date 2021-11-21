<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = [
        'name', 'description', 'quantity', 'price'
    ];

    public function merchandise(){
        return $this->belongsTo('App\Merchandise');
    }
}
