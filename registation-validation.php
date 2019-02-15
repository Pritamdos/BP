<?php
       include_once './connection.php';
       if(isset($_POST["submitForm"]))
       {
        $fname =$_POST['Fname'];
        $lname =$_POST['Lname'];
        $email =$_POST['Email'];
        $password =$_POST['Password'];
        $phone =$_POST['Phone'];
        $cpassword =$_POST['Cpassword'];

        $q = "select * from registation where Fname = '$fname' && Password = '$password' ";
        $result = mysqli_query($conn , $q);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            echo "<script>alert('Email Id Already Exits')
            </script>";
        }
        else
        {
            if($password == $cpassword)
            {
                $qy= "insert into registation(Fname,Lname,Email,Password,Phone) values ('$fname' , '$lname', '$email', '$password', '$phone')";
                $result = mysqli_query($conn , $qy);
                if($result)
                {   
                    header('Location:login.php');
                }
                else
                {
                    echo "<script>alert('Email Id Already Exits')
                    </script>";
    
                }
            }
            else
            {
                echo "<script>alert('Password Not Match')
                </script>";
                
            
            }
         
        }
        
        

       }
       
?>
