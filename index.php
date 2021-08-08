<?php


//include_once 'myClasses/actions/Run.php';
//include_once 'myClasses/animals/Dog.php';
//include_once 'myClasses/actions/Drive.php';

//without include
spl_autoload_register(function ($classname){
   if (file_exists('myClasses/actions/'.$classname.'.php')){
       include_once 'myClasses/actions';
   }
   elseif (file_exists('myClasses/animals/'.$classname.'.php')){

   }
   else{
       include_once $classname.'.php';
   }
   //we can continue to iterate all classfolders
});

$drive=new \actions\Drive(true);
echo $drive;
$dog=new Dog('Toplan');
echo $dog->get_dogname();
$testclass=new TestClass();
