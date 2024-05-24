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
                });
            });
            
            
         $(document).ready(function(){
                $("#manage_task").click(function(){
                    $("#right_sidebar").load("manage_tasks.php");
                });
            });
            
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
        
        <br>
                    <a href="admin_dashboard.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Dashboard</a>
                
                  <a href="create_task.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Create Task</a>
                              
        <a href="manage_tasks.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Manage Tasks</a>
              
                        <a href="logout.php" class="btn btn-success" style="background-color:#BF3131;color:#F3EDC8;margin:20px;padding:10px">Log Out</a>
            <br><br>

          <h4>Instructions</h4>
                <ul style="line-height: 3em; font-size: 1.2em; list-style-type:none;">
                <li>You can allot a new task in the "Create Task" Section</li>
                <li>For modification/deletion of a task visit "Manage Tasks" Section</li>
                    
                </ul>
                
            

        
    </body>
</html>