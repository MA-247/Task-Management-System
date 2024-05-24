<?php 
include('connection.php');
if(isset($_POST['adminLogin'])){
    $query = "SELECT email,password,name,aid FROM admins WHERE email = '$_POST[email]' AND password = '$_POST[password]'";

$query_run = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($query_run)){
        echo "<script type='text/javascript'> alert('Admin Logged!');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('The Email and passsword combination entered is incorrect. Try Again.');
        window.location.href = 'admin_login.php';
        </script>";
    }

}
?>
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
       <div class="row">
           <div class="col-md-3 m-auto" id="login_home_page">
               <center><h3 style="color:white;">Admin Login</h3></center>
               <form action="" method="post">
               <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>
               
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required> <br>
                   <div class="form-group">
                       <center>
                           <input type="submit" name="adminLogin" value="Login" class="btn btn-success" style="background-color:#F3EDC8;color:#BF3131">
                       </center>
                   </div>
               </form>
               <center><a href="index.php" class="btn btn-danger" style="background-color:#7D0A0A"
                          >Home</a></center><br>
           </div>
        </div>
    </body>
</html>