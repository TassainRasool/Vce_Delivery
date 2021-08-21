<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php
    require_once 'source/session.php';
    require_once 'source/db_connect.php';

    // $queries = array();
    // parse_str($_SERVER['QUERY_STRING'], $queries);

    // echo  `$queries['email']`; $_COOKIE['acceptedUserEmail']
        $to_email = $_COOKIE['acceptedUserEmail'];
        $subject = "Order Accepted!";
        $body = "Hello, your order has been accepted by " .  $_SESSION['username'] . ". Please Get In Touch with him/her with the contact information provided below. 
        Roll No : ". $_SESSION['roll_no'] .", 
        Email : ".$_SESSION['email']."
        Mobile Number : ".$_SESSION['ph_no'];
        $headers = "From: syedmahboob272@gmail.com";

        if(mail($to_email, $subject, $body, $headers)) 
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Email was successfully sent to '. $to_email . ' 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        } 
        else 
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Email was not delivered to '. $to_email .'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';   
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
