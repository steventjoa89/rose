<?php

  if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])){
    // Insert into database
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "rose";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO email (`name`, email_address, `message`, created_at, updated_at) VALUES ('".addslashes($_POST['name'])."', '".addslashes($_POST['email'])."', '".addslashes($_POST['message'])."', now(), now())";
    if ($conn->query($sql) === TRUE) {
      echo "OK";
    }

    $conn->close();
  }


  
?>