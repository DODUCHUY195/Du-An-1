<?php
include "model/pdo.php";
include "model/cars.php";
include "model/category.php";
include "view/header.php";

$listDS=load_all_car();
$listCG=load_all_cg();

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'add':
            $nameErr="";
            $imageErr="";
            $priceErr="";
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $category=$_POST['category'];
                $file=$_FILES['file']['name'];
                $gia=$_POST['gia'];
                $check=true;

                if(empty(trim($name))){
                    $nameErr="Vui lòng không để trống !";
                    $check=false;
                }if(empty(trim($gia))){
                    $priceErr="Vui long không để trống";
                    $check = false;
                }
                if(empty($file)){
                    $imageErr="Vui lòng Upload file ảnh lên !";
                    $check=false;
                }else{
                    $tmpFile=$_FILES['file']['tmp_name'];
                    $targetFile="view/images/".$file;
                    $extension=pathinfo($targetFile,PATHINFO_EXTENSION);
                    if(!in_array($extension,['jpeg','jpg','png','webp'])){
                        $imageErr="File không đúng định dạng !";
                        $check=false;
                    }else{
                        if($check){
                            move_uploaded_file($tmpFile,$targetFile);
                        }
                    }
                }
                if($check){
                    insert_car($name,$file,$category,$gia);
                    echo '<script>
                        alert("Bạn đã thêm thành công !");
                        window.location.href="indexController.php";
                    </script>';
                }

            }
            include "view/add.php";
            break;
        case 'update':
            $nameErr="";
            $imageErr="";
            $priceErr="";

            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $sp=load_one_car($id);
                if($sp){
                    $id=$sp['id'];
                    $name=$sp['name'];
                    $oldFile=$sp['image'];
                    $category=$sp['categoryId'];
                    $gia=$sp['gia'];
                }
            }

            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $category=$_POST['category'];
                $file=$_FILES['file']['name'];
                $oldFile=$_POST['oldFile'];
                $gia=$_POST['gia'];
                $check=true;

                if(empty(trim($name))){
                    $nameErr="Vui lòng không để trống !";
                    $check=false;
                }if(empty(trim($gia))){
                    $priceErr="Vui lòng không để trống !";
                    $check=false;
                }
                if(empty($file)){
                    $file=$oldFile;
                }else{
                    $tmpFile=$_FILES['file']['tmp_name'];
                    $targetFile="view/images/".$file;
                    $extension=pathinfo($targetFile,PATHINFO_EXTENSION);
                    if(!in_array($extension,['jpeg','jpg','png','webp'])){
                        $imageErr="File không đúng định dạng !";
                        $check=false;
                    }else{
                        if($check){
                            move_uploaded_file($tmpFile,$targetFile);
                            unlink("view/images/".$oldFile);
                        }
                    }
                }
                if($check){
                    update_car($id,$name,$file,$oldFile,$category,$gia);
                    echo '<script>
                        alert("Bạn đã Update thành công!");
                        window.location.href="indexController.php";
                    </script>';
                }
            }
            include "view/update.php";
            break;
        case 'delete':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $sp=load_one_car($id);
                if($sp){
                    delete_car($sp['id']);
                    unlink("view/images/".$sp['image']);
                    echo '<script>
                        alert("Đã xóa thành công !");
                        window.location.href="indexController.php";
                    </script>';
                    
                }
            }
            include "view/home.php";
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