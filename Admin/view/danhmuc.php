<div>
    <h2>Danh Muc</h2>
    <form action="index.php?act=add" method="post">
        <input type="text" name="name" id="">
        <input type="submit" name="themmoi" value="Them Moi">
    </form>
    <br>

    <table>
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
            <td> <a href="index.php?act=updatedm&id='.$dm['id'].'">Sua</a> | <a href="index.php?act=delete&id='.$dm['id'].'">Xoa</a></td>
        </tr>';
        $i++;
        }
}
?>
    </table>
</div>