<?php

namespace App\Http\Controllers\Helpers;
use Illuminate\Support\Str;
class General
{
    public static function strGenerator($no)
    {
        return   Str::random($no); // how many str do u wanna use
    }

    public static function chrGenerator($prefix)
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        $date = date("his");
        return $prefix.$UpperCase.$NewCase.$LowerCase.$date;
    }
}
