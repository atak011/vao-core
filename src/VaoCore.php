<?php

namespace Atak011\VaoCore;

class VaoCore
{

    public static function helpers(){
        return new VaoCoreHelpers();
    }

    public static function mail(){
        return new VaoCoreMail();
    }

    public static function notification(){
        return new VaoCoreNotification();
    }

    public static function file(){
        return new VaoCoreFile();
    }

    public static function geolocation(){
        return new VaoCoreGeolocation();
    }
}
