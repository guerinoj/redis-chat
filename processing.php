<?php

require_once 'functions.php';

var_dump($_POST);

if(isset($_POST['message']) && $_POST['message'])
  setMessage($_POST['message']);
