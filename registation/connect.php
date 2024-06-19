<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $Name=$_POST['Name'];
     $Email=$_POST['Email'];
     $Gender=$_POST['Gender'];
     $Mobile=$_POST['Mobile'];
     $Password=$_POST['Password'];
}



$conn = new mysqli('localhost', 'root', '', 'form');

if($conn) {
     // echo "Connecting okay";

     $sql = "insert into `data` (Name,Email,Gender,Mobile,password)
     values('$Name', '$Email', '$Gender', '$Mobile', '$Password')";
     $result = mysqli_query($conn, $sql);
     
     if ($result) {
          echo "Successfully inserted";
     } else {
          die(mysqli_error($conn));
     }
} else {
     die(mysqli_error($conn));
}



?>