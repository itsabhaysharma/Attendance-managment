<?php
    include 'connection.php';
    $id = $_GET['id'];
    
   
    $roll_number = $_POST['roll_number'];
    $password = $_POST['password'];
   
    $sql = "UPDATE students SET  roll_number = '$roll_number' , password = '$password' WHERE id = $id";
    $result = mysqli_query($conn,$sql);
   if($result){
       echo "updated successfully";
   }
   else{
       echo "not done";
   }

   header( "refresh:1;url=tables.php" );

?>