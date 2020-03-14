<?php
function validName($name){
    return !empty(trim($name));
}

function validAddress($address){
    return !empty(trim($address)) && strpos($address, "@") && strpos($address, ".");
}

function validURL($URL){
    return !empty(trim($URL)) && strpos($URL, "http") && strpos($URL, ".com");
}

function validmet($met){
    $types = array("none", "meetUp", "jobFair", "linkedIn", "other", "haventMet");
    return in_array($met, $types);
}