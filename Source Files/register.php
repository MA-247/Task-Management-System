<?php
include('connection.php');

if(isset($_POST['userRegister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to insert data into the database
    $query = "INSERT INTO users (uid, name, email, password, mobile) VALUES (null, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPassword, $mobile);

    if(mysqli_stmt_execute($stmt)) {
        echo "<script type='text/javascript'> alert('User Registration Successful!');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script type='text/javascript'> alert('Something Went Wrong! Try Again.');
        window.location.href = 'register.php';
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
       <div class="row">
           <div class="col-md-3 m-auto" id="login_home_page">
               <center><h3 style="color:white;">User Registration</h3></center>
               <form action="" method="post">
               <input type="text" name="name" class="form-control" placeholder="Enter Name" required><br>
               
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required> <br>
                   
                   <input type="password" name="password" class="form-control" placeholder="Enter Password" required> <br>
                   
                   <input type="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number" required> <br>
                   <div class="form-group">
                       <center>
                           <input type="submit" name="userRegister" value="Register" class="btn btn-success" style="background-color:#F3EDC8;color:#BF3131">
                       </center>
                   </div>
               </form>
               <center><a href="index.php" class="btn btn-danger" style="background-color:#7D0A0A"
                          >Home</a></center><br>
           </div>
        </div>
    </body>
</html>