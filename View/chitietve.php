<div class="form-main">
    <div class="section-shape">
        <img class="banner" src="View/images/banner.jpg" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center form-content rounded position-relative ms-5 me-5">
            <div class="col-lg-2 p-0">
                <h4
                    class="form-title form-title1 text-center p-4 py-5 white bg-theme mb-0 rounded-start d-lg-flex align-items-center">
                    Find
                </h4>
            </div>
            <div class="col-lg-10 px-4">
                <div class="form-content-in d-lg-flex align-items-center">
                    <div class="form-group me-2">
                        <div class="input-box">

                            <p><img src="view/images/diemdi.svg" alt="">Nơi Đi</p>
                            <select class="niceSelect">
                                <option value="1">Chọn Điểm Đi</option>
                                <option value="2">Hà Nội</option>
                                <option value="3">Thanh Hóa</option>
                                <option value="4">Hòa Bình</option>
                                <option value="5">Ninh Bình</option>
                                <option value="6">Vĩnh Phúc</option>
                                <option value="7">Hà Nội</option>

                            </select>

                        </div>
                    </div>

                    <div class="form-group me-2">
                        <div class="input-box">
                            <p> <img src="view/images/diemden.svg" alt="">Nơi Đến</p>
                            <select class="niceSelect">
                                <option value="1">Chọn Điểm Đến</option>
                                <option value="2">Lai Châu</option>
                                <option value="3">Hưng Yên</option>
                                <option value="4">Nam Định</option>
                                <option value="5">Ninh Bình</option>
                                <option value="6">Sơn La</option>
                                <option value="7">Hòa Bình</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group me-2">
                        <div class="input-box">
                            <p> <img src="view/images/ngaydi.svg" alt="">Ngày Đi</p>
                            <input type="date" name="date">
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Tìm Chuyến Đi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<main class="containerrr">
    <aside class="sidebar">

        <h2>Sắp xếp</h2>

        <ul>
            <label><input type="radio" name="sx"> Gần Nhất</label>
            <label><input type="radio" name="sx"> Muộn Nhất</label>
            <label><input type="radio" name="sx"> Sớm Nhất</label>
            <!-- Thêm các loại khác nếu cần -->
        </ul>


        <h2>Giờ Đi</h2>
        <ul>
            <label><input type="submit" value="6:00 -> 10:00"> </label>
            <label><input type="submit" value="10:00 -> 16:00"> </label>
            <label><input type="submit" value="16:00 -> 22:00"> </label>
            <!-- Thêm các loại khác nếu cần -->
        </ul>
        <form action="loc.php" method="GET">
            <h2>Giá</h2>
            <input type="number" id="price" name="min_price" min="0">
            <input type="submit" value="Lọc">
        </form>

        <div class="price-range">
            <h2>Điểm Đi</h2>

            <select id="category" name="category">
                <option value="1">Hà Nội</option>
                <option value="2">Nghệ An</option>
                <option value="3">Thái Bình</option>
                <option value="4">Hà Tĩnh</option>
            </select>


            <div class="price-range">
                <h2>Điểm Đến</h2>

                <select id="category" name="category">
                    <option value="1">Thanh Hóa</option>
                    <option value="2">Hà Nội</option>
                    <option value="3">Phú Thọ</option>
                    <option value="4">Bắc Giang</option>
                </select>



    </aside>

    <section class="results">
        <!-- Kết quả sau khi lọc sẽ hiển thị ở đây -->
        <div class="item">


            <?php
            
                        foreach ($dsct  as $ct ){
                            echo '
                            
                            


                          
       <main class="containerr">

        <section class="ticket">
            <img src="'.$ct['image'].'"  width="80px" alt="">
            <div class="ticket-info">
                <h2>'.$ct['name'].'</h2>
                <p><strong></strong> 25/12/2023</p>
                <p><strong>Giờ khởi hành:</strong> 8:00 AM</p>
                <p><strong>Gia: '.$ct['gia'].'</strong> </p>
                <a href="#">Thông tin chi tiết</a>
                <a href="index.php?act=chonchuyen&id='.$ct['id'].'"><button
                type="button">Đặt vé</button></a>

        </div>
    </section>



    <!-- Thêm các section ticket khác tương tự ở đây nếu cần -->

</main>

';}
?>

        </div>
        <!-- Thêm các kết quả khác sau khi lọc -->
    </section>
</main>








<!-- <div class="4">
            <div class="">
                <div class="">

                    <h3>Bộ Lọc Tìm Kiếm</h3>
                    <span class="">
                        <a>Bỏ Lọc
                        </a>
                    </span>

                    <div class="">
                        <h5 class>Giờ Đi</h5>
                        <ul class="">
                            <li><input type="checkbox"> Sáng sớm 00:00 - 06:00 (0)
                            </li>
                            <li><input type="checkbox"> Buổi Sáng 06:00 - 12:00 (0)
                            <li><input type="checkbox"> Buổi Chiều 12:00 - 18:00 (0)
                            <li><input type="checkbox"> Buổi Tối 18:00 - 24:00 (2)
                        </ul>
                    </div>
                    <div class="">
                        <h3 class>Loại Xe</h3>
                        <ul>
                            <li class="loaixe">
                                <div>
                                    <button>Ghế</button>
                                    <button>Giường</button>
                                    <button>Limousine</button>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="">
                        <h3 class>Hàng Chế</h3>
                        <ul class="">
                            <div>
                                <button>Hàng Đầu</button>
                                <button>Hàng Giữa</button>
                                <button>Hàng Cuối</button>
                            </div>
                        </ul>
                    </div>

                    <div class="">
                        <h3 class>Tầng</h3>
                        <ul class="">
                            <div>
                                <button>Ghế</button>
                                <button>Giường</button>

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->