<?php
       include_once "connection.php";
       if(isset($_POST["addCategory"]))
       {
            // $categoryid = $_POST['catId'];
            $categoryname = $_POST['catName'];
            $selectcategory = $_POST['selectCategory'];
            $categorydesc = $_POST['catDesc'];
            $categorydate = $_POST['catDate'];
            // echo $categoryid."--".$categoryname."--".$selectcategory."--".$categorydesc."--".$categorydate;
            $cont= "insert into category(catName,catType,catdesc,catdate) values ('$categoryname', '$selectcategory', '$categorydesc', '$categorydate')";
            $result = mysqli_query($conn , $cont);
            if($result)
            {
                $message = "Thanks for add";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
                $message = "Must be filled";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        

       }
       
?>