<?php

include('connection.php');
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    
    </head>
<body>
    <center><h3 style="color:#BF3131">All Assigned Tasks</h3></center><br>
    <center> <a href="admin_dashboard.php" class="btn btn-success" style="background-color:#BF3131">Home</a></center><br>
    
    <table class="table">
    
    
    <tr>
        
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Serial No.</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Task ID</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Description</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Start Date</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">End Date</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Status</th>
         <th style="background-color:#7D0A0A;color:#F3EDC8;width:535px;">Action</th>
        
        
        </tr>
        
        
        <?php
        $sno = 1;
        $query = "SELECT * FROM tasks";
        $query_run = mysqli_query($connection, $query);
        
        
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
        <tr style="text-align:center;">
            <td><?php echo $sno; ?></td>
        <td><?php echo $row['tid']; ?></td>
        <td><?php echo $row['description']; ?></td><td><?php echo $row['start_date']; ?></td><td><?php echo $row['end_date']; ?></td><td><?php echo $row['status']; ?></td>
            
            <td><a href="edit_task.php?id=<?php echo $row['tid'];?>" style="color: #7D0A0A">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid'];?>" style="color:#7D0A0A">Delete</a></td>
            
        </tr>
            <?php
            $sno = $sno + 1;
        }
        
        
        ?>
    </table>
    
    
    </body>
</html>