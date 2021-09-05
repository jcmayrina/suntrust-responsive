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
     <section class="condoinfo">
       <div class="condologo">
         <img src="./images/Suntrust Amadea Logo.png" alt="">
       </div>
       <div class="header">
         Suntrust Amadea
       </div>
       
       <h3>Scout Reyes St. cor. Quezon Ave,<br> Paligsahan, Quezon City</h3>
       <!-- <div class="condodet">
       <table>
        <tr>
        <td class="logo"><i class='bx bxs-map'></i></td>
        <td>
          <h3>Scout Reyes St. cor. Quezon Ave,<br> Paligsahan, Quezon City</h3>
        </td>
        <td class="logo"><i class='bx bx-grid'></i></td>
        <td>
          <h3>4,174.35 sqm</h3>
        </td>
        <td class="logo"><i class='bx bx-home-heart' ></i></td>
        <td>
          <h3>Modern-Contemporary</h3></td>
       </tr>
       </table></div> -->
       <div class="unit">
         <div class="header">
           Unit Models
         </div>
         <div class="container">
           <div class="box" onclick="location.href='condo_name-unit.php'">
             <div class="unitpic">
               <img src="./images/amadea.jpg" alt="">
               <div class="overlay"><div class="content">
                 <ul>
                   <li>Typical Floor Area: 24sqm</li>
                   <li>Starts at ₱ 2,800,000</li>
                 </ul>
               </div></div>
             </div>
             <div class="details">
               <span><h1>Studio</h1></span>
               <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga impedit nemo ipsam sequi accusantium.</span>
             </div>
           </div>
           <div class="box" onclick="location.href='condo_name-unit.php'">
             <div class="unitpic">
               <img src="./images/amadea.jpg" alt="">
               <div class="overlay"><div class="content">
                <ul>
                  <li>Typical Floor Area: 36sqm</li>
                  <li>Starts at ₱ 4,800,000</li>
                </ul>
              </div></div>
             </div>
             <div class="details">
               <span><h1>2 BR</h1></span>
               <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga impedit nemo ipsam sequi accusantium.</span>
             </div>
           </div>
           <div class="box" onclick="location.href='condo_name-unit.php'">
             <div class="unitpic">
               <img src="./images/amadea.jpg" alt="">
               <div class="overlay"><div class="content">
                <ul>
                  <li>Typical Floor Area: 47sqm</li>
                  <li>Starts at ₱ 6,600,000</li>
                </ul>
              </div></div>
             </div>
             <div class="details">
               <span><h1>3 BR</h1></span>
               <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga impedit nemo ipsam sequi accusantium.</span>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="gallery">
     <div class="gallery">
        <h1>Gallery</h1>
     </div>
     
    <div class="slider">
      <img class="mySlides" src="./images/amadea/Commercial Area.jpg"alt="">
      <img class="mySlides" src="./images/amadea/AMADEA LOBBY.jpg"alt="">
      <img class="mySlides" src="./images/amadea/AMADEA LOBBY view 2.jpg" alt="">
      <img class="mySlides" src="./images/amadea/elevator lobby.jpg"alt="">
      <img class="mySlides" src="./images/amadea/EXERCISE AREA.jpg"alt="">
      <img class="mySlides" src="./images/amadea/Fitness Gym.jpg"alt="">
      <img class="mySlides" src="./images/amadea/CHILDREN_S PLAYGROUND.jpg"alt="">
      <img class="mySlides" src="./images/amadea/GAZEBO.jpg"alt="">
      <img class="mySlides" src="./images/amadea/Playroom.jpg"alt="">
      <img class="mySlides" src="./images/amadea/Sky Garden.jpg"alt="">
      <img class="mySlides" src="./images/amadea/KIDDIE POOL.jpg"alt="">
      <img class="mySlides" src="./images/amadea/ADULT SWIMMING POOL.jpg"alt="">
      <img class="mySlides" src="./images/amadea/ADULT SWIMMING POOL view 2.jpg"alt="">

        <button class="butimg leftbutt" onclick="plusDivs(-1)"><i class='bx bx-chevron-left'></i></button>
        <button class="butimg rightbutt" onclick="plusDivs(1)"><i class='bx bx-chevron-right'></i></button>
    </div>
    </section>
    <section class="features">
      <div class="content">
     
      <div class="amenities">
        <h1 class="header">Amenities</h1>
            <p> Outdoor Lounge</p> 
            <p> Gazebo/ Multipurpose Hall</p> 
            <p> Swimming Pool</p> 
            <p> Kiddie Pool</p> 
            <p> Pool Deck</p> 
            <p> Zen Garden</p> 
            <p> Children’s Playground</p> 
            <p> Fitness Gym</p> 
            <p> Function Hall</p> 
            <p> Children’s Playroom/ Daycare</p> 
            <p> Sky Garden</p> 
            <p> Reception Lobby</p>
      </div>
      <div class="feat">
        <h1 class="header">Features</h1>
          <p> 1,315 Units</p> 
          <p> Property Management Office</p> 
          <p> 24-hour Security</p> 
          <p> Automatic Fire Sprinkler System for all units</p> 
          <p> Emergency back-up power (for selected common areas)</p> 
          <p> Overhead Water tank and Underground Cistern for ample water supply</p> 
          <p> 4 High Speed Elevators for Tower 1 and 3 High Speed Elevators for Tower 2</p> 
      </div>
    </div>
    </section>
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