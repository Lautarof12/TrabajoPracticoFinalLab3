<?php

if($_SESSION['cargo'] !== 1 && $_SESSION['cargo'] !== 2 ){
    header("Location: login.php");
}

if($_SESSION['cargo'] == 1){
    header("Location: homeAdmin.php");
}

