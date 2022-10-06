<?php

session_start();


if(!isset($_SESSION['token'])){
    $_SESSION['token'] = md5( uniqid(mt_rand(), true) );
}else{
    
}


?>