<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    ob_start();
  include('header.php');
  if(!isset($_SESSION['user_id'])){
      header('location:login.php');
  }
  ?>
    <title>Admin | Affordable Homes PH</title>
  </head>
  <body>
      <main>
        <center>
        <form method="POST">
        <button type="submit" name="logout">Logout</button></center>
        </form>
        <?php 
        $logout = new Usercontrl();
        $logout->logout();;
        ?>
      </main>
  </body>