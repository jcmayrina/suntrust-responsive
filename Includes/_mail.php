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
    $chk = mysqli_stmt_init($conn);
    $chk1 = "INSERT INTO email (email_add)
    VALUES (?);";
    
    $stmt = $conn->prepare("INSERT INTO email (email_add)
    VALUES (?)");

    if(!mysqli_stmt_prepare($chk,$chk1)){
        header("Location: ../index.php?failed-to-insert");
    }
    else{
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Enter a valid email!";
          }
          else{
            $stmt->bind_param("s", $email);
            $stmt->execute();
            header("Location: ../index.php?successfully-registered");
          }
    }
}
?>