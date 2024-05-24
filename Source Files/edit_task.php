<?php

include('connection.php');

if(isset($_POST['edit_task']))
{
    $query = "UPDATE tasks SET uid = '$_POST[id]', description='$_POST[description]', start_date='$_POST[start_date]',end_date='$_POST[end_date]' where tid = $_GET[id];";
    
    $query_run = mysqli_query($connection, $query);
    
    if($query_run){
        echo "<script type='text/javascript'> alert('Task Editted!');
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
        
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
            
            <h3>Task Management System</h3>
            
            
            </div></div>
        
       <div class="row">
            <div class="col-md-10" id="right_sidebar">
                
                <form action="" method="post">
                    <div class="form-group">
                        <label>Select User: </label>
                        <select class="form-control" name="id">
                        <option> -Select-</option>
                        
                            <?php
                            
                            include('connection.php');
                            
                            $query = "SELECT uid, name FROM users";
                            
                            $query_run = mysqli_query($connection, $query);
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    ?>
                                    <option><?php
                                echo $row['uid'];
                                ?></option>
                            <?php
                                }
                        
                            }
                            
                            
                            ?>
                        
                        
                        </select>
                        
                        
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" rows='3' cols='50' name="description"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Start Date:</label>
                            <input type="date" class="form-control" name="start_date">
                        </div>
                        
                        <div class="form-group">
                            <label>End Date:</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>
                        
                        <br><input type="submit" class="btn btn-success" name="edit_task" value="Edit Task" style="background-color:#BF3131">
                        
                    </div>
                </form>
                
                </div>
           
            </div>
        
        
    </body>
</html>