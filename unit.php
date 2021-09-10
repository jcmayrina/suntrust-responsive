<!DOCTYPE html>
<html lang="en">
  
<?php
  include('header.php');
  ?>
    <title>Condominium | Affordable Homes PH</title>
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
     <section class="galleryunit">
     <div class="header">
        <h1>Studio</h1>
       <h3>Scout Reyes St. cor. Quezon Ave,<br> Paligsahan, Quezon City</h3>
     </div>
     <div class="specs">
         <p class="property">Suntrust Amadea</p>
         <p class="floor">Typical Floor Area: 24sqm</p>
         <p class="price">Starts at ₱ 2,800,000</p>
     </div>
     
    <div class="slider">
      <img class="mySlides" src="./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO sleeping area _ living.jpg"alt="">
      <img class="mySlides" src="./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO sleeping area _ living 1.jpg"alt="">
      <img class="mySlides" src="./images/amadea/UNIT PERSPECTIVE/STUDIO/STUDIO kitchen.jpg" alt="">

        <button class="butimg leftbutt" onclick="plusDivs(-1)"><i class='bx bx-chevron-left'></i></button>
        <button class="butimg rightbutt" onclick="plusDivs(1)"><i class='bx bx-chevron-right'></i></button>
    <div class="details">
        <h3>Details</h3>
        <ul>
            <li>Floor Finishes: Ceramic tiles</li>
            <li>Kitchen: Custom built under counter kitchen cabinets (overhead cabinets not included), with Provision for Rangehood</li>
            <li>Toilet & Bath: Unglazed Ceramic Tiles</li>
        </ul>
    </div>
    </div>
    </section>
    <section class="yt">
        <h1 class="header">
            Virtual Tour
        </h1>
        <div class="iframe-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OLeetf3A35k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </section>
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