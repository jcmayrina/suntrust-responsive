<?php 
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbName = "suntrust";

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
    $pdo = new PDO($dsn, $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $property = $_POST['property'];
    $housename = $_POST['name'];
    $floorarea = $_POST['floorarea'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $yt = $_POST['yt'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $targetDir = "images\\";
    $image = $_FILES['files']['name'];

    foreach($image as $key => $item){
        $targetFilePath = $targetDir.$item;
        $name[] = ".\\".$targetDir.$item;
        $fileName = implode(',',$name);
        move_uploaded_file($_FILES['files']['tmp_name'][$key],$targetFilePath);
    }
    $sql = $pdo->prepare("INSERT INTO `house` (`house_property`,`house_name`,`house_floor_area`,`house_price`,`house_details`,`house_yt_link`,`house_gallery`,`house_city`,`house_address`)
    VALUES (?,?,?,?,?,?,?,?,?)");
    if($sql->execute([$property,$housename,$floorarea,$price,$details,$yt,$fileName,$city,$address])){
        echo "uploaded successfully";
    }
    else
    echo "failure";
?>