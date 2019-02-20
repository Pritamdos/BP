<?php
       include_once "connection.php";
       if(isset($_POST["subbtn"]))
       {
            $emailsub = $_POST['Emailsub'];
            $cont= "insert into subemail(Suemail) values ('$emailsub')";
            $result = mysqli_query($conn , $cont);
            if($result)
            {
                $message = "Thanks For Subscribe";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
                // $message = "Email Id Must Require.\\nTry again.";
                // echo "<script type='text/javascript'>alert('$message');</script>";
            }
        

       }
       
?>