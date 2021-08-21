<?php

require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $rollno = $_POST['user-rollno'];
      $phno = $_POST['user-phno'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $SQLInsert = "INSERT INTO users1 (roll_no, username, ph_no,password,email,to_date)
                   VALUES (:rollno, :username, :phno, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':rollno' => $rollno,':phno' => $phno,':username' => $username, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>