<?php

  $email = $_POST['email'];
  $password= $_POST['password'];

  //Database connection
  $conn = new mysqli('localhost','root','','Login');
  if($conn->connect_error){
      die('connection Failed : '.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into registration(email,password) values(?,?)");
      $stmt->bind_param("ss",$email, $password);
      $stmt->execute();
      $stmt->store_result();
      echo "registration successfully..";
      $stmt->close();
      $conn->close();
  }






?>