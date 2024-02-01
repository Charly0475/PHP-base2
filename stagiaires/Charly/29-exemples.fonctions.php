<?php
require "array.php";
//procédure
function helloWorld(){
    echo"hello world";

}
helloWorld();

// fonction avec retour
function myHelloWorld(){
    //envoit une valeur et s'arrête
    return "Hello World";
}

echo myHelloworld();


function upperArray(array $tab): string
{
    $txt = " ";
    foreach($tab as  $value){
        if(is_array($value)){
            $txt .= upperArray($value);
        }else{

        $txt .= mb_strtoupper($value)."<br>";
        }
    }
    return $txt;
}

echo upperArray([]);
echo "<br>";
echo upperArray($moisFr);
echo upperArray($semaineFr);
echo upperArray($classe18);