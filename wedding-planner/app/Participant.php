<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = [];

    protected $fillable = ['participant'];
    
    protected $touches = ['wedding'];

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}


