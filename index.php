<?php


//include_once 'myClasses/actions/Run.php';
//include_once 'myClasses/animals/Dog.php';
//include_once 'myClasses/actions/Drive.php';

//without include - we should cut this function to autoload.php file and add to index.php require_once autoload.php
/* spl_autoload_register(function ($classname){
    if (file_exists('myClasses/actions/'.$classname.'.php')){
        include_once 'myClasses/actions'.$classname.'.php';
    }
    elseif (file_exists('myClasses/animals/'.$classname.'.php')){
        include_once 'myClasses/animals/'.$classname.'.php';
    }
    else{
        include_once $classname.'.php';
    }
    //we can continue to iterate all classfolders
});
*/
namespace index;
use myClasses\actions\Drive;
use myClasses\animals\Dog;


require_once 'vendor/autoload.php';

$drive=new Drive(true);
echo $drive;
$dog=new Dog('Toplan');
echo $dog->get_dogname();

