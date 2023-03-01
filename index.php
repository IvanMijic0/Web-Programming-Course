<?php
 require "vendor/autoload.php";

 Flight::route("/index.php", function(){
    echo "Hello world!";
 });

 Flight::start();

