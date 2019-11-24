<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>tables</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead >
                <th class="text-center">ID</th>
                <th class="text-center">Roll Number</th>
                <th class="text-center">Password</th>
                <th colspan="2" class="text-center">Action</th>
            </thead>
            <tbody>
                <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM students";
                    $result = mysqli_query($conn,$sql);
                    
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $roll_number = $row["roll_number"];
                        $password = $row["password"];
                      
                       
                 
                      
                    
                
                ?>
                
                    <tr>
                        <td class="text-center"><?php echo $id?></td>
                        <td class="text-center"><?php echo $roll_number?></td>
                        <td class="text-center"><?php echo $password?></td>
                        <td class="text-center"><a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
                        <td class="text-center"><a class="btn btn-primary" href="update_page.php?id=<?php echo $id; ?>">Update</a></td>
                        
             
                    </tr>
                    
                    <?php
                    }
            ?>
           
              
            </tbody>


        </table>
        
    </div>
</body>
</html>