<?php

print_r($_POST);
$link = mysqli_connect("localhost", "hr", "p@r0la", "hr");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    exit;
}

if(count($_POST)>0) {
    $nume=$_POST['nume'];
    $prenume=$_POST['prenume'];
    $email=$_POST['email'];	

    $query="insert into formularlab3(nume,prenume,email) values('".$nume."','".$prenume."','".$email."');";

    $link->query($query);
    $_POST = array();
    header("Location: fisier.php");		
    exit();
}




mysqli_close($link);

?>

