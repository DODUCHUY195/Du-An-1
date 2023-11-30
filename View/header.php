<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/travelin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 10:27:40 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đặt Xe Khách Đi Nào</title>


    <link rel="shortcut icon" type="image/x-icon" href="view/images/favicon.png">

    <link href="view/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="view/css/style.css" rel="stylesheet" type="text/css">

    <link href="view/css/plugin.css" rel="stylesheet" type="text/css">

    <link href="view/css/stylect.css" rel="stylesheet" type="text/css">

    <link href="view/css/stylechitiet.css" rel="stylesheet" type="text/css">

    <link href="view/css/stylecc.css" rel="stylesheet" type="text/css">

    <link href="view/css/stylentt.css" rel="stylesheet" type="text/css">

    <link href="view/css/stylett.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet"
        href="view/../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="view/fonts/line-icons.css" type="text/css">

    <link rel="stylesheet" href="view/css/styleheader.css">
</head>


<body>



    <header>

        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php?act=trangchu">

                                <img class="anh" src="View/images/logoo.png" alt="image">
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">


                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li><a href="index.php?act=trangchu" class="dropdown-toggle">Trang Chủ</a></li>

                                <li class="dropdown submenu active">
                                    <a href="index.php" class="dropdown-toggle">Xe </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Xe Giường Nằm</a></li>
                                        <li><a href="#">Xe Limousine</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown submenu active">
                                    <a href="index.php?act=chitietve" class="dropdown-toggle">Loại Vé <i></i></a>

                                    <ul class="dropdown-menu">
                                        <?php
                                            foreach($dsve as $dm){
                                                echo '<li><a href="index.php?act=chitietve&id='.$dm['id'].'">'.$dm['name'].'</a></li>';
                                            }
                                        ?>
                                        <!-- <li><a href="#">a</a></li>
                                        <li><a href="#">b</a></li> -->
                                    </ul>

                                </li>

                                <li><a href="#" class="dropdown-toggle">Tra Cứu Vé</a></li>

                                <li><a href="#" class="dropdown-toggle">Đơn Hàng Của Tôi</a></li>

                                <li><a href="index.php?act=about" class="dropdown-toggle">Về Chúng Tôi</a></li>

                                <li><a href="index.php?act=contact" class="dropdown-toggle">Liên Hệ</a></li>



                        </div>

                    </div>
                </div>
            </nav>
        </div>

    </header>