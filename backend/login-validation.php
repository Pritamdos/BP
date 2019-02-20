<?php
       include_once 'connection.php';
       if(isset($_POST["submitFormlogin"]))
       {
       
        $email =$_POST['Email'];
        $password =$_POST['Password'];

        $q = "select * from registation where Email = '$email' && Password = '$password' ";
        $result = mysqli_query($conn , $q);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            if($email == 'pritamsoni5555@gmail.com')
            {
                header('location:admin-dashboard.php');
            }
            else
            {
                header('location:login.php');

                if($num == 1)
                {
                    $_SESSION['username'] = $email;
                    header('location:index.php?checkpost="true"');
                }
                else
                {
                    $message = "Username and/or Password incorrect.\\nTry again.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
       
      
       
        }
        else
        {
        
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
           
         
        }
        
    }
?>

	
