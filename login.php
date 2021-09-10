<!DOCTYPE html>
<html lang="en">
  <?php
  include('header.php');
  ?>
    <title>Achievements | Affordable Homes PH</title>
  </head>
  <body>
  
    <!-- Main -->
    <main>
    <section class="login">
        <h2>Login</h2>
        <div class="login-form">
            <form action="./Includes/_login.php" method="POST">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit">Log In</button>
            </form>
        </div>
    </section>
      <?php
      include('footer2.php');
      ?>