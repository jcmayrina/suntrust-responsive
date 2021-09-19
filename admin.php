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
            $result = $date->format('M d, Y | g:i A');
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
                    $date = new DateTime($item['date_time']);
                    $mos = $date->format('M d, Y');
                    $time = $date->format('g:i A');
                echo "<tr>
                    <td>".$item['fullname']."</td>".
                    "<td>".$item['email']."</td>".
                    "<td>".$item['number']."</td>".
                    "<td>".$item['property']."</td>".
                    "<td>".$item['message']."</td>".
                    "<td>".$mos."<br>".$time."</td>"
                    ."</tr>";}?>
            </table>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <div class="uploadss">
            <h1 class="header">Condominium</h1>
            <form action="unitupload.php" id="unitupl" method="post">
                Property Name:
                <input type="text" name="property" id="" required>
                Unit Name:
                <input type="text" name="name" id="" required>
                Floor Area:
                <input type="text" name="floorarea" id="" required>
                Price:
                <input type="text" name="price" id="" required>
                Details:
                <input type="text" name="details" id="" required>
                YT Link Embed:
                <input type="text" name="yt" id="" required>
                Gallery:
                <input type="file" name="files[]" multiple id="" required>
                City:
                <input type="text" name="city" id="" required>
                Address:
                <input type="text" name="address" id="" required>
                <input type="submit" name="submitcond" value="SUBMIT" id="submits">
            </form><script>
          $('#unitupl').submit(function(event){
            var formdata = new FormData(this);
            $.ajax({
                url:'unitupload.php',
                data:formdata,
                contentType:false,
                cache:false,
                processData:false,
                type:"POST",
                success:function(response){
                    alert(response);
                },
                error:function(){
                    alert("Something is wrong!");
                }
            });
            event.preventDefault();
          });
      </script>
            <h1 class="header">House & Lot</h1>
            <form action="houseupload.php" id="houseupl" method="post">
                House Name:
                <input type="text" name="property" id="" required>
                Model Name:
                <input type="text" name="name" id="" required>
                Floor Area:
                <input type="text" name="floorarea" id="" required>
                Price:
                <input type="text" name="price" id="" required>
                Details:
                <input type="text" name="details" id="" required>
                YT Link Embed:
                <input type="text" name="yt" id="" required>
                Gallery:
                <input type="file" name="files[]" multiple id="" required>
                City:
                <input type="text" name="city" id="" required>
                Address:
                <input type="text" name="address" id="" required>
                <input type="submit" name="submitcond" value="SUBMIT" id="submits">
            </form>
        <!-- JQuery -->
      <script>
          $('#houseupl').submit(function(event){
            var formdata = new FormData(this);
            $.ajax({
                url:'houseupload.php',
                data:formdata,
                contentType:false,
                cache:false,
                processData:false,
                type:"POST",
                success:function(response){
                    alert(response);
                },
                error:function(){
                    alert("Something is wrong!");
                }
            });
            event.preventDefault();
          });
      </script>
        </div>
        </div>
      </main>
  </body>
</html>