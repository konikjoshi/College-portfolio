<?php
    $con = mysqli_connect('localhost','root');

    if($con)
    {
        echo "connection established";
    }
    else
    {
        echo "connection breach";
    }
mysqli_select_db($con,'basicdata');

$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$MOBILE = $_POST['MOBILE'];
$MESSAGE = $_POST['MESSAGE'];

$query = "insert into inform (NAME, EMAIL, MOBILE, MESSAGE)
    values ('$NAME', '$EMAIL', '$MOBILE', '$MESSAGE')";

mysqli_query($con,$query);
header('location: thanks.php');
?>