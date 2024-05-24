<?php
session_start();
?>

<!doctype html>
<html>
    <head>
        <title>TMS</title>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <!--bootstrap-->
        
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- linking the style sheet-->
        <link rel="stylesheet" type="text/css" href="styles.css">
        
    </head>
    <body>
        <div class="row" id="header">
        <div class="col-md-4" style="display:inline-block;">
            <h3>Task Management System</h3>
            </div>
        </div>
        
        <!--header finished-->
       <br>
                    <a href="user_dashboard.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Dashboard</a>
                
                        <a href="tasks.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">View Tasks</a>
              
                        <a href="logout.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Log Out</a>
            <br><br>
            <div class="col-md-10" id="right_sidebar.php">
            
                <h4>Instructions</h4>
                <ul style="line-height: 3em; font-size: 1.2em; list-style-type:none;">
                <li>You can check the tasks assigned to you in the "View Task" section.</li>
                <li>Update the task status accordingly.</li>
                </ul>
                
            </div>
        
        
    </body>
</html>