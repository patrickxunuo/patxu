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
                    <li><a href="photos.php" id="phoBtn" class="navBtn">More</a></li>
                    <li><a href="aboutme.php" id="aboBtn" class="navBtn active">About</a></li>
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

        <div id="mainpage-container">
            <div class="aboutme-hover">
                <img id="aboutme-img" src="images/aboutme.jpg">
                <div class="aboutme-container">
                    <div class="aboutme-1">
                        Hi, I am Patrick
                    </div>
                    <div class="aboutme-2">Creative web developer based in Vancover and enjoy coding & snowborading.</div>
                    <div id="resBtn" class="myBtn">
                        Resume
                    </div>
                    <button id="conBtn" class="myBtn">Contact me</button>
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