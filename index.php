<?php
 require "vendor/autoload.php";

 Flight::route("/index.php", function(){
    echo "Pepi, Gabi i Gugica su slatki";
 });

 Flight::start();

