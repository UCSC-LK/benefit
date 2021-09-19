<?php

require "config.php";
require "database.php";
require "controller.php";
require "model.php";
require "app.php";

spl_autoload_register(function($class_name){
	require "./srs/models/".ucfirst($class_name).".php";
});