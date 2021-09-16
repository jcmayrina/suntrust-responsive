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

}
?>