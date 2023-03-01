<?php
 require "vendor/autoload.php";

 Flight::route("/", function(){
    echo "Pepi, Gabi i Gugica su slatki";
 });

 Flight::start();

