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
        <table border = "1px" id="myTable" style= "background-color : orange;">
        <thead>
        <tr>
            <th>S NO</th>
            <th>ITEMS</th>
            <th>PRICE</th>
        </tr>
        </thead>
        <tbody>
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
        <tr>
            <td>4</td>
            <td>Pav Bhaji</td>
            <td>Rs. 40/-</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sev Puri</td>
            <td>Rs. 30/-</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Somosa Chat</td>
            <td>Rs. 30/-</td>
        </tr>
        <tr>
            <td>7</td>
            <td>veg munchuria</td>
            <td>Rs. 50/-</td>
        </tr>
        </tbody>
            
    </table>
    </body>
</html>