<?php
  $data = [];

  if(isset($_POST['email'])){
    // Insert into database
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "rose";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO subscriber (email_address, sent_subscription_email, created_at, updated_at) VALUES ('".$_POST['email']."', 0, now(), now())";
    if ($conn->query($sql) === TRUE) {
      echo "OK";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

  
?>