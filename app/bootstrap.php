<?php
  // Load config file
 require_once 'config/config.php';
  // Load helpers
 require_once 'helpers/url_helper.php';
 require_once 'helpers/session_helper.php';

  //Auto Load Core Libs
 spl_autoload_register(function ($classname){
    require_once 'libraries/' . $classname . '.php';
 });