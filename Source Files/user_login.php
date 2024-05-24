<?php
session_start();
include('connection.php');

if(isset($_POST['userLogin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement to retrieve user information
    $query = "SELECT uid, name, email, password FROM users WHERE email = ?";
    
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $uid, $name, $email, $hashedPassword);
    
    if(mysqli_stmt_fetch($stmt)) {
        // Verify the entered password against the stored hash
        if(password_verify($password, $hashedPassword)) {
            $_SESSION['uid'] = $uid;
            
            echo "<script type='text/javascript'> alert('User Logged!');
            window.location.href = 'user_dashboard.php';
            </script>";
        } else {
            echo "<script type='text/javascript'> alert('The Email and password combination entered is incorrect. Try Again.');
            window.location.href = 'user_login.php';
            </script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('User not found. Please register.');
        window.location.href = 'user_login.php';
        </script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
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
       <br><br><br><br><br><div class="row">
           <div class="col-md-3 m-auto" id="login_home_page">
               <center><h3 style="color:white;">User Login</h3></center>
               <form action="" method="post">
               <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>
               
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required> <br>
                   <div class="form-group">
                       <center>
                           <input type="submit" name="userLogin" value="Login" class="btn btn-success" style="background-color:#F3EDC8;color:#BF3131">
                       </center>
                   </div>
               </form>
               <center><a href="index.php" class="btn btn-danger" style="background-color:#7D0A0A"
                          >Home</a></center><br>
           </div>
        </div>
    </body>
</html>