<?php
    function isEmpty($field){
        return empty(trim($field));
    }

    function isText($field){
        return preg_match('/^[a-zA-Z ]+$/', $field);
    }

    function isLicense($field){
        return preg_match('/^PROD[0-9]{5}+$/', $field);
    }

    function isEntero($field){
        return is_numeric($field) && (int)$field > 0;
    }

    function isMoney($field){
        return preg_match('/^[0-9]+(\.[0-9]{2})?+$/', $field);
    }

    function isImage($field){
        
        $patron = "/\.(jpe?g|png)$/i";
        $verificado = preg_match($patron, $field);
        
        return $verificado;
        }   

?>