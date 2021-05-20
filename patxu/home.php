<?php
include_once 'header.php';
?>

<body>

  <div class="page-container">
    <header>
      <div class="head-container">
        <a id="patrickxu" href="home.php">Patrick Xu</a>   
         <?php
        if (isset($_SESSION["userid"])) {
          echo "<div class='mainpage-account'>Hi, {$_SESSION["name"]}!  <a href='includes/logout.inc.php'>Sign out</a></div>";
        } else {
          echo "<div class='mainpage-account'><a href='login.php'>Sign in</a></div>";
        }
        ?>
        <nav>
          <li><a href="home.php" id="homBtn" class="navBtn active">Home</a></li>
          <li><a href="photos.php" id="phoBtn" class="navBtn">Gallery</a></li>
          <li><a href="aboutme.php" id="aboBtn" class="navBtn">About</a></li>
        </nav>
      </div>

    </header>

    <div id="mainpage-container">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/homepage1.jpg">
          </div>
          <div class="carousel-item">
            <img src="images/homepage2.jpg">
          </div>
          <div class="carousel-item">
            <img src="images/homepage3.jpg">
          </div>
        </div>
      </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>


  </div>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="javascript/main.js"></script>
</body>

</html>