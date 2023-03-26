<?php
$name = $argv[1];
$year = $argv[2];

function age($i){
    $today = date("Y");
    $age = $today - $i;
    return $age;
}
function voter($j){
    $today = date("Y");
    $age = $today - $j;
    if ($age >= 18){
        return "You are a voter";
    }
    else{
        return "Your are not a voter";
    }
}

function senior($k){
    $today = date("Y");
    $age = $today - $k;
    if ($age >= 69){
        return "You are a Senior Citizen";
    }
    else{
        return "Your are not a Senior Citizen";
    }
}

echo "Your name is ". $name . "and your age is ". age($year). "\n";
echo voter($year)."\n";
echo senior($year);


?>
