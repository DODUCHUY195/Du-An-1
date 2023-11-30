<div>
    <h2>Cap Nhat Chi Tiet</h2>
    <?php
    //echo var_dump($kq1);
    ?>
    <form action="index.php?act=capnhatct" method="post">

        <select name="idloaive" id="">
            <option value="0">Chon Loai Ve</option>
            <?php
            $idloaivegan=$vect[0]['idloaive'];
                if(isset($dsve)){
                    foreach($dsve as $dm){
                        if($dm['id'] == $idloaivegan)
                        echo '<option value="'.$dm['id'].'" selected>'.$dm['name'].'</option>';
                        else
                        echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                    }
                }
            ?>
        </select>
        <br>
        <br>
        <select name="id_ve" id="">
            <option value="0">Chon Ve</option>
            <?php
            $idloaivee=$kq1[0]['id_ve'];
                if(isset($dsve)){
                    foreach($dsve as $dm){
                        if($dm['id'] == $idloaivee)
                        echo '<option value="'.$dm['id'].'" selected>'.$dm['name'].'</option>';
                        else
                        echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                    }
                }
            ?>
        </select>
        <br>
        Gio di<input type="text" name="gio_di" id="" value="<?=$kq[0]['gio_di']?>">
        Gio den<input type="text" name="gio_den" id="" value="<?=$kq[0]['gio_den']?>">
        Diem di<input type="text" name="diem_di" id="" value="<?=$kq[0]['diem_di']?>">
        Diem den<input type="text" name="diem_den" id="" value="<?=$kq[0]['diem_den']?>">
        <input type="hidden" name="id" value="<?=$kq[0]['id']?>">
        <input type="submit" name="capnhat" value="Cap Nhat">
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

        <?php if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $ct) {
            echo '<tr>
            <td>'.$i.'</td>
            <td>'.$ct['gio_di'].'</td>
            <td>'.$ct['gio_den'].'</td>
            <td>'.$ct['diem_di'].'</td>
            <td>'.$ct['diem_den'].'</td>
            <td> <a href="index.php?act=ct_update&id='.$ct['id'].'">Sua</a> | <a href="index.php?act=delete_ct&id='.$ct['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>