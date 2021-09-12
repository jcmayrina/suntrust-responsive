<?php

// require MySQL Connection
require ('Database/DBController.php');
// require Unit Class
require ('Database/Condo.php');
// require House Class
require ('Database/House.php');

// DBController object
$db = new DBController();
// Unit object
$condo = new Condo($db);
// Unit object
$house = new House($db);