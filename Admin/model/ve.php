<?php
function getall_ve(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM ve");
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
?>