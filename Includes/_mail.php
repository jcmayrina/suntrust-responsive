<?php
    class _mail
        {
            public $db = null;
        
            public function __construct(DBController $db)
            {
                if (!isset($db->con)) return null;
                else{
                $this->db = $db;
                $stmt = $db->prepare("INSERT INTO email (email_add) values (?)");
                }
            }
        
        }
?>