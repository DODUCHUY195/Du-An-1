<?php
    include "Admin/header1.php";
    if(isset($_GET ["action"])){
    $tam = $_GET["action"];
}else{
    $tam = '';
}
if($tam == 'more'){
    include "Admin/indexAdd.php";
}
else {
    include "Admin/home1.php";
}
    include "Admin/footer1.php";
?>