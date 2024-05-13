<?php
$page ='home';

if (isset($_GET ['page'])){
    $filename = 'page/' . $_GET['page'] . '.php';
    if(file_exists($filename)){
    $page =$_GET['page'];
    }
}

include 'skeleton.php';

?>