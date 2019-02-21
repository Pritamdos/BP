<?php
       include_once "connection.php";
       if(isset($_POST["addCategory"]))
       {
            // $categoryid = $_POST['catId'];
            $categoryname = $_POST['catName'];
            $selectcategory = $_POST['selectCategory'];
            $categorydesc = $_POST['catDesc'];
            $categorydate = $_POST['catDate'];
            $cont= "insert into category(catName,catType,catdesc,catdate) values ('$categoryname', '$selectcategory', '$categorydesc', '$categorydate')";
            $result = mysqli_query($conn , $cont);
            if($result)
            {
                header('Location:admin-dashboard.php');
               
            }
            else
            {
                $message = "Must be filled";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        

       }
       if(isset($_POST['deleteitem']))
       {
        $id=$_POST['deleteitem'];
        $sql = "DELETE FROM category WHERE catId='$id'"; 
        if(mysqli_query($conn, $sql)){ 
            // echo "Record was deleted successfully."; 
        }  
        else{ 
            // echo "ERROR: Could not able to execute"; 
        } 
       }
?>