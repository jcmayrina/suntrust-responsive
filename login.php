<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    ob_start();
  include('header.php');
  if(isset($_SESSION['user_id'])){
    header('location: admin.php');
  }
  ?>
    <title>Login | Affordable Homes PH</title>
  </head>
  <body>
  
    <!-- Main -->
    <main>
    <section class="login">
        <h2>Login</h2>
        <div class="login-form">
            <form method="POST">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="login">Log In</button>
            </form>
        </div>
        <?php
        if(isset($_POST['login'])&&isset($_POST['username'])&&isset($_POST['password'])){
        $login = new Usercontrl();
        $login->login();}
        ?>
 
    </section>
      <?php
      include('footer2.php');
      ?>