<?php
include "admin/model/connectdb.php";
include "admin/model/ve.php";
include "admin/model/danhmuc.php";
include "admin/model/chitiet.php";
$dsve = getall();

//$newVe = getnew_ve();
//echo var_dump($newVe);
//connectdb();
include "View/header.php";
if(isset($_GET['act'])){
        switch ($_GET['act']) {

        case 'trangchu':
        include "View/trangchu.php";
        break;
        

        case 'chitietve':
        if(isset($_GET['id']) && ($_GET['id']>0)){
            $id = $_GET['id'];
        }
        $dsct = getall_ve($id,"");
        include "View/chitietve.php";
        break;


        case 'chonchuyen';
    
        if(isset($_GET['id']) && ($_GET['id']>0)){
        $id = $_GET['id'];
        }
        $dstt = getall_ct($id);

        include "View/chonchuyen.php";
        break;

        case 'nhapthongtin':
            include "View/nhapthongtin.php";
            break;

        case 'thanhtoan':
            include "View/thanhtoan.php";
            break;


        default:
        include "view/home.php";
        }
        }
        else{
        include "View/home.php";
        }

        include "View/footer.php";

?>