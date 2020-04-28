<?php

require_once('connection.php');
session_start();

    if(isset($_POST['login']))
    {
       if(empty($_POST['Uname']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from loginform where user_name='".$_POST['Uname']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
            if(mysqli_fetch_assoc($result)){
                $_SESSION['User']=$_POST['Uname'];
                header("location:welcome.php");
            }
            else{
                header("location:index.php?Invalid= Please Enter Corrector Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now';
    }
?>