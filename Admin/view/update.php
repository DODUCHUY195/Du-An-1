<div class="container mt-3">
    <h2>Cập Nhật Vé Xe</h2>
    <form action="indexController.php?act=update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="oldFile" value="<?=$oldFile?>">

        <div class="mb-3 mt-3">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?=$name?>">
            <p class="custom-paragraph"><?=$nameErr?></p>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Uploads Ảnh</label>
            <input class="form-control" type="file" id="formFile" name="file">
            <img class="mt-3" src="view/images/<?=$oldFile?>" alt="" width="150px">
            <p class="custom-paragraph"><?=$imageErr?></p>
        </div>

        <div class="mb-3">
            <label for="sel1" class="form-label">Loại Vé</label>
            <select class="form-select" id="sel1" name="category">
                <?php
              foreach($listCG as $dm){
                echo '<option '.($category?($category==$dm['id']?'selected':''):'').' value="'.$dm['id'].'">'.$dm['name'].'</option>';
              }
            ?>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label for="gia">Giá</label>
            <input class="form-control" type="text" id="gia" placeholder="Nhập giá" name="gia">
            <p class="custom-paragraph"><?= $priceErr?></p>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>