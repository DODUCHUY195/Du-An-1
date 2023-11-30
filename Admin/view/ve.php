<div class="bodyve">
    <h2 class="ve">Ve</h2>
    <form class="formtm" action="index.php?act=ve_add" method="post" enctype="multipart/form-data">
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

        <br>
        <input type="text" name="name" class="ipve">
        <br>
        <input type="file" name="hinh" class="iphinh">
        <br>
        <?php
            if(isset($uploadOk)&&($uploadOk==0)){
                echo "Yeu Cau Nhap Dung Dinh Dang";
            }
        ?>
        <input type="text" name="gia" class="ipve">
        <br>
        <input type="submit" name="themmoi" value="Them Moi">
    </form>
    <br>

    <table class="tbve">
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
            <td> <a class="sua" href="index.php?act=ve_update&id='.$item['id'].'">Sua</a> | <a class="xoa" href="index.php?act=delete_ve&id='.$item['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>