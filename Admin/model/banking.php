<?php
function getall_tt(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM hinh_thuc_thanh_toan");
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}





?>