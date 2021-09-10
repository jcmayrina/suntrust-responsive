<?php 

include('../Database/db.php');

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM user WHERE username=".$uname." AND password=".$password.";";
    
    $result=mysqli_query($conn,$sql);
    
    
        
}
?>