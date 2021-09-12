<!DOCTYPE html>
<html lang="en">
  
<?php
  include('header.php');
  ?>
  <?php 
  $product_shuffle = $house->getData();
  $item_id = $_GET['house_id']??1;
  foreach($product_shuffle as $item):
    if($item['house_id']==$item_id):
  ?>
    <title><?php echo $item['house_name']." - ".$item['house_property'];?> | Affordable Homes PH</title>
  </head>
  <body>
    <!-- Messenger Chat Plugin Code -->
    
  <?php
  include('messenger.php');
  ?>
    <!-- Header -->
    
  <?php
  include('nav.php');
  ?>
    <main>
      <?php 
          $gallery = $item['house_gallery'];
          $comma_separated = (explode(',',$gallery));
          $details = $item['house_details'];
          $question_separated = (explode('?',$details));
      ?>
     <section class="galleryunit">
     <div class="header">
        <h1><?php echo $item['house_name']??"Studio";?></h1>
       <h3><?php echo $item['house_address']??"Unknown";?></h3>
     </div>
     <div class="specs">
         <p class="property"><?php echo $item['house_property']??"Unknown";?></p>
         <p class="floor">Typical Floor Area: <?php echo $item['house_floor_area']??"Unknown";?></p>
         <p class="price">Starts at ₱ <?php echo $item['house_price']??"Unknown";?></p>
     </div>
     
    <div class="slider">
      <?php 
      foreach($comma_separated as $gall){
        echo "<img class='mySlides' src='".$gall."' alt=''>";
      }
      ?>
        <button class="butimg leftbutt" onclick="plusDivs(-1)"><i class='bx bx-chevron-left'></i></button>
        <button class="butimg rightbutt" onclick="plusDivs(1)"><i class='bx bx-chevron-right'></i></button>
    <div class="details">
        <h3>Details</h3>
        <ul>
        <?php 
      foreach($question_separated as $deet){
        echo "<li>".$deet."</li>";
      }
      ?>
        </ul>
    </div>
    </div>
    </section>
    <section class="yt">
        <h1 class="header">
            Virtual Tour
        </h1>
        <div class="iframe-container">
        <?php echo $item['house_yt_link']??"Unknown";?>
    </div>
    </section>
    <?php 
    endif;
    endforeach;
    ?>
    <?php
  include('Includes/_other_models.php');
  ?> 
    
  <?php
  include('Includes/_interested.php');
  ?>      
   
    <!-- Footer -->
    <?php
      include('footer.php');
      ?>
      <?php
      include('footer2.php');
      ?>