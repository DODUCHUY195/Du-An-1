<?php

    include "View/header.php";
if(isset($_GET ["quanly"])){
    $temp = $_GET["quanly"];
}else{
    $temp = '';
}

if($temp == 'trangchu'){
    include "View/trangchu.php";
}else if($temp == 'th-na'){
    include "View/chuyenxeth-na.php";
}else if($temp == 'dangnhap'){
    include "Admin/view/login.php";
}
else{
    include "View/home.php";
}

include "View/footer.php";

?>