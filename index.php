<?php

    include "view/header.php";
if(isset($_GET ["quanly"])){
    $temp = $_GET["quanly"];
}else{
    $temp = '';
}
if($temp == 'search'){
    include "view/search.php";
    }
else if($temp == 'detail'){
    include "view/detail.php";
    }
else if($temp == 'about'){
    include "view/about.php";
}else if($temp == 'contact'){
    include "view/contact.php";
}else if($temp == 'trangchu'){
    include "view/trangchu.php";
<<<<<<< HEAD
=======
}else if($temp == 'th-na'){
    include "View/chuyenxeth-na.php";
>>>>>>> 94c5379d1a882fbcee51c4c700513556399080ea
}
else{
    include "view/home.php";
}

include "view/footer.php";
?>