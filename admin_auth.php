<?php
if(!$_SESSION['login']['role']){
    header("location: dashboard.php ");
    exit();
}