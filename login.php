<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login-btn'])) {

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

    try {
      $SQLQuery = "SELECT * FROM users1 WHERE username = :username";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':username' => $user));

      while($row = $statement->fetch()) {
        $id = $row['id'];
        $hashed_password = $row['password'];
        $username = $row['username'];
        $roll_no = $row['roll_no'];
        $email = $row['email'];
        $ph_no = $row['ph_no'];

        if(password_verify($password, $hashed_password)) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;
          $_SESSION['roll_no'] = $roll_no;
          $_SESSION['email'] = $email;
          $_SESSION['ph_no'] = $ph_no;
          header('location: order.php');
        }
        else {
          echo "Error: Invalid username or password";
        }
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>
