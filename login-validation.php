<?php
       include_once './connection.php';
       if(isset($_POST["submitFormlogin"]))
       {
       
        $email =$_POST['Email'];
        $password =$_POST['Password'];

        $q = "select * from registation where Email = '$email' && Password = '$password' ";
        $result = mysqli_query($conn , $q);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
       
            $_SESSION['username'] = $email;
            header('location:index.php?checkpost="true"');
       
        }
        else
        {
          
           header('location:login.php');
         
        }
        
    }
?>

	
