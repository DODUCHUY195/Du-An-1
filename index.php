<?php
    include "view/header.php";

    switch ($ct) {
        case 'contact':
            include "view/contact.php";
            break;
        
        default:
            include "view/home.php";
            break;
    }
    
    include "view/footer.php";
?>