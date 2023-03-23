<?php

  $name= $_POST['name'];
  $email= $_POST['email'];
  $number= $_POST['number'];
  $messege= $_POST['messege'];

  //Database connection
  $conn = new mysqli('localhost','root','','contactus');
  if($conn->connect_error){
      die('connection Failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into registration (name,email,number,messege) values(?, ?, ?, ?)");
      $stmt->bind_param ("ssis",$name, $email, $number, $messege);
      $stmt->execute();
      echo "registration successfully..";
      $stmt->close();
      $conn->close();
  }

  ?>