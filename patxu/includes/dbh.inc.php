<?php

$serverName = "sql213.epizy.com";
$dBUserName = "epiz_28641351";
$dBPassword = "oJOGVvfG1mj8";
$dBName = "epiz_28641351_patrickxuweb";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
