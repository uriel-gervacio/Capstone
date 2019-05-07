<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usher extends Model
{
    protected $guarded = [];

    protected $fillable = ['usher'];
    
    protected $touches = ['wedding'];

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}
