<?php
include_once 'header.php';
?>

<body>
<div id="canvas-wrap">
      <canvas></canvas>
        <div id="alertbox">
          <a href="#"></a>
          <input id="backtocon" type="back" value="OK" readonly>
        </div>
    </div>
  <div class="page-container">
    <header id="mainHeader">
      <div class="head-container">
        <a id="patrickxu" href="index.php">Patrick Xu</a>
        <nav>
          <li><a href="index.php" id="homBtn" class="navBtn">Home</a></li>
          <li><a href="photos.php" id="phoBtn" class="navBtn">More</a></li>
          <li><a href="aboutme.php" id="aboBtn" class="navBtn">About</a></li>
        </nav>
        <?php
        if (isset($_SESSION["userid"])) {
          echo "<div class='mainpage-account'>Hi, {$_SESSION["name"]}!  <a href='includes/logout.inc.php'>Sign out</a></div>";
        } else {
          echo "<div class='mainpage-account'><a href='login.php'>Sign in</a></div>";
        }
        ?>

      </div>

    </header>


    <div class="main-container">
      <div class="contact-grid" data-aos="fade-up">
        <div class="contact-item name">
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div class="contact-item email">
          <label for="email">Email</label>
          <input type="text" name="email">
        </div>
        <div class="contact-item subject">
          <label for="subject">Subject</label>
          <input type="text" name="subject">
        </div>
        <div class="contact-item message">
          <label for="message">Message</label>
          <textarea name="message"></textarea>
        </div>
        <div class="contact-item info">
          <ul class="list-unstyled">
            <li class="mb-3">
              <strong class="d-block mb-1">Address</strong>
              <span>8888 University Drive, Burnaby, British Columbia, Canada</span>
            </li>
            <li class="mb-3">
              <strong class="d-block mb-1">Phone</strong>
              <span>+1 778-751-5726</span>
            </li>
            <li class="mb-3">
              <strong class="d-block mb-1">Email</strong>
              <span>patrick@hotmail.com</span>
            </li>
          </ul>
        </div>
        <div class="contact-item send">
          <input type="submit" id="submit" value="Send Message">
        </div>
      </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="javascript/main.js"></script>
</body>

</html>