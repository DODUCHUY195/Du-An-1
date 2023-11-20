<?php 

function load_all_car(){
    $query="SELECT ve.id as id, ve.name as name, ve.image as image ,ve.categoryId as categoryId,ve.gia as gia,ve.trangthai as trangthai, loaive.name as danhmuc FROM ve 
    INNER JOIN loaive ON ve.categoryId=loaive.id ORDER BY ve.id asc";
    $listDS=pdo_query($query);
    return $listDS;
}

function load_one_car($id){
    $query="SELECT * FROM ve WHERE id=".$id;
    $sp=pdo_query_one($query);
    return $sp;
}

//thêm
function insert_car($name,$image,$loaive,$gia,$trangthai){
    $query="INSERT INTO `ve`(`name`, `image`, `categoryId`,`gia`,`trangthai`) VALUES ('$name','$image','$loaive','$gia','$trangthai')";
    pdo_execute($query);
}

//xóa
function delete_car($id){
    $query="DELETE FROM ve WHERE id=".$id;
    pdo_execute($query);
}

//update
function update_car($id,$name,$file,$oldFile,$categoryId,$gia,$trangthai){
    $conn=pdo_get_connection();
    $query="UPDATE `ve` SET `id`=:id,`name`=:name,`image`=:image,`categoryId`=:categoryId,`gia`=:gia,`trangthai`=:trangthai WHERE id=:id";
    $state=$conn->prepare($query);
    $state->execute([
        ':id'=>$id,
        ':name'=>$name,
        ':image'=>$file?$file:$oldFile,
        ':categoryId'=>$categoryId,
        ':gia'=>$gia,
        ':trangthai'=>$trangthai,
    ]);
}
?>