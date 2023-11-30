<?php
function getall_ct(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM dat_ve");
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function insert_ct($id_ve,$idloaive,$gio_di,$gio_den,$diem_di,$diem_den){
    $conn = connectdb();
    $sql = "INSERT INTO dat_ve (id_ve,idloaive,gio_di,gio_den,diem_di,diem_den) VALUES ('$id_ve','$idloaive','$gio_di','$gio_den','$diem_di','$diem_den')";
    $conn->exec($sql);
}   

function delete_ct($id){
    $conn = connectdb();
    $sql = "DELETE FROM dat_ve where id = ".$id;
    $conn->exec($sql);
}

function getone_ct($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM dat_ve WHERE id = ".$id);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function updatect($id,$idloaive,$id_ve,$gio_di,$gio_den,$diem_di,$diem_den){
    $conn = connectdb();
    $sql = "UPDATE dat_ve SET idloaive ='".$idloaive."' ,id_ve ='".$id_ve."' , gio_di ='".$gio_di."' , gio_den ='".$gio_den."',diem_di ='".$diem_di."',diem_den ='".$diem_den."' WHERE id = ".$id;
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function getnew_ct(){
//     $conn = connectdb();
//     $sql = "SELECT * FROM dat_ve ORDER BY id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $arrve = $stmt->fetchAll(); 
//     $conn = null;
//     return $arrct;
// }


?>