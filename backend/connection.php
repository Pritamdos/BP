<?php
    session_start();

    $conn = new mysqli('localhost','root');

    if ($conn) 
    {
        // echo "Connection Successful Done";
    } 
    else
    {
        // echo "Connected Unsuccessfully";
    }
    mysqli_select_db($conn , 'BP');
?>