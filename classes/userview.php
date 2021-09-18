<?php 

class Userview extends Dbh{
    public function getCondo(){
        $sql = "SELECT * FROM unit ORDER BY unit_price ASC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $names = $stmt->fetchAll();

        return $names;
    }
    
    public function getHouse(){
        $sql = "SELECT * FROM house ORDER BY house_price ASC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $names = $stmt->fetchAll();

        return $names;
    }

    public function getEmail(){
        $sql = "SELECT * FROM `email` ORDER BY date_time DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $names = $stmt->fetchAll();

        return $names;
    }
    
    public function getContact(){
        $sql = $this->connect()->prepare("SELECT * FROM `contact` ORDER BY date_time DESC");
        $sql->execute();
        
        $names = $sql->fetchAll();

        return $names;
    }
}
?>