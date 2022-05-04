<?php
define("APPROOT", dirname(__FILE__, 2));
$host = substr($_SERVER["HTTP_HOST"], 0, 5);
if ($host == "local") {
    $local = true;
} else {
    $local = false;
}
define("LOCAL", $local);
if ($local) {
    $debug = true;
    define("URLROOT", "http://localhost/food-store");
} else {
    $debug = false;
    define("URLROOT", "");
}

define("SITENAME", "Liam Easton");
define("CURRENTYEAR", "2022");



if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3307");
    define("DB_PASS", "");
    define("DB_NAME", "farm");
} else {
    define("DB_HOST", "");
    define("DB_USER", "");
    define("DB_PORT", "");
    define("DB_PASS", "");
    define("DB_NAME", "");
}
