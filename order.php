<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        

</head>
<body>
    
    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="img/cover1.jpg" alt="">


            <h1>Check out the menu!</h1>
            <button type="button" class="switch-btn" onclick="document.location.href='menu.php'">Menu</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1 style=  "margin-top : 22vh;">Current Orders</h1>
            <button type="button" class="btn" onclick="document.location.href='disp-cur-order.php'">View orders</button>

        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="img/cover1.jpg" alt="">
            <h1>Hungry!!</h1>
            <h3>Place an order and get it delivered!!</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Order</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>Place order</h1>
            <form action="place.php" method="post">
                <input type="text" name="item" class="input-box" placeholder="Item Name">
                <input type="text" name="price" class="input-box" placeholder="Price you offer">
                <input type="text" name="block" class="input-box" placeholder="Block">
                <input type="text" name="dont_show" class="input-box" placeholder="Dont Show to roll no's">
                <input type="submit" name="order-btn" class="btn" value="Order">
            </form>
        </div>
    </section>

    <script src="js/main.js"></script>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

   <!-- <?php echo "<h1> Welcome ".$_SESSION['username']. $_SESSION['roll_no']. $_SESSION['email']. $_SESSION['ph_no'] ." To Dashboard </h1>" ?>-->

    <h2><a class = "btn btn-block" href="logout.php" style = "background-color: #2a0d6d;
    color: #fff;">Logout</a></h2>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
