<?php

    spl_autoload_register('autoL');

    function autoL($className){

        $path = 'classes/';
        $ext = '.class.php';
        $fileName = $path.$className.$ext;

        if(!file_exists($fileName)){

            return false;
        }

        include_once $path.$className.$ext;
    }