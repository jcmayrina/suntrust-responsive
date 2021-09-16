<section class="contact" id="contact">
        <center>
        <h1 class="heading">
          Contact Us
        </h1>
  
        <div class="row">
          <form class="inquire" method="POST">
            <div class="inputBox">
              <h4>Full Name</h4>
              <h4>Email</h4>
            </div>
            <div class="inputBox">
              <input type="text" name="fullname" placeholder="Last Name, First Name" required/>
              <input type="email" name="email" placeholder="your@email.com" required/>
            </div>
            <div class="inputBox">
              <h4>Number</h4>
              <h4>Property</h4>
            </div>
            <div class="inputBox">
              <input type="number" min="10" name="number" placeholder="999-9999 / 9999-999-9999" required/>
              <input type="text" minlength="5" name="property" placeholder="Amadea/Shanata/Verona/Capitol Plaza/Sentosa/Kirana/Asmara/San Francisco/Gran Avila" required/>
            </div>
            <div class="inputBox">
            <h4>Message</h4>
            </div>
            <textarea
              placeholder="Message"
              name="message"
              minlength="10"
              id=""
              cols="30"
              rows="10"
              required
            ></textarea>
            <input type="submit" name="submit" class="btn" value="SEND MESSAGE">
            <?php
          if(isset($_POST['submit'])){
              $usercontrlobj = new Usercontrl();
              $usercontrlobj->setContact();
              }

          ?>
          </form></div></center>
          <div class="soclink">
            <center>
            <div class="social-menu">
              <ul>
                <li><a href="https://fb.com/suntrustcondominiums0519" target="_blank"><i class="fa fa-facebook white"></i></a></li>
                <li><a href="https://m.me/suntrustcondominiums0519" target="_blank"><i class="fab fa-facebook-messenger white"></i></a></li>
                <li><a href="https://www.instagram.com/suntrustcondominiums/" target="_blank"><i class="fa fa-instagram  white"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC2mBj6e47-l2jxdDuNc_9Zg/featured" target="_blank"><i class="fa fa-youtube-play white"></i></a></li>
                <li><a href="https://wa.me/639209815837?text=Good%20day%2C%20%0D%0A%0D%0AKindly%20send%20me%20a%20quotation%20on%3A%20%0D%0A%0D%0A1)%20Project%20name%3A%20%0D%0A%0D%0A2)%20Unit%20Type%20(1BR%20%2C%202BR%20or%203BR)%3A%20%0D%0A%0D%0A3)%20Others%20%3A%0D%0A%0D%0A4)%20My%20Name%20is%3A%0D%0A%0D%0A5)%20The%20best%20time%20to%20call%20me%20is%20at%20%20%3A%20%0D%0A%0D%0ATime%20%3A%0D%0A%0D%0ADate%3A%0D%0A%0D%0AThank%20you.%20%0D%0A"><i class="fab fa-whatsapp white"></i></a></li>
                <li><a href="viber://chat?number=639209815837"><i class="fab fa-viber white"></i></a></li>
              </ul>
            </div></center>
          </div>
      </section>