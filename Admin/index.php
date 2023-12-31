<?php
    session_start();
    ob_start();
    include "model/connectdb.php";
    include "model/danhmuc.php";
    include "model/ve.php";
    include "model/chitiet.php";
    //connectdb();
    include "view/header.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'danhmuc':
                $kq = getall();
                include "view/danhmuc.php";
                break;

                case 'delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete($id);
                }
                $kq=getall();
                include "view/danhmuc.php";
                break;

                case 'delete_ve':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_ve($id);
                }
                $kq=getall_ve();
                include "view/ve.php";
                break;

                case 'updatedm':
                    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kq1 = getonedm($id);
                    $kq=getall();
                    include "view/update.php";
                }  if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    updatedm($id,$name);
                    $kq=getall();
                    include "view/danhmuc.php";
                }
                    break;

                    case 'add':
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $name = $_POST['name'];
                            themdm($name);
                        }
                        $kq = getall();
                        include "view/danhmuc.php";
                        break;

                    case 've':
                        $dsve = getall();
                        $kq = getall_ve();
                        include "view/ve.php";
                        break;

                    case 've_add':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $idloaive = $_POST['idloaive'];
                    $name = $_POST['name'];
                    $gia = $_POST['gia'];
                    $target_dir = "../Uploads/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    $image =  $target_file;
                    $uploadOk=1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    if($imageFileType != "jpg" &&$imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
                        $uploadOk = 0;
                    }
                    if($uploadOk==1){
                    move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file);
                    insert_ve($idloaive,$name,$image,$gia);
                    }
                    } 
                    $dsve = getall();
                    $kq = getall_ve();
                    include "view/ve.php";
                    break;

                case 've_update':
                    $dsve = getall();
                    if(isset($_GET['id']) &&($_GET['id']>0)){
                        $vect = getone_ve($_GET['id']);
                    }
                    $kq = getall_ve();
                    include "view/updateve.php";
                    break;

                
                case 'chitiet':
                $dsve = getall();
                $kq = getall_ct();
                $kq2 = getall_ve();
                include "view/chitiet.php";
                break;

                 case 'ct_add':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id_ve = $_POST['id_ve'];
                    $idloaive = $_POST['idloaive'];
                    $gio_di = $_POST['gio_di'];
                    $gio_den = $_POST['gio_den'];
                    $diem_di = $_POST['diem_di'];
                    $diem_den = $_POST['diem_den'];
                    insert_ct($id_ve,$idloaive,$gio_di,$gio_den,$diem_di,$diem_den);
                    } 
                    $dsve = getall();
                    $kq = getall_ct();
                    $kq2 = getall_ve();
                    include "view/chitiet.php";
                    break;

                case 'ct_update':
                    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kq1 = getone_ct($id);
                    $kq=getall_ct();
                    include "view/updatect.php";
                }  if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $idloaive = $_POST['idloaive'];
                    $gio_di = $_POST['gio_di'];
                    $gio_den = $_POST['gio_den'];
                    $diem_di = $_POST['diem_di'];
                    $diem_den = $_POST['diem_den'];
                    updatect($id,$idloaive,$gio_di,$gio_den,$diem_di,$diem_den);
                    $kq=getall_ct();
                    include "view/chitiet.php";
                }
                    break;
   
                
                 case 'delete_ct':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_ct($id);
                }
                $kq=getall_ct();
                include "view/chitiet.php";
                break;    

                case 'capnhat':
                    $dsve = getall();
                    if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                    $idloaive = $_POST['idloaive'];
                    $name = $_POST['name'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];
                    if($_FILES["hinh"]["name"]!= ""){
                        $target_dir = "../Uploads/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    $image =  $target_file;
                    $uploadOk=1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    if($imageFileType != "jpg" &&$imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
                        $uploadOk = 0;
                    }
                    if($uploadOk==1){
                    move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file);
                    
                    }
                    }else{
                        $image = "";
                    }
                    updateve($id,$name,$image,$gia,$idloaive);
                    }
                    $kq = getall_ve();
                    include "view/ve.php";
                    break;

                case 'capnhatct':
                    $dsve = getall();
                    if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                    $idloaive = $_POST['idloaive'];
                    $id = $_POST['id'];
                    $id_ve = $_POST['id_ve'];
                    $gio_di = $_POST['gio_di'];
                    $gio_den = $_POST['gio_den'];
                    $diem_di = $_POST['diem_di'];
                    $diem_den = $_POST['diem_den'];
                    
                    updatect($id,$idloaive,$id_ve,$gio_di,$gio_den,$diem_di,$diem_den);
                    }
                    $kq2 = getall_ct();
                    $kq = getall_ve();
                    include "view/ve.php";
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