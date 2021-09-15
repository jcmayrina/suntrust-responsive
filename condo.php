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
     <!-- House & Lot products -->
     <section class="prodsection all-products" id="products">
      <div class="top container">
          <h1>Condominium</h1>
          <form>
              <select id="property-select">
                  <option value="All">Show All</option>
                  <!-- <option value="SortPrice">Sort by Price (asc)</option> -->
                  <option value="3" disabled>*Sort by Location</option>
                  <option value="Manila">&emsp;Manila</option>
                  <option value="Quezon-City">&emsp;Quezon City</option>
                  <option value="Pasig">&emsp;Pasig</option>
              </select>
              <span><i class='bx bx-chevron-down'></i></span>
          </form>
      </div>
      <?php 
      $condo = new Userview();
      $product_shuffle = $condo->getCondo();
      shuffle($product_shuffle);
      ?>
        <div class="grid">
          <?php 
          foreach($product_shuffle as $item){
          $picture = $item['unit_gallery'];
          $comma_separated = (explode(',',$picture));
          ?>
          <div class="grid-item <?php echo $item['unit_city']??"Quezon-City";?>">
            <div class="card" onclick="location.href='<?php printf('%s?unit_id=%s','unit.php',$item['unit_id']);?>'">
              <img class="card-img" src="<?php echo $comma_separated[0];?>"
                alt="<?php 
                echo $item['unit_property']??'Unknown';
                ?>" />
              <div class="card-content">
                <h5 class="card-title"><?php 
                echo $item['unit_property']??'Unknown';
                ?></h5>
                <h1 class="card-header"><?php 
                echo $item['unit_name']??'Unknown';
                ?></h1>
                <h5 class="card-title"><?php 
                echo "₱".$item['unit_price']??'Unknown';
                ?></h5>
                <p class="card-text"><?php 
                echo $item['unit_address']??'Unknown';
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