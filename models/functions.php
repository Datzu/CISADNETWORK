<?php

include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
    }
    
    function encrypt($password) {
        return sha1($password);
    }
    
    function getDataByType($link, $type, $string) {
        $query = 'select * from '.$type.' like title = '.$string;
    }
    
?>
