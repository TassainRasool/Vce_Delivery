<html>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    </head>
    <body style = "background-color : skyblue !important;">
            <?php
            require_once 'source/session.php';
            require_once 'source/db_connect.php';

            
            $SQLQuery = "SELECT * FROM current_order";
            $statement = $conn->prepare($SQLQuery);
            $statement->execute();

            if ($statement) 
            {
            // output data of each row
                echo '<table class = "table" style = "background-color : orange;" border = "1px" id = "myTable">
                <thead>
                <tr>
                    <th>S NO</th>
                    <th>NAME</th>
                    <th>ITEM</th>
                    <th>PRICE</th>
                    <th>BLOCK</th>
                    <th>MOBILE</th>
                    <th>ROLL NO</th>
                    <th>EMAIL</th>
                    <th>ORDER TIME</th>
                    <th>STATUS</th>
                </tr>
                </thead>
                <tbody>
                ';

                while($row = $statement->fetch()) 
                {
                    $flag = 0;
                    $rollnoArray = explode(",", $row["dont_show"]);
                    for($i =0;$i<count($rollnoArray);$i++) 
                    {
                        if($_SESSION["roll_no"] == $rollnoArray[$i])
                        {
                            $flag = 1;
                        }
                    }
                    if($flag == 1) continue;
                    if($_SESSION['username'] == $row["username"])
                    {
                        echo '<tr>
                        <td> '.$row["id"].' </td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["item"].'</td> 
                        <td>'.$row["price"].'</td>
                        <td>'.$row["block"].'</td> 
                        <td>'.$row["ph_no"].'</td>
                        <td>'.$row["roll_no"].'</td>
                        <td>'.$row["email"].'</td> 
                        <td>'.$row["to_date"].'</td>
                        <td> <button>Remove</button></td>
                        </tr>';
                    }
                    else
                    {
                        echo '<tr>
                        <td> '.$row["id"].' </td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["item"].'</td> 
                        <td>'.$row["price"].'</td>
                        <td>'.$row["block"].'</td> 
                        <td>'.$row["ph_no"].'</td>
                        <td>'.$row["roll_no"].'</td>
                        <td>'.$row["email"].'</td> 
                        <td>'.$row["to_date"].'</td>
                        <td> <button>Accept</button></td>
                        </tr>';
                    }
                    
                }
                echo '</tbody></table>';    
            } 
            else 
            {
                echo "0 results";
            }
        ?>
        <script>   
            var buttons = document.getElementsByTagName("button");
            var i=0;
            while(buttons[i])
            {
                buttons[i++].addEventListener("click", function(event) {
                    if(event.target.innerHTML == "Remove")
                    {
                        var now = new Date();
                        now.setTime(now.getTime() + 600000);
                        id = event.target.parentNode.parentNode.childNodes[1].innerHTML;
                        console.log(id);
                        document.cookie="removedUserOrderID=" + id.toString();
                        document.cookie = "expires=" + now.toUTCString() + ";";
                        document.location.href='delete-order.php';
                    }
                    else
                    {
                        email = event.target.parentNode.parentNode.childNodes[15].innerHTML; // selecting email from table
                        var now = new Date();
                        now.setTime(now.getTime() + 600000);
                        document.cookie="acceptedUserEmail=" + email;
                        document.cookie = "expires=" + now.toUTCString() + ";";
                        document.location.href='accept_insert_send_mail.php';
                    }
                   
                });
            }
        </script>
    </body>
</html>