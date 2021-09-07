<?php 
include('../Database/db.php');
$email = mysqli_real_escape_string($conn,$_POST['email']);

$query = mysqli_query($conn,"SELECT * FROM `email` WHERE email_add='$email'");
if(mysqli_num_rows($query)==null){
    header("Location: ../index.php?failed-to-insert");
}
if(mysqli_num_rows($query)>0){
    header("Location: ../index.php?failed-to-insert");
}
else{
    $sql = "INSERT INTO email (email_add) VALUES ('$email');";
    if(mysqli_query($conn,$sql)){
    header("Location: ../index.php?successfully-registered");
    }
    else
    header("Location: ../index.php?failed-to-insert");
}
?>