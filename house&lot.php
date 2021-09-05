<!DOCTYPE html>
<html lang="en">
  <head>
    
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
                  <option value="SortPrice">Sort by Price</option>
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

      <div class="grid">
        <div class="grid-item Cavite">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/verona.jpg" alt="verona" />
            <div class="card-content">
              <h1 class="card-header">Verona</h1>
              <p class="card-text">
                Brgy. Hoyo, Silang Cavite
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        
        <div class="grid-item Laguna">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/sentosa.png" alt="sentosa" />
            <div class="card-content">
              <h1 class="card-header">Sentosa</h1>
              <p class="card-text">
                Brgy. Punta, Calamba City, Laguna
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        
        <div class="grid-item Laguna">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/sanfrancisco.png" alt="San Francisco" />
            <div class="card-content">
              <h1 class="card-header">San Francisco</h1>
              <p class="card-text">	
                Palo Alto, Calamba, Laguna
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item Laguna">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/granavila.png" alt="Gran Avila" />
            <div class="card-content">
              <h1 class="card-header">Gran Avila</h1>
              <p class="card-text">	
                Brgy. Majada Out, Calamba, Laguna
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        
        <div class="grid-item Batangas">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/sienahills.jpg" alt="Siena Hills" />
            <div class="card-content">
              <h1 class="card-header">Sienna Hills</h1>
              <p class="card-text">
                Brgy. Antipolo del Sur, Lipa City, Batangas
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item Cavite">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/gentriheights.jpg" alt="Gentri Heights" />
            <div class="card-content">
              <h1 class="card-header">Gentri Heights</h1>
              <p class="card-text">
                Governor’s Drive, General Trias, Cavite
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        
        <div class="grid-item Cavite">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/cyberville.jpg" alt="Cyberville" />
            <div class="card-content">
              <h1 class="card-header">Cyberville</h1>
              <p class="card-text">
                Brgy. Santiago, Gen. Trias, Cavite
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item Cavite">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/governorshills.jpg" alt="Governor’s Hills" />
            <div class="card-content">
              <h1 class="card-header">Governor's Hills</h1>
              <p class="card-text">
                Biclatan, General Trias City, Cavite
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item Cavite">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/washingtonplace.jpg" alt="Washington Place" />
            <div class="card-content">
              <h1 class="card-header">Washington Place</h1>
              <p class="card-text">
                Emilio Aguinaldo Hwy., Dasmariñas, Cavite
              </p>
              <button class="card-btn">Visit <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item Pampanga">
          <div class="card" onclick="location.href='#amadea'">
            <img class="card-img" src="./images/arcadia.png" alt="Arcadia" />
            <div class="card-content">
              <h1 class="card-header">Arcadia</h1>
              <p class="card-text">
                Brgy. Manibaug and Paralaya, Porac, Pampanga
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