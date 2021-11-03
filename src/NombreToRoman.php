<?php declare(strict_types=1);

class NombreToRoman
{
    public static function decimalToRoman($d):string
    {
        $r = "";
        for($i = 0 ; $i < $d; $i++){
            return $r .= "I";
        }
        
        
        return $r;
    }
    
}
