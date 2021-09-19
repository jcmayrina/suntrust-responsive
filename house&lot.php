<!DOCTYPE html>
<html lang="en">
  
  <?php
  include('header.php');
  ?>
    <title>House & Lot | Affordable Homes PH</title>
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
     <!-- House & Lot products -->
     <section class="prodsection all-products" id="products">
     <div class="top container">
          <h1>House & Lot</h1>
          <form>
              <select id="property-select">
                  <option value="All">Show All</option>
                  <!-- <option value="SortPrice">Sort by Price</option> -->
                  <option value="3" disabled>*Sort by Location</option>
                  <option value="Cavite">&emsp;Cavite</option>
                  <option value="Laguna">&emsp;Laguna</option>
                  <option value="Batangas">&emsp;Batangas</option>
                  <option value="Tagum">&emsp;Tagum</option>
                  <option value="Pampanga">&emsp;Pampanga</option>
                  <option value="Negros">&emsp;Negros</option>
              </select>
              <span><i class='bx bx-chevron-down'></i></span>
          </form>
      </div>
      <?php
      $house = new Userview();
      $product_shuffle = $house->getHouse();
      ?>
        <div class="grid">
          <?php 
          foreach($product_shuffle as $item){
          $picture = $item['house_gallery'];
          $comma_separated = (explode(',',$picture));
          ?>
          <div class="grid-item <?php echo $item['house_city']??"Quezon-City";?>">
            <div class="card" onclick="location.href='<?php printf('%s?house_id=%s','house.php',$item['house_id']);?>'">
              <img class="card-img" src="<?php echo $comma_separated[0];?>"
                alt="<?php 
                echo $item['house_property']??'Unknown';
                ?>" />
              <div class="card-content">
                <h5 class="card-title"><?php 
                echo $item['house_property']??'Unknown';
                ?></h5>
                <h1 class="card-header"><?php 
                echo $item['house_name']??'Unknown';
                ?></h1>
                <h5 class="card-title"><?php 
                echo "₱".$item['house_price']??'Unknown';
                ?></h5>
                <p class="card-text"><?php 
                echo $item['house_address']??'Unknown';
                ?>
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          <?php 
          }
          ?>
        </div>
  </section>
  <?php
  include('Includes/_interested.php');
  ?>  
  
  
  <?php
  include('footer.php');
  ?>
  <?php
  include('footer2.php');
  ?>