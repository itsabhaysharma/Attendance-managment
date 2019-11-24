<?php
    include 'connection.php';
    $roll_number = $_POST['roll_number'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        
    }
   ?>