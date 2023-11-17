<?php
   
if(isset($_GET ["action"])){
    $tam = $_GET["action"];
}else{
    $tam = '';
}
if($tam == 'quanlydanhmucvedith'){
    include "modules/quanlymucve/add.php";
    include "modules/quanlymucve/lietke.php";
    include "modules/quanlymucve/sua.php";
    include "modules/quanlymucve/xuly.php";
}else if($tam == 'quanlydanhmucvedinb'){
    include "modules/quanlymucve/add.php";
    include "modules/quanlymucve/lietke.php";
    include "modules/quanlymucve/sua.php";
    include "modules/quanlymucve/xuly.php";
}else if($tam=='quanlydanhmucvedibk'){
    include "modules/quanlymucve/add.php";
    include "modules/quanlymucve/lietke.php";
    include "modules/quanlymucve/sua.php";
    include "modules/quanlymucve/xuly.php";
}else if($tam == 'quanlydanhmucvediss'){
    include "modules/quanlymucve/add.php";
    include "modules/quanlymucve/lietke.php";
    include "modules/quanlymucve/sua.php";
    include "modules/quanlymucve/xuly.php";
}
else {
    include "modules/dashboard.php";
}
    
?>