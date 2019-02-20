<?php
       include_once 'connection.php';
       if(isset($_POST["submitfeedback"]))
       {
            $fdname = $_POST['Fdname'];
            $fdemail = $_POST['Fdemail'];
            $textar = $_POST['Textar'];
            $cont= "insert into contact(Name,Email,Message) values ('$fdname' , '$fdemail', ' $textar')";
            $result = mysqli_query($conn , $cont);
            if($result)
            {
                header('location:contact.php?check="true"');
            }
            else
            {
                echo "<script>alert('Please Fill All Field')
                </script>";
            }
        

       }
       
?>
