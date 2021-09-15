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

}
?>