<?php
chdir(dirname(__DIR__));
require 'src/config.php';


$page = isset($_GET['url'])? $_GET['url'] :'Home';
if(!file_exists($page = VIEWS. '/' . $page . '.phtml')){
   require VIEWS . '/404.phtml';
    die;
}
return $page;