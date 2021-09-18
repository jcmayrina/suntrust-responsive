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
        <div class="email">
        <h1 class="header">Emails</h1>
        <?php 
        $email = new Userview();
        $emails = $email->getEmail();
        ?>
        <table class="conts">
                <tr>
                    <th>Email</th>
                    <th>Date & Time</th>
                </tr>
        <?php 
        foreach($emails as $item){
            $date = new DateTime($item['date_time']);
            $result = $date->format('F d, Y | g:i A');
            echo "<tr>
                    <td>".$item['email_add']."</td>".
                    "<td>".$result."</td>"
                    ."</tr>";}?>
                </table>
        </div>
        <div class="contactinfo">
        <h1 class="header">Contacts</h1>
        <?php 
        $contact = new Userview();
        $contacts = $contact->getContact();
        ?>
            <table class="conts">
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Property</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                </tr>
                <?php
                foreach($contacts as $item){
                echo "<tr>
                    <td>".$item['fullname']."</td>".
                    "<td>".$item['email']."</td>".
                    "<td>".$item['number']."</td>".
                    "<td>".$item['property']."</td>".
                    "<td>".$item['message']."</td>".
                    "<td>".$item['date_time']."</td>"
                    ."</tr>";}?>
            </table>
        </div>
        </div>
      </main>
  </body>