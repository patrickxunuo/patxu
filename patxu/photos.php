<?php
include_once 'header.php';
?>

<body>

  <div class="page-container">
    <header id="mainHeader">
      <div class="head-container">
        <a id="patrickxu" href="home.php">Patrick Xu</a>
        <nav>
          <li><a href="home.php" id="homBtn" class="navBtn">Home</a></li>
          <li><a href="photos.php" id="phoBtn" class="navBtn active">More</a></li>
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

    <div class="body-container">
      <div class="main-container">
        <div class="loader-wrap">
          <div class="loader"></div>
        </div>
        <div class="porfolio-flexgrid-row" data-aos="fade-up">
          <div class="porfolio-flexgrid-column">
            <div class="item">
              <a href="showroom.php#1" class="item-wrap" data-value="1">
                <div class="work-info">
                  <h3>Raisu</h3>
                </div>
                <img src="images/image1.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#2" class="item-wrap">
                <div class="work-info">
                  <h3>Cypress</h3>
                </div>
                <img src="images/image2.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#9" class="item-wrap">
                <div class="work-info">
                  <h3>Whiterock</h3>
                </div>
                <img src="images/image9.jpg">
              </a>
            </div>
          </div>
          <div class="porfolio-flexgrid-column">
            <div class="item">
              <a href="showroom.php#4" class="item-wrap">
                <div class="work-info">
                  <h3>Sea to Sky</h3>
                </div>
                <img src="images/image4.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#5" class="item-wrap">
                <div class="work-info">
                  <h3>West Vancouver</h3>
                </div>
                <img src="images/image5.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#6" class="item-wrap">
                <div class="work-info">
                  <h3>Cypress Peak</h3>
                </div>
                <img src="images/image6.jpg">
              </a>
            </div>
          </div>
          <div class="porfolio-flexgrid-column">
            <div class="item">
              <a href="showroom.php#7" class="item-wrap">
                <div class="work-info">
                  <h3>Cable Car</h3>
                </div>
                <img src="images/image7.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#8" class="item-wrap">
                <div class="work-info">
                  <h3>Beijing</h3>
                </div>
                <img src="images/image8.jpg">
              </a>
            </div>
            <div class="item">
              <a href="showroom.php#3" class="item-wrap">
                <div class="work-info">
                  <h3>Cypress Trees</h3>
                </div>
                <img src="images/image3.jpg">
              </a>
            </div>
          </div>
        </div>
        <div class="center-btn">
          <button id="loadBtn" class="myBtn">Load more</button>
        </div>
        <template>
          <div class="photo-grid">
            <div class="photo-item photo-photo">
              <img class="showroom" src="">
            </div>
            <div class="photo-item photo-title">
              <a></a>
            </div>
            <div class="photo-item photo-discription">
              <a></a>
            </div>
          </div>
        </template>
      </div>
    </div>


    <footer id="photo-footer">
      <div class="footer-container">
        <div class="social-icon">
          <a href="https://www.instagram.com/xunpat/" target="_blank" class="fa fa-instagram" title="Instagram"></a>
          <a href="https://www.facebook.com/patrick.hui.9028/" target="_blank" class="fa fa-facebook" title="Facebook"></a>
          <a href="https://twitter.com/ecc9e7a260844b5" target="_blank" class="fa fa-twitter" title="Twitter"></a>
        </div>
        <p>Copyright &copy; 2021 Patrick Xu</p>
      </div>

    </footer>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="javascript/main.js"></script>
</body>

</html>