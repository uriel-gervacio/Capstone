<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name'];
    protected $fillable = [
        'brideFirstName', 'groomFirstName', 'brideLastName','groomLastName', 
        'brideAddress','groomAddress', 'brideCity','groomCity', 'brideState',
        'groomState','brideZipCode', 'groomZipCode', 'brideEmail', 'groomEmail',
        'bridePhoneNumber','groomPhoneNumber','weddingDate','weddingTime',
        'rehearsalDate','rehearsalTime','unityCandle', 'sideCandles', 'litSideCandles',
        'firstReading','firstReader','secondReading', 'secondReader', 'gospel',
        'faithPrayer', 'thirdReader', 'giftPresenter', 'flowersToMoms', 'minister',
        'altarCompanion', 'conclusion','florist', 'photographer', 'videographer', 'additionalInfo',
        'flowerGirl', 'ringBearer', 'altarServers', 'grandparents', 'gmEscort',
        'gpEscort', 'runner', 
        'prelude','lighting','bridesmaids','preparation','bridal','eucharist','gloria', 'communion',
        'responsorialPsalm', 'visitation', 'gospelSong','recessional',
        'adminComplete', 'coupleComplete',
        'brideOfHonor', 'bestMan', 
        'hashID', 'matrimonyType',
    ];

    public function path()
    {
        //concatenation
        //return '/projects/' . $this->id;
        //interpolation
        return "/weddings/{$this->id}";
    }

    public function participants()
    {
        return $this->hasMany(Participant::class, 'wed_id');
    }

    public function ushers()
    {
        return $this->hasMany(Usher::class, 'wed_id');
    }
}
