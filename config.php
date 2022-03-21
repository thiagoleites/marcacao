<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','marcacao');


function myAutoload($class){
    if(file_exists('./classes/'.$class.'.php')){
        include './classes/'.$class.'.php';
    }
}
spl_autoload_register('myAutoload');
