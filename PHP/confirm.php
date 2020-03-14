<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>THANK YOU!!</h1>

    <pre>
<?php
/*
var_dump($_POST);
array(7) {
  ["firstName"]=>
  string(8) "Benjamin"
  ["lastName"]=>
  string(7) "Halbert"
  ["linkedInURL"]=>
  string(16) "httplinkedin.com"
  ["emailAddress"]=>
  string(27) "benjaminhalbert25@gmail.com"
  ["howMet"]=>
  string(6) "meetUp"
  ["email"]=>
  string(2) "on"
  ["method"]=>
  string(4) "HTML"
}
*/

require('validation.php');

$isValid = true;

if(validName($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}
else echo("Must enter a first name<br>");

if(validName($_POST['latstName'])){
    $firstName = $_POST['lastName'];
}
else echo("Must enter a last name<br>");

if($_POST['email'] == "on"){
    if(validAddress($_POST['emailAddress'])){
        $email = $_POST['emailAddress'];
    }
    else echo("Please enter a valid email<br>");
}

if(!$_POST['linkedInURL'] == ""){
    if(validURL($_POST['linkedInURL'])){
        $URL = $_POST['linkedInURL'];
    }
    else echo("please enter a valid URL<br>");
}

if(validmet($_POST['howMet'])){
    $howMet = $_POST['howMet'];
}
else echo("please select a valid meeting method<br>")

?>
    </pre>

</body>
</html>