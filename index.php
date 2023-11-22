<?php
include_once "admin/model/connectdb.php";
include_once "admin/model/ve.php";
//$newVe = getnew_ve();
//echo var_dump($newVe);
//connectdb();
include "View/header.php";
if(isset($_GET['act'])){
        switch ($_GET['act']) {

        case 'trangchu':
        include "View/trangchu.php";
        break;
        
        case 'th-na':
        include "View/chuyenxeth-na.php";
        break;

        case 'dangnhap':
        include "Admin/view/login.php";
        break;

        default:
        include_once "view/home.php";
}
}
else{
    
    include "View/home.php";
}

include "View/footer.php";

?>