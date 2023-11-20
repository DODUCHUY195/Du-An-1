<div class="container mt-3">
    <h2>Thêm Mới</h2>
    <form action="indexController.php?act=add" method="POST" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập Tên" name="name">
            <p class="custom-paragraph"><?= $nameErr?></p>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Uploads Ảnh</label>
            <input class="form-control" type="file" id="formFile" name="file">
            <p class="custom-paragraph"><?= $imageErr?></p>
        </div>

        <div class="mb-3">
            <label for="sel1" class="form-label">Loại Vé</label>
            <select class="form-select" id="sel1" name="category">
                <?php
            foreach($listCG as $dm){
              echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
            }
          ?>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label for="gia">Giá</label>
            <input class="form-control" type="text" id="gia" placeholder="Nhập giá" name="gia">
            <p class="custom-paragraph"><?= $priceErr?></p>
        </div>

        <div class="mb-3 mt-3">
            <label for="trangthai">Trạng Thái</label>
            <input class="form-control" type="text" id="trangthai" placeholder="Nhập trạng thái" name="trangthai">
            <p class="custom-paragraph"><?= $statusErr?></p>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Hoàn Tất</button>
    </form>
</div>