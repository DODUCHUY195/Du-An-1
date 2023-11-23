<?php
function getall_ve($idloaive=0,$kyw=""){
    $conn = connectdb();
    $sql = "SELECT * FROM ve WHERE 1";
    if($idloaive>0) $sql.=" AND idloaive =".$idloaive; 
    if($kyw!="") $sql.=" AND name like '%".$idloaive."%'";
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function insert_ve($idloaive,$name,$image,$gia){
    $conn = connectdb();
    $sql = "INSERT INTO ve (idloaive,name,image,gia) VALUES ('$idloaive','$name','$image','$gia')";
    $conn->exec($sql);
}   

function delete_ve($id){
    $conn = connectdb();
    $sql = "DELETE FROM ve where id = ".$id;
    $conn->exec($sql);
}

function getone_ve($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ve WHERE id = ".$id);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function updateve($id,$name,$image,$gia,$idloaive){
    $conn = connectdb();
    if($image==""){
    $sql = "UPDATE ve SET name ='".$name."' , gia ='".$gia."',idloaive ='".$idloaive."' WHERE id = ".$id;
    }else{
        $sql = "UPDATE ve SET name ='".$name."' , gia ='".$gia."',idloaive ='".$idloaive."' , image ='".$image."' WHERE id = ".$id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function getnew_ve(){
//     $conn = connectdb();
//     $sql = "SELECT * FROM ve ORDER BY id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $arrve = $stmt->fetchAll(); 
//     $conn = null;
//     return $arrve;
// }


?>