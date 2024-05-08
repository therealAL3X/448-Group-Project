<?php
/*
Modified by Alex Khadra for D6
Created by Bill Lioreisis
IS 448
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sp_style.css">
  <title>Welcome</title>
</head>
<body>
  <header class="head-main-info">
    <div class="menubar">
      <nav>
        <a href="findAgroup.html">Find a Group</a>
        <a href="sp_about.htm">About Us</a>
        <a href="contactUs.html">Contact</a>
        <?php
        session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo '<a href="logout.php" class="logout-button">Logout</a>'; // Logout button
        } else {
          echo '<a href="login.html">Login</a>';
        }
        ?>
      </nav>
    </div>
    <a href="https://umbc.edu/">
      <img class="logo" src="Images/UMBC-primary-logo-CMYK-on-black-2435520028.png" alt="UMBC Logo" width="175px" />
    </a>
    <div class="page-details">
      <h1><strong>Meet, Chat, and Study with Students at UMBC!</strong></h1>
      <h2><strong>Join the Largest UMBC Study Community</strong></h2>
      <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['firstname']) . "!</h2>";
      }
      ?>
      <div id="join-us">
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo '<a href="logout.php" class="logout-button">Logout</a>'; // Logout button
        } else {
          echo '<a href="login.html">Login</a>';
        }
        ?>
      </div>
    </div>
  </header>
  <div class="container">
    <!--Main information that student may need to know-->
    <div class="Info-1">
      <h2>What makes us Unique?</h2>
      </center>
      <div class="top-benefits">
        <div class="benefits">
          <center>
            <img src="Images/onlinelearngirl.jpeg" alt="#" height="150">
            <h3> Create your own Study Universe</h3>
            <p>Dive into a galaxy of academic possibilities where you're the star. Our platform empowers you to build constellations of study groups tailored to your learning needs. Blast off into a realm of collaboration, knowledge sharing, and mutual support. With Retrievers Together, the cosmos of learning is yours to explore!</p>
        </div>

        <div class="benefits">
          <center>
            <img src="Images/onlineStudyBoy.jpg" alt="#" height="150">
            <h3>Join Study Groups</h3>
            <p>
              Expand your academic horizons by connecting with like-minded peers through our dynamic study group finder. Unlock a world of collaborative learning where knowledge knows no bounds. Whether you're seeking assistance, brainstorming partners, or simply a supportive community, Retrievers Together is your launchpad to success!
            </p>
          </center>
        </div>
        <div class="benefits">
          <center>
            <img src="Images/meet_chat.jpg" alt="#" height="150">
            <h3>Community Events!</h3>
            <p>
              Experience Community Events with Retrievers Together! Immerse yourself in a vibrant atmosphere of intellectual exchange and camaraderie. From study sessions to workshops, seminars to social gatherings, our platform brings together students from all walks of academic life. Discover new perspectives, forge lasting connections, and make memories that extend beyond the classroom. J!
            </p>
          </center>
        </div>
      </div>
      <h2>Join our <u> Fast Growing</u> Community!</h2>
      <div class="grow">
        <p>
          Join us at Retrievers Together, where students unite to excel academically. Whether you're seeking study buddies, group projects partners, or just a supportive community, we've got you covered. With our intuitive study group finder, connecting with like-minded peers has never been easier. Say goodbye to solitary study sessions and hello to collaborative learning. Join Retrievers Together today and elevate your academic journey!
        </p>
        <img src="Images/more_ways.png" alt="" width="400px">
      </div>
    </div>
    <h2>Don't Take Our Word For It</h2>
    <div class="reviews">

      <!-- Student Reviews -->
      <div id="review">
        <img src="Images/student1.jpg" alt="#">
        <div>
          <center>
            <p>&quot;As a chronic procrastinator, this community really helps me motivate myself to get my homework
              done. Has cool leaderboards, timers, and study tips. It’s a really large community so it’s pretty easy to
              meet people, too.&quot;</p>
          </center>
        </div>
      </div>

      <div id="review">
        <center>
          <img src="Images/student2.jpg" alt="#">
          <p>
            &quot; <strong>Retrievers Together is a lifesaver</strong>. Its comprehensive search helps me find study
            groups for various subjects. The flexibility to join online and offline sessions has been invaluable. It's
            improved my academic performance and connected me with diverse peers.&quot;
          </p>
        </center>
      </div>

      <div id="review">
        <img src="Images/student3.jpg" alt="#">
        <center>
          <p>
            &quot;<strong>Retrievers Together simplifies finding study groups</strong> . Its intuitive interface and
            filters based on courses, locations, and times make it effortless. I've met great peers and had productive
            study sessions. Highly recommended for any student seeking collaboration.&quot;
          </p>
        </center>
        
      </div>
    </div>

    <div class="block-random">
      <h1>What are you waiting for?</h1>
      <h3>Join us NOW!</h3>
      <div id="join-us">
        <a href="https://webauth.umbc.edu">Log into MyUMBC</a>
      </div>

      <!--Footer-->
    </div>
    <footer class="bottom">
      <img src="Images/UMBC-primary-logo-CMYK-on-black-2435520028.png" alt="umbc" width="175px">
      <div class="social-media-footer">
        <h5>Join Other Ways | <a href="https://discord.com/">Join the Discord</a> | <a
            href="https://www.google.com/">Join using Google</a> | View HTML & CSS </h5> <!--! LINK TO HTML && CSS FILES !-->
      </div>
    </footer>
    </head>

</html>