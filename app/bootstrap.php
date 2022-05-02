<?php
require_once("config/config.php");
require_once("config/debug.php");

// Load all files from the "libraries" folder
spl_autoload_register(function ($className) {
    require_once("libraries/" . $className . ".php");
});
new Core;
new Controller;
new Database;
