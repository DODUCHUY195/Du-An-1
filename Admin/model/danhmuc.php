<?php
function getall(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM loaive");
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function delete($id){
    $conn = connectdb();
    $sql = "DELETE FROM loaive where id = ".$id;
    $conn->exec($sql);
}

function getonedm($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM loaive WHERE id = ".$id);
    $stmt ->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function updatedm($id,$name){
    $conn = connectdb();
    $sql = "UPDATE loaive SET name ='".$name."' WHERE id = ".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function themdm($name){
   $conn = connectdb();
   $sql =  "INSERT INTO loaive (name) VALUES ('".$name."')";
   $conn ->exec($sql);
}


?>