<?php
$id="";
$name="";


      session_start();
    if(isset($_SESSION['login'])&& $_SESSION['login']=='true' ){
    $id=$_SESSION['id'];
    include 'Database.php';
    $from="SELECT * FROM `users` WHERE `id`='$id'";

   $result=mysqli_query($conn,$from);
   $row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$lname=$row['lname'] ;         #." ".$row['lname'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];









    }else{

      header('location:login.php');
    }
    ?>