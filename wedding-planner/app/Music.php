<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $fillable = [
        'songTitle','type', 'url'
    ];

    public function songTypes() 
    {
        
        return [
              "Prelude",
              "Bridesmaids Entrance",
               "Bridal Entrance",
              "Gloria", 
              "Responsorial Psalm",
                "Gospel Acclamation", 
               "Lighting of Candle", 
               "Preparation",
                "Eucharistic Acclamations",
                 "Communion" ,
                  "Visitation to Mary" ,
                 "Recessional"
                 
        ];
    }
}
