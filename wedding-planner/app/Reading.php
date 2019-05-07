<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name'];
    protected $fillable = [
        'Option','Title','BibleVerse','Text','Type',
    ];

    public const B1 = "B-1";
    public const B2 = "B-2";
    public const B3 = "B-3";
    public const B4 = "B-4";
    public const B5 = "B-5";
    public const B6 = "B-6";
    public const B7 = "B-7";
    public const B8 = "B-8";
    public const B9 = "B-9";

    public const D1 = "D-1";
    public const D2 = "D-2";
    public const D3 = "D-3";
    public const D4 = "D-4";
    public const D5 = "D-5";
    public const D6 = "D-6";
    public const D7 = "D-7";
    public const D8 = "D-8";
    public const D9 = "D-9";
    public const D10 = "D-10";
    public const D11 = "D-11";
    public const D12 = "D-12";
    public const D13 = "D-13";
    public const D14 = "D-14";

    public const F1 = "F-1";
    public const F2 = "F-2";
    public const F3 = "F-3";
    public const F4 = "F-4";
    public const F5 = "F-5";
    public const F6 = "F-6";
    public const F7 = "F-7";
    public const F8 = "F-8";
    public const F9 = "F-9";
    public const F10 = "F-20";

    public static function readingOptions() 
    {
        
        return [
            self::B1, self::B2, self::B3, self::B4, self::B5, self::B6, self::B7, self::B8, self::B9,

            self::D1, self::D2, self::D3, self::D4, self::D5, self::D6, self::D7, self::D8, self::D9, self::D10, self::D11, self::D12, self::D13, self::D14,

            self::F1, self::F2, self::F3, self::F4, self::F5, self::F6, self::F7, self::F8, self::F9, self::F10,
        ];
    }
    
    public const FIRST = "First Reading";
    public const SECOND = "Second Reading";
    public const GOSPEL = "Gospel";

    public static function readingTypes() 
    {
        
        return [
            self::FIRST,
            self::SECOND,
            self::GOSPEL
        ];
    }
}
