<?php
    include "view/header.php";
if(isset($_GET ["ct"])){
    $ct = $_GET["ct"];
    switch ($ct) {
        case 'contact':
            include "view/contact.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}if(isset($_GET ["ab"])){
    $ab = $_GET["ab"];
    switch ($ab) {
        case 'about':
            include "view/about.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}if(isset($_GET ["dt"])){
    $dt = $_GET["dt"];
    switch ($dt) {
        case 'detail':
            include "view/detail.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}
    
    include "view/footer.php";
?>