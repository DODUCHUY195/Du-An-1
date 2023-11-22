<div>
    <h2>Cap Nhat Ve</h2>
    <form action="index.php?act=capnhat" method="post" enctype="multipart/form-data">
        <select name="idloaive" id="">
            <option value="0">Chon Ve</option>
            <?php
            $idloaivecur=$vect[0]['idloaive'];
                if(isset($dsve)){
                    foreach($dsve as $dm){
                        if($dm['id'] == $idloaivecur)
                        echo '<option value="'.$dm['id'].'" selected>'.$dm['name'].'</option>';
                        else
                        echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                    }
                }
            ?>
        </select>
        <input type="text" name="name" id="" value="<?=$vect[0]['name']?>">
        <input type="file" name="hinh" id="">
        <img src="<?=$vect[0]['image']?>" width="80px" alt="">
        <?php
            if(isset($uploadOk)&&($uploadOk==0)){
                echo "Yeu Cau Nhap Dung Dinh Dang";
            }
        ?>
        <input type="text" name="gia" id="" value="<?=$vect[0]['gia']?>">
        <input type="hidden" name="id" value="<?=$vect[0]['id']?>">
        <input type="submit" name="capnhat" value="Cap Nhat">
    </form>
    <br>

    <table>
        <tr>
            <th>STT </th>
            <th>Ten Ve </th>
            <th>Img </th>
            <th>Gia</th>
            <th>Hanh Dong </th>
        </tr>
        <?php
    //var_dump($kq);
?>

        <?php 
        if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $dm) {
            echo '<tr>
            <td>'.$i.'</td>
            <td>'.$dm['name'].'</td>
            <td><img src="'.$dm['image'].'" width="80px"></td>
            <td>'.$dm['gia'].'</td>
            <td> <a href="index.php?act=ve_update&id='.$dm['id'].'">Sua</a> | <a href="index.php?act=delete_ve&id='.$dm['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>