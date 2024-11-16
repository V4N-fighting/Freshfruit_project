<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../assets/icon/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
</head>
<body>  
    <div class="main" style="background-color: #f4f7ff;">
        <div class="sidebar" style="width: 260px;height: 100%;background-color: #2c2e3e; position: fixed; top:0; left: 0;">
            <div class="sidebar__content">
                <a href="" class="sidebar__header">
                    <img class="sidebar__header-logo" src="../assets/image/freshfruits-logo.png" alt="">
                    <div class="sidebar__header-logo-text">FRESHFRUITS</div>
                </a>

                <div class="sidebar__list">
                    <a href="./index.html" class="sidebar__list-items list-items-select"><i class="fa-solid fa-chart-area"></i>Dashboard</a>
                    <a href="#" class="sidebar__list-items" onclick="toggleMenu('product-menu')">
                        <i class="fa-solid fa-cart-plus"></i>
                        Quản lý sản phẩm
                        <i class="fa-solid fa-angle-down arrow-down"></i></a>
                    <div id="product-menu" class="sidebar__submenu">
                        <a href="./addProducts.html">Thêm sản phẩm</a>
                        <a href="./editProducts.html">Chỉnh sửa sản phẩm</a>
                    </div>
                
                    <a href="#" class="sidebar__list-items" onclick="toggleMenu('order-menu')"><i class="fa-solid fa-truck-fast"></i>Quản lý đơn hàng<i class="fa-solid fa-angle-down arrow-down"></i></a>
                    <div id="order-menu" class="sidebar__submenu">
                        <a href="./order.html">Đơn hàng chờ xử lý</a>
                        <a href="#">Đơn hàng đang vận chuyển</a>
                        <a href="#">Đơn hàng đã giao</a>
                        <a href="#">Đơn hàng bị hủy</a>
                    </div>
                
                    <a href="#" class="sidebar__list-items" onclick="toggleMenu('blog-menu')"><i class="fa-regular fa-newspaper"></i>Quản lý Blog<i class="fa-solid fa-angle-down arrow-down"></i></a>
                    <div id="blog-menu" class="sidebar__submenu">
                        <a href="">Thêm Blog mới</a>
                        <a href="#">Chỉnh sửa Blog</a>
                    </div>

                    <a href="" class="sidebar__list-items"><i class="fa-solid fa-gear"></i>Setting</a>

                    <a href="index.php?act=thoat" class="sidebar__list-items"><i class="fa-solid fa-gear"></i>Thoát</a>

                </div>
                

            </div>
        </div>