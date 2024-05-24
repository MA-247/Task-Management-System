<?php

include('connection.php');

if(isset($_POST['delete']))
{
    
    $query = "DELETE FROM tasks WHERE tid = '$_GET[id]';";
    
    $query_run = mysqli_query($connection, $query);
    
    if($query_run){
        echo "<script type='text/javascript'> alert('Task Delete!');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Some Error! Try Again.');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }
    
}


?> 
 
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    </head>
<body style="background-color: #F3EDC8">

    <h1 style="color: #7D0A0A;text-align:center;">Task Deletion</h1><br>
    <h3 style="color: #7D0A0A;">Confirm Task Deletion:</h3>
    <form method="post" action="">
        <center><input type="submit" name="delete" value="Confirm" class="btn" style="background-color:#BF3131;color:#F3EDC8">
        
            <a href="admin_dashboard.php" class="btn" style="background-color:#BF3131;color:#F3EDC8">Home</a>
        </center>
    </form>
</body>
</html>