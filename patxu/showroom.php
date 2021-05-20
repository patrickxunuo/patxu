<?php
require_once "header.php";
?>

<body>

    <div class="page-container">
        <header id="mainHeader">
            <div class="head-container">
                <a id="patrickxu" href="home.php">Patrick Xu</a>
                <nav>
                    <li><a href="home.php" id="homBtn" class="navBtn">Home</a></li>
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

        <div class="body-container">
            <div class="showroom-container" data-aos="fade-up">
                <div class="showroom-grid">
                    <div class="show-image">
                        <img src="images/image1.jpg" id="image-on" alt="">
                    </div>
                    <div class="image-info">
                        <div class="image-name">
                            <a href="">Sea to Sky</a>
                        </div>
                        <div class="image-des image-location">
                            <a>Sea to Sky Highway</a>
                        </div>
                        <div class="image-des image-date">
                            <a>May 2020</a>
                        </div>
                        <div class="image-des image-message">
                            <a>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam error a quo numquam dolor beatae vero aut labore aliquam, ducimus consequuntur libero temporibus ipsam? Perferendis quidem officiis beatae quaerat sint?</a>
                        </div>

                    </div>
                </div>
                <div class="operation-bar">
                    <div id="operation-btn-prev" class="operation-btn-wrap">
                        <div id="preBtn" class="operation-btn"></div>
                    </div>
                    <div id="operation-btn-back" class="operation-btn-wrap">
                        <div id="moreBtn" class="operation-btn"></div>
                    </div>
                    <div id="operation-btn-next" class="operation-btn-wrap">
                        <div id="nextBtn" class="operation-btn"></div>
                    </div>
                </div>
            </div>
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
    <script src="javascript/showroom.js"></script>
</body>

</html>