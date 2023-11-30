<div class="bodyDm">
<<<<<<< HEAD
    <h2>Danh Mục Loại Vé</h2>
    <form action="index.php?act=add" method="post">
        <div class="form-group">
            <input class="iptext" type="text" name="name" id="">
        </div>
=======
    <h2 class="dm">Danh Muc</h2>
    <form action="index.php?act=add" method="post">
        <input class="iptext" type="text" name="name" id="">
>>>>>>> d5fb5fae0772e6b37e4134929b2e3feb2f24928c
        <input class="ipbt" type="submit" name="themmoi" value="Them Moi">
    </form>
    <br>

    <table class="tb" border="solid 1px ">
<<<<<<< HEAD

=======
>>>>>>> d5fb5fae0772e6b37e4134929b2e3feb2f24928c
        <tr>
            <th>STT </th>
            <th>Ten Loai Ve </th>
            <th>Uu Tien </th>
            <th>Hien Thi</th>
            <th>Hanh Dong </th>
        </tr>
        <?php
    //var_dump($kq);
?>

        <?php if(isset($kq)&&(count($kq)>0)){
        $i=1;
        foreach ($kq as $dm) {
            echo '<tr>
            <td>'.$i.'</td>
            <td>'.$dm['name'].'</td>
            <td>'.$dm['uutien'].'</td>
            <td>'.$dm['hienthi'].'</td>
            <td> <a class="sua" href="index.php?act=updatedm&id='.$dm['id'].'">Sua</a> | <a class="xoa" href="index.php?act=delete&id='.$dm['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>