<?php

namespace App\Helpers;

class InternetCheck {
    public static function check(){
        $connected = @fsockopen('www.google.com', 80);
        if ($connected) {
            fclose($connected);
            return true;
        }
        return false;
    }
}