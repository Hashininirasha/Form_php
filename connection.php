<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
    $host="localhost";
    $userName="root";
    $password="";
    $db="phpdb";
    $con=mysqli_connect($host,$userName,$password,$db);
    
    if($con)
    {
        echo "Can Access";
    }else
    {
        echo "can't access";
    }






    

?>