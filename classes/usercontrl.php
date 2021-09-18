<?php 

class Usercontrl extends Dbh{
    
    public function setEmail(){
        $email = $_POST['email'];

        $stmt = $this->connect()->prepare("INSERT INTO `email` (email_add) VALUES (?)");
        if($stmt->execute([$email])){
        }
        else
        echo "failure";
    }
    
    public function getEmail($inpemail){
        $sql = $this->connect()->prepare("SELECT * FROM `email` WHERE email_add=?");
        $sql->execute([$inpemail]);
        
        $result = $sql->rowCount();

        return $result;
    }
    
    public function setContact(){
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $property = $_POST['property'];
        $message = $_POST['message'];

        $stmt = $this->connect()->prepare("INSERT INTO `contact` (`fullname`, `email`, `number`, `property`, `message`) VALUES (?,?,?,?,?)");
        if($stmt->execute([$fname,$email,$number,$property,$message])){
        }
        else
        echo "failure";
    }

    public function login(){
        $user = $_POST['username'];
        $pass = sha1($_POST['password']);
        
        $sql = $this->connect()->prepare("SELECT * FROM `user` WHERE username =:user AND password =:pass");
        $sql->execute(array('user'=>$user,'pass'=>$pass));

        if($sql->rowCount()){
            $data = $sql->fetch();
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['user_id'] = true;
            header('location:admin.php');
        }
        else{
            echo "Incorrect username/password!";
        }
    }

    public function logout(){
        if(isset($_POST['logout'])){
        session_destroy();

        header('location:login.php');}

    }
}
?>