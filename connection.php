<?php
        $servername = "localhost";
        $username = "BP";
        $password = "Pritam@123";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";
?>s