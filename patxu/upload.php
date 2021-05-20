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
            <div class="login-grid">
                <div class="login-wrap">
                    <div class="login-item login-text">
                        <a style="font-size: 30px;">Upload an image</a>
                    </div>
                    <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
                        <div class="login-item">
                            <input type="text" name="name" placeholder="what...">
                        </div>
                        <div class="login-item">
                            <input type="text" name="place" placeholder="where...">
                        </div>
                        <div class="login-item">
                            <input type="text" name="description" placeholder="more...">
                        </div>
                        <div class="login-item">
                            <input type="file" name="uploadfile" value="">
                        </div>

                        <div class="login-item">
                            <input id="upload-btn" class="myBtn" type="submit" name="upload" value="Upload">
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="javascript/main.js"></script>
</body>

</html>