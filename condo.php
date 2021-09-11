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
                  <option value="SortPrice">Sort by Price</option>
                  <option value="3" disabled>*Sort by Location</option>
                  <option value="Manila">&emsp;Manila</option>
                  <option value="Quezon-City">&emsp;Quezon City</option>
                  <option value="Pasig">&emsp;Pasig</option>
                  <option value="Mandaluyong">&emsp;Mandaluyong</option>
                  <option value="Baguio">&emsp;Baguio</option>
                  <option value="Davao">&emsp;Davao</option>
              </select>
              <span><i class='bx bx-chevron-down'></i></span>
          </form>
      </div>

        <div class="grid">
          
          <div class="grid-item Quezon-City">
            <div class="card" onclick="location.href='unit.php'">
              <img class="card-img" src="./images/amadea.jpg" alt="Amadea" />
              <div class="card-content">
                <h1 class="card-header">Amadea</h1>
                <p class="card-text">
                  	Scout Reyes St. cor. Quezon Ave, Paligsahan, Quezon City
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          
          <div class="grid-item Quezon-City">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/asmara.jpg" alt="Asmara" />
              <div class="card-content">
                <h1 class="card-header">Asmara</h1>
                <p class="card-text">
                  E. Rodriguez Ave., Quezon City
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          
          <div class="grid-item Manila">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/solana.jpg" alt="Solana" />
              <div class="card-content">
                <h1 class="card-header">Solana</h1>
                <p class="card-text">	
                  Natividad Almeda-lopez, Ermita, Manila
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          <div class="grid-item Quezon-City">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/capitol.jpg" alt="Capitol Plaza" />
              <div class="card-content">
                <h1 class="card-header">Capitol Plaza</h1>
                <p class="card-text">	
                  Matalino St., Diliman, Quezon City
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          
          <div class="grid-item Quezon-City">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/shanata.jpg" alt="Shanata" />
              <div class="card-content">
                <h1 class="card-header">Shanata</h1>
                <p class="card-text">
                  Quirino Highway, Novaliches, Quezon City
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          <div class="grid-item Pasig">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/kirana.jpg" alt="Kirana" />
              <div class="card-content">
                <h1 class="card-header">Kirana</h1>
                <p class="card-text">
                  Urbano Velasco Ave., Pasig City
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
          
          <div class="grid-item Manila">
            <div class="card" onclick="location.href='#amadea'">
              <img class="card-img" src="./images/ascentia.png" alt="Ascentia" />
              <div class="card-content">
                <h1 class="card-header">Ascentia</h1>
                <p class="card-text">
                  New Panaderos St., Sta. Ana, Manila
                </p>
                <button class="card-btn">Visit <span>&rarr;</span></button>
              </div>
            </div>
          </div>
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