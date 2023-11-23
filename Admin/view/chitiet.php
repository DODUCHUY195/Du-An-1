<div>
    <h2>Chi Tiet Ve</h2>
    <form action="index.php?act=ct_add" method="post" enctype="multipart/form-data">
        <select name="idloaive" id="">
            <option value="0">Chọn Loại Vé</option>
            <?php
                if(isset($dsve)){
                    foreach($dsve as $dm){
                        echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                    }
                }
            ?>
        </select>
        Gio Di<input type="text" name="gio_di" id="">
        Gio Den<input type="text" name="gio_den" id="">
        Diem Di<input type="text" name="diem_di" id="">
        Diem Den<input type="text" name="diem_den" id="">
        <input type="submit" name="themmoi" value="Them Moi">
    </form>
    <br>

    <table>
        <tr>
            <th>STT </th>
            <th>Gio Di</th>
            <th>Gio Den</th>
            <th>Diem Di </th>
            <th>Diem Den </th>
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
            <td>'.$dm['gio_di'].'</td>
            <td>'.$dm['gio_den'].'</td>
            <td>'.$dm['diem_di'].'</td>
            <td>'.$dm['diem_den'].'</td>
            <td> <a href="index.php?act=ct_update&id='.$dm['id'].'">Sua</a> | <a href="index.php?act=delete_ct&id='.$dm['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>