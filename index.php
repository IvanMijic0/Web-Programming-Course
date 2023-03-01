<?php
 require "vendor/autoload.php";

 Flight::route("/index.php", function(){
    echo "Pepi, Gabi i Gugi su slatki";
 });

 Flight::start();

