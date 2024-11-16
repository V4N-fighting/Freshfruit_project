<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshfruits</title>
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Rajdhani:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- framework -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.6.0-web/css/all.min.css">

    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    
</head>
<body>
    <!-- Header -->
    <div class="header grid">
        <div class="grid wide header__container ">
            <a href="index.php" class="header__logo">
                <img class="header__logo-img" src="./assets/image/freshfruits-logo.png" alt="">
                <div class="header__logo-text">FRESHFRUITS</div>
            </a>
    
            <div class="header__main">
                <div class="header__navbar">
                    <div class="header__navbar-items">
                        <?php

                            // Lấy giá trị của tham số 'act' từ URL, mặc định là 'home' nếu không có act
                            $currentAct = isset($_GET['act']) ? $_GET['act'] : 'home';

                            // Nếu URL không chứa tham số 'act', chuyển hướng về index.php?act=home
                            if (!isset($_GET['act'])) {
                                header("Location: index.php?act=home");
                                exit();
                            }

                            // Duyệt qua mảng và tạo các thẻ <a>
                            foreach ($kq as $nav) {
                                if($nav['act']!='login'&&$nav['act']!='register') {
                                    // Kiểm tra act của item hiện tại có trùng với act trong URL không
                                $isSelected = ($nav['act'] === $currentAct) ? " header__navbar-items-link--select" : "";

                                // In thẻ <a>
                                echo '<a href="index.php?act='.$nav['act'].'" class="header__navbar-items-link' . $isSelected . '">' . $nav['tennav'] . '</a>' . PHP_EOL;
                                }
                            }
                        ?>
                    </div>
                </div>
    
                <div class="header__actions">
                    <button class="header__button button primary-button">LIÊN HỆ</button>
                    <di class="header__actions-container">
                        <div class="relative">
                            <div class="header__actions-container-search">
                                <a class="header__actions-container-search-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                
                            </div>
                            <div class="search-box">
                                <div class="search-box-content">
                                    <input class="search-input" type="text" placeholder="Enter your name">
                                    <div class="search-input-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="header__actions-container-user relative">
                            <?php 
                                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                                    $avatar = isset($_SESSION['avt']) ? $_SESSION['avt'] : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS21hCpSpdSFjSI-co4SOjL_hYjY9dshZrioQ&s'; // Đường dẫn ảnh mặc định
                                    echo '<img style="width: 40px; height: 40px; border-radius: 99px" src="' . htmlspecialchars($avatar) . '" alt="User Avatar">';
                                } else {
                            ?>
                            <a class="header__actions-container-search-link" href=""><i class="fa-solid fa-user"></i></a>
                            <?php }?>
                            <div class="header__actions-user-list">
                                <?php 
                                    if (isset($_SESSION['user'])&&($_SESSION['user']!="")) {
                                        echo' <a href="index.php?act=profile" class="header__actions-user-items">My profile</a>';
                                        echo' <a href="index.php?act=wishlist" class="header__actions-user-items">Wishlist</a>';
                                        echo' <a href="index.php?act=signout" class="header__actions-user-items">Đăng xuất</a>';
                                    } else {
                                ?>
                            
                                    <a href="index.php?act=login" class="header__actions-user-items">Sign in</a>
                                    <a href="index.php?act=register" class="header__actions-user-items">Register</a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="header__actions-container-cart">
                            <a class="header__actions-container-search-link" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>

                        <div class="model__cart">
                            <div class="model__cart-view">
                                <div class="model__cart-header border-bottom">
                                    <div class="model__cart-heading">Cart</div>
                                    <a href="" class="model__cart-close"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                                <div class="model__cart-scroll">
                                    <div class="model__cart-items">
                                        <button class="model__cart-items-close"><i class="fa-solid fa-xmark"></i></button>
                                        <div class="model__cart-items-img">
                                            <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/nav/nav00089/y/12.jpg" alt="">
                                        </div>
                                        <div class="model__cart-items-text">
                                            <div class="model__cart-items-title">Organic Golden Berries (227g)</div>
                                            <div class="model__cart-items-sprice">1 x $9.30</div>
                                        </div>
                                    </div>
                                    <div class="model__cart-items">
                                        <button class="model__cart-items-close"><i class="fa-solid fa-xmark"></i></button>
                                        <div class="model__cart-items-img">
                                            <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/products%2Fdrink%2Fdrink2.webp?alt=media&token=893e0261-7cb1-412b-be4b-6b8023c9f9a0" alt="">
                                        </div>
                                        <div class="model__cart-items-text">
                                            <div class="model__cart-items-title">Johnnie Walker Blue Label Ghost and Rare Port Dundas Scotch Whisky 70cl</div>
                                            <div class="model__cart-items-sprice">1 x $8.00</div>
                                        </div>
                                    </div>
                                    <div class="model__cart-items">
                                        <button class="model__cart-items-close"><i class="fa-solid fa-xmark"></i></button>
                                        <div class="model__cart-items-img">
                                            <img src="https://cdn.shopify.com/s/files/1/0466/3882/5624/products/TheOriginal-900900whitebakground_edited_1000x.jpg?v=1637149030" alt="">
                                        </div>
                                        <div class="model__cart-items-text">
                                            <div class="model__cart-items-title">Forged In Wakefield - The Original Gin 37.5% Abv 70cl</div>
                                            <div class="model__cart-items-sprice">1 x $3.00</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="model__cart-total">
                                    <span class="model__cart-total-text">Subtotal:</span>
                                    <span class="model__cart-total-spice">$20.30</span>
                                </div>

                                <div class="model__cart-button">
                                    <button class="model__cart-button-main button primary-button">VIEW CARD</button>
                                    <button class="model__cart-button-main button">CHECKOUT</button>
                                </div>
                                <div class="model__cart-notify"><i class="fa-solid fa-truck" style="color: var(--primary-color); margin-right: 12px;"></i>Free shipping on All Orders Over $100!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->
        <div class="banner">
            
            <div class="splide" id="image-slide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1535228482415-b728d6e690c4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NjkwNTE0Mg&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080" alt="" class="splide__slide-image">
                            <div class="banner__text c-4">
                                <div class="banner__text-supertitle">100% Sản phẩm chính hãng</div>
                                <div class="banner__text-title">Ngon & Tốt Cho<br>Sức Khỏe</div>
                                <div class="banner__text-description">Khi mua sắm và chế biến trái cây, rau củ, hãy chú ý đa dạng hóa để đảm bảo cung cấp đủ dinh dưỡng và hấp dẫn.</div>
                                <a class=" button__hover--effect"><span>KHÁM PHÁ NGAY</span></a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/slideHeader.jpg?alt=media&token=d897daf6-1dd8-47d9-98f7-28d6d1b63695" alt="" class="splide__slide-image">
                            <div class="banner__text-left c-4">
                                <div class="banner__text-supertitle">100% Sản phẩm chính hãng</div>
                                <div class="banner__text-title">Ngon & Tốt Cho<br>Sức Khỏe</div>
                                <div class="banner__text-description-left">Nên ăn ít nhất 5 phần trái cây và rau mỗi ngày bao gồm trái cây và rau tươi, đông lạnh, khô và đóng hộp, cũng như sinh tố và nước ép trái cây 100%.</div>
                                <a class=" button__hover--effect"><span>KHÁM PHÁ NGAY</span></a>

                            </div>
                        </li>
                        <li class="splide__slide">
                            <img src="https://images.unsplash.com/photo-1514361892635-6b07e31e75f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" class="splide__slide-image">
                            <div class="banner__text c-4">
                                <div class="banner__text-supertitle">100% Sản phẩm chính hãng</div>
                                <div class="banner__text-title">Ngon & Tốt Cho<br>Sức Khỏe</div>
                                <div class="banner__text-description">Chúng tôi sản xuất rau, thảo mộc, trứng, trái cây và thịt lợn thuần chủng chất lượng cao, được chứng nhận hữu cơ với giá cả cạnh tranh.</div>
                                <a class="button__hover--effect  "><span>KHÁM PHÁ NGAY</span></a>
                            </div>  
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>