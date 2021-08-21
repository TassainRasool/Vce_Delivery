<!--try {
      $SQLInsert = "INSERT INTO users1 (roll_no, username, ph_no,password,email,to_date)
                   VALUES (:rollno, :username, :phno, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':rollno' => $rollno,':phno' => $phno,':username' => $username, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: order.php');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }-->

    <form action="login.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="User Name">
                <input type="password" name="user-pass" class="input-box" placeholder="Password">
                <input type="submit" name="login-btn" class="btn" value="Login">
            </form>

            <table border = "1px">
                <tr>
                    <td>S NO</td>
                    <td>ITEMS</td>
                    <td>PRICE</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Frankie</td>
                    <td>Rs. 60/-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Vada Pav</td>
                    <td>Rs. 40/-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BhelPuri</td>
                    <td>Rs. 30/-</td>
                </tr>
                    
            </table>