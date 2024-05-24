<?php

include('connection.php');

if(isset($_POST['create_task']))
{
    $query = "UPDATE tasks SET status='$_POST[status]' WHERE tid = $_GET[id]";
    
    $query_run = mysqli_query($connection, $query);
    
    if($query_run){
        echo "<script type='text/javascript'> alert('Status Changed!');
        window.location.href = 'tasks.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Some Error! Try Again.');
        window.location.href = 'tasks.php';
        </script>";
    }
    
}


?> 


<!doctype html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <!--bootstrap-->
        
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- linking the style sheet-->
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        <script type='text/javascript'>
            $(document).ready(function(){
                $("#create_task").click(function(){
                    $("#right_sidebar").load("create_task.php");
                })
            })
        </script>
        
    </head>
    <body>
        <div class="row" id="header">
        <div class="col-md-4" style="display:inline-block;">
            <h3>Task Management System</h3>
            </div>
            <div class="col-md-6" style="display:inline-block;">
                
            </div>
        </div>
        
        <!--header finished-->
     
            <div class="row">
            <div class="col-md-10" id="right_sidebar">
                
                <form action="" method="post">
                    <div class="form-group">
                        <label>Status: </label>
                        <select class="form-control" name="status">
                        <option> -Select-</option>
                        <option value="Started">Started</option>
                        <option value="Completed">Completed</option>
                       
                       
            
                        </select>
                       
                        <br><input type="submit" class="btn btn-success" name="create_task" value="Change Status" style="background-color:#BF3131">
                        
                    </div>
                </form>
                
                </div>
           
            </div>
        </div>
        
    </body>
</html>