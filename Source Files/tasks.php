<?php
session_start();
include('connection.php');
?>


<html>
    <head>
         <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
   
    </head>
<body>
    <center><h1 style="color:#BF3131">All Assigned Tasks</h1></center>
    <center> <a href="user_dashboard.php" class="btn btn-success" style="background-color:#BF3131">Home</a></center><br><br>
    <table class="table" >
    
    
    <tr >
        
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Serial No.</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">Task ID</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">Description</th>  
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">Start Date</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">End Date</th> 
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">Status</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;padding:20px;width:535px;">Action</th>
        
        
        </tr>
        
        
        <?php
        $sno = 1;
        $query = "SELECT * FROM tasks WHERE uid = $_SESSION[uid]";
        $query_run = mysqli_query($connection, $query);
        
        
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
        <tr style="text-align:center;">
            <td><?php echo $sno; ?></td>
        <td><?php echo $row['tid']; ?></td>
        <td><?php echo $row['description']; ?></td><td><?php echo $row['start_date']; ?></td><td><?php echo $row['end_date']; ?></td><td><?php echo $row['status']; ?></td>
            
            <td><a href="change_status.php?id=<?php echo $row['tid'];?>" style="color: #BF3131">Change Status</a>
            
        </tr>
            <?php
            $sno = $sno + 1;
        }
        
        
        ?>
    </table>
    
    
    </body>
</html>