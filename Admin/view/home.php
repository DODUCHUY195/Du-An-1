<div class="container mt-3">
    <h2>Danh sách vé xe</h2>
    <a href="indexController.php?act=add"><button class="btn btn-success mt-3">Thêm</button></a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Loại Vé</th>
                <th>Giá</th>
                <th>Hoạt Động</th>
            </tr>
        </thead>
        <tbody>
            <?php
    foreach ($listDS as $sp) {
        echo '<tr>
                <td class="col-1">'.$sp['id'].'</td>
                <td>'.$sp['name'].'</td>
                <td class="col-2"><img src="view/images/'.$sp['image'].'" alt="Err" width="100px"></td>
                <td class="col-3">'.$sp['danhmuc'].'</td>
                <td>'.$sp['gia'].'</td>
                <td class="col-2"><a href="indexController.php?act=update&id='.$sp['id'].'"><button class="btn btn-warning">Cập Nhật</button></a> |
                    <a href="indexController.php?act=delete&id='.$sp['id'].'"><button class="btn btn-danger">Xóa</button></a></td>
            </tr>';
    }
    ?>
        </tbody>
    </table>
</div>