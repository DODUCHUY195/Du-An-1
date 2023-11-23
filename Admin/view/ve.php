<div>
    <h2>Ve</h2>
    <form action="index.php?act=ve_add" method="post" enctype="multipart/form-data">
        <select name="idloaive" id="">
            <option value="0">Chọn Loại Vé </option>
            <?php
                if(isset($dsve)){
                    foreach($dsve as $dm){
                        echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                    }
                }
            ?>
        </select>
        <input type="text" name="name" id="">
        <input type="file" name="hinh" id="">
        <?php
            if(isset($uploadOk)&&($uploadOk==0)){
                echo "Yeu Cau Nhap Dung Dinh Dang";
            }
        ?>
        <input type="text" name="gia" id="">
        <input type="submit" name="themmoi" value="Them Moi">
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
        foreach ($kq as $item) {
            echo '<tr>
            <td>'.$i.'</td>
            <td>'.$item['name'].'</td>
            <td><img src="'.$item['image'].'" width="80px"></td>
            <td>'.$item['gia'].'</td>
            <td> <a href="index.php?act=ve_update&id='.$item['id'].'">Sua</a> | <a href="index.php?act=delete_ve&id='.$item['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>