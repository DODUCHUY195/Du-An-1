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
}else if($temp == 'th-na'){
    include "View/chuyenxeth-na.php";
}
else{
    include "view/home.php";
}

include "view/footer.php";
?>