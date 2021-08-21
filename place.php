<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['order-btn'])) {

      $username = $_SESSION['username'];
      $roll_no = $_SESSION['roll_no'];
      $ph_no = $_SESSION['ph_no'];
      $email = $_SESSION['email'];
      $item = $_POST['item'];
      $price = $_POST['price'];
      $block = $_POST['block'];
      $dont_show=$_POST['dont_show'];

      try {
        $SQLInsert = "INSERT INTO current_order (username,item,price,block,ph_no,roll_no,email,to_date,dont_show)
                     VALUES (:username,:item,:price,:block,:ph_no,:roll_no,:email,now(),:dont_show)";
  
        $statement = $conn->prepare($SQLInsert);
        $statement->execute(array(':username' => $username,':item' =>$item,':price' =>$price,':block'=> $block,':roll_no' => $roll_no,':ph_no' => $ph_no, ':email' => $email,':dont_show'=> $dont_show));
  
        if($statement->rowCount() == 1) {
          header('location: order.php');
        }
      }
      catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }


}

?>