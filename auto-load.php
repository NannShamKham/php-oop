<?php

spl_autoload_register(function ($class){
    include "./Classes/".$class.".php";
});

spl_autoload_register(function ($classes){
   include "./Classes/".$classes.".php";
});
