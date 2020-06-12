
<!DOCTYPE html>
<html>
<title>Changemakers.org</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Changemakers.org</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Projects</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-gbp"></i> Donations</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
<div id="sm-icons"></div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">Donations</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Doing something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">We are necessary</span><br>
    <span class="w3-large">We dont waste time we change lives.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and support us</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-white w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-white w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-white w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-white w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-white w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-white w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE ORGANISATION</h3>
  <p class="w3-center w3-large">Who Are We?</p>
  <div class="text" id="about-text">
  <p>We are a group of young people of diverse ages and experience who 
    all have one purpose in mind: to make positive change in Africa, Zimbabwe to be precise. 
    We are Africans and Zimbabweans at heart, and we recognize that Africa and Zimbabwe 
    need our help in tackling the problems currently facing our people. </p>
  </div>

  <p class="w3-center w3-large">What is Our Aim and Vision?</p>
  <div class="text" id="about-text">
  <p>We have short and long term goals that we aim to achieve in making 
    positive impact in peoples lives in Zimbabwe. The short term goals are 
    mainly to alleviate and provide relief for immediate needs, which all fall 
    under “poverty”. These are: </p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-cutlery w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Hunger and Food</p>
      <p>This has been a well documented problem in our country and 
        continent. Among our members, we have people that have done 
        extensive work in providing food for people in Zimbabwe. </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-graduation-cap w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">School Fees</p>
      <p>. Parents are not able to afford school fees for their children, and it is one of our aims to alleviate and
         lessen the burden on some parents for a given specified period of time. We realise the importance of education 
         and we would like to sponsor or
         help as many children as possible on their path to achieving their dreams and escaping the poverty spiral..</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-female w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Sanitation and personal hygiene for girls</p>
      <p>Our girls are going to school without sanitary pads, which are necessary for 
        personal hygiene. This is a challenge for them and a priority for us to ensure 
        that we can help them so they never worry about that part 
        of their lives.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-medkit w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Medical Supplies</p>
      <p>The situation in the medical system of Zimbabwe is so dire 
        as a consequence hospital fees are very expensive, and patients are 
        required to bring their own supplies to the hospital.
        Which is impossible given the current economic climate, its a real 
        challenge for a lot of people. We aim to help in the best
         way we can to provide supplies such as gloves and other personal
          protective equipment that may be required, and any other equipment 
          that we can help with as well. </p>
        </div>
      </div>
  
      <p class="w3-center w3-large">More About Us</p>
          <div class="text">
          <p>The long term goals are there to ensure that as many of our 
            people can be self sufficient, and not have 
            to rely solely on aid. These are as follows:</p>
            <ul>
            <li>Setting up and helping to set up self-reliance initiatives, e.g. helping someone start up a tuckshop.</li>	
            
            <li>Building a library at a primary school and sourcing resources for the, such as textbooks, chairs, desks etc. </li>	
            
            This is only to name a few of the long term initiatives we aim to tackle, and with more time, 
            exposure and experience, we will be able to get involved in more of these initiatives and 
            further improve the lives of our people. 
            </ul>
        </div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We Love Making A Change!!!.</h3>
      <p>We are proud of what we do<br>Our commitment and passion is unquestionable</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="2girls.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section 
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who run the organisation</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team2.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-20">
  <div class="w3-quarter">
    <span class="w3-xxlarge">8</span>
    <br>Members
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>Meetings
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">19+</span>
    <br>Happy children
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">100%</span>
    <br>Commitment
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:58px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">Please see what we've done for people below:</p>
   <center>
      <h2>Shammah Childrens Home</h2>
      <h3>Based in Waterfalls,Harare,Zimbabwe</h3>
    
      <img src="/childrenshome.jpg" style="width:50%" style="height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="Food Donation">
    
    <p>We are very proud of our latest project for Shammah Childrens Home where we provided food supplies.
      Shammah Childrens Home is home to 19 children of varying ages from toddlers to late teens.Shammah Childrens Home
      plays a special role in the community of housing and taking care of kids from difficult backgrounds 
      who do not have a safe place to stay.Supporting them was a no brainer we raised funds from our members to make 
      a contribution to the childrens lives.
     </p>
  </center>
    </div>
    

 

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<!--

<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>


<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>
-->


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> We are based in United Kingdom</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 07984739228</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form method="POST" action="">
    <fieldset>
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <span class="error"><?= $name_error ?></span>
</fieldset>
<fieldset>
      <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="Email"></p>
      
</fieldset>
<fieldset>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
   
</fieldset>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
   
</fieldset>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-white w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-white w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-white w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-white w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-white w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-white w3-hover-opacity"></i>
  </div>
  <p>Powered by TinoStudios</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

</script>
</body>
</html>