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
                        <a style="font-size: 30px;">Log in an account</a>
                    </div>

                    <form action="includes/login.inc.php" method="post">
                        <div class="login-item">
                            <input type="text" name="name" placeholder="Username/Email...">
                        </div>
                        <div class="login-item">
                            <input type="password" name="pwd" placeholder="Password...">
                        </div>
                        <div class="login-item">

                            <div class="center-btn">
                                <button id="login-btn" class="myBtn" type="submit" name="submit">Log in</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    echo '<div class="login-item"><p class="signup-message">';
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "Fill in all fields!";
                        } else if ($_GET["error"] == "wronglogin") {
                            echo "Incorrect login information!";
                        }
                        echo '</p></div>';
                    }
                    ?>

                    <div class="login-item login-text">
                        <a>Not yet a member?</a>
                        <a href='signup.php' style="text-decoration: underline;">Sign up</a>
                    </div>
                    <div class="login-item login-text">
                        <a href="#" style="text-decoration: underline;">Forget Password</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="javascript/main.js"></script>
</body>

</html>