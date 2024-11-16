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
    <link rel="stylesheet" href="./assets/css/profile.css">

    
</head>
<body>
    <!-- Header -->
    <div class="header grid">
        <div class="header__banner">
            <div class="grid wide header__container ">
                <a href="" class="header__logo">
                    <img class="header__logo-img" src="./assets/image/freshfruits-logo.png" alt="">
                    <div class="header__logo-text">FRESHFRUITS</div>
                </a>
        
                <div class="header__main">
                    <div class="header__navbar">
                        <div class="header__navbar-items">
                            <a href="/#" class="header__navbar-items-link">Trang Chủ</a>
                            <a href="./about.html" class="header__navbar-items-link">Giới Thiệu</a>
                            <a href="./shop.html" class="header__navbar-items-link">Sản Phẩm</a>
                            <a href="./contact.html" class="header__navbar-items-link">Liên Hệ</a>
                            <a href="./blog.html" class="header__navbar-items-link">Tin Tức</a>
                        </div>
                    </div>
        
                    <div class="header__actions">
                        <button class="header__button button primary-button">LIÊN HỆ</button>
                        <div class="header__actions-container">
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
                                <a class="header__actions-container-search-link" href=""><i class="fa-solid fa-user"></i></a>
                                <div class="header__actions-user-list">
                                    <a href="./login.html" class="header__actions-user-items">Sign in</a>
                                    <a href="./register.html" class="header__actions-user-items">Register</a>
                                    <a href="./profile.html" class="header__actions-user-items">My Account</a>
                                    <a href="./wishlist.html" class="header__actions-user-items">Wishlist</a>
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
            <div class="header__banner-text grid wide">
                <div class="header__title">
                    <div class="header__title-caption">Welcome to our company</div>
                    <div class="header__title-main">My Acount</div>
                </div>
                <div class="header__path">
                    <div class="header__path-text border-right">Home</div>
                    <div class="header__path-text">My Acount</div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- contain -->
    <div class="contain">
        <div class="contain__main">
            <div class="contain__heading border-bottom">
                <div class="contain__heading-text">My account</div>
                <button class="contain__heading-button button primary-button">Sign out</button>
            </div>
            <div class="contain__container">
                <div class="contain__sidebar grid-col-4">
                    <div class="contain__sidebar-info">
                        <div class="contain__sidebar-avatar">
                            <img class="contain__sidebar-img" src="https://scontent.fsgn7-2.fna.fbcdn.net/v/t39.30808-6/438222889_968006034915022_1112029426357748081_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=Fc-_Y4FDhBIQ7kNvgENyAWB&_nc_zt=23&_nc_ht=scontent.fsgn7-2.fna&_nc_gid=AGGMSVOw-8b2FsPir972k6a&oh=00_AYBMHuyYjl9DT34ykraTsSpIjX7JjY2_UG0hhQ0-pn8RJg&oe=673A6E97" alt="">
                            <div class="contain__sidebar-avtar-edit"><i class="fa-solid fa-camera"></i></div>
                        </div>
                        <div class="contain__sidebar-name">Chế Nhật Tân</div>
                        <div class="contian__sidebar-email">chenhattan280504@gmail.com</div>
                    </div>

                    <ul class="contain__sidebar-list">
                        <li><a href="" class="contain__sidebar-items items-select">Personal information</a></li>
                        <li><a href="" class="contain__sidebar-items">Billing & Payments</a></li>
                        <li><a href="" class="contain__sidebar-items">Order History</a></li>
                        <li><a href="" class="contain__sidebar-items">Gift Cards</a></li>
                    </ul>

                </div>
                <div class="contain__content grid-col-8">
                    <div class="contain__content-text">
                        <div class="contain__content-heading">Personal information</div>
                        <div class="contain__content-description">Manage your personal information, including phone numers and email adress where you can be contacted</div>
                    </div>
                    <div class="contain__content-userinfo">
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Name</div>
                            <div class="contain__content-userinfo-sub">Chế Nhật Tân</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-circle-user"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Date of Birth</div>
                            <div class="contain__content-userinfo-sub">28 May 2004</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-regular fa-calendar-days"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Country Region</div>
                            <div class="contain__content-userinfo-sub">TP.Ho Chi Minh, Viet Nam</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-globe"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Languange</div>
                            <div class="contain__content-userinfo-sub">Vietnamese</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-brands fa-angular"></i></div>
                        </div>
                        <div class="contain__content-userinfo-items">
                            <div class="contain__content-userinfo-title">Contactable at</div>
                            <div class="contain__content-userinfo-sub">chenhattan280504@gmail.com</div>
                            <div class="contain__content-userinfo-icon"><i class="fa-solid fa-envelope"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <!-- footer-contain -->
        <div class="footer__contain">
            <div class="grid">
                <div class="row">
                    <div class="col l-3">
                        <img src="./assets/image/freshfruits-logo.png" alt="" class="footer__logo">
                        <p class="footer__descr">Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</p>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item--link">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span style="margin-left: 10px;">London, United Kingdom</span>
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <span style="margin-left: 10px;">+0123-456789</span>
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span style="margin-left: 10px;">example@gmailm</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2">
                        <div class="footer__item--title">Company</div>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item--link">About</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Blog</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Locations Map</a>
                            </li>   
                        </ul>
                    </div>
                    
                    <div class="col l-2">
                        <div class="footer__item--title">Services</div>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Order tracking</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Promotional Offers</a>
                            </li>  
                        </ul>
                    </div>
                    <div class="col l-2">
                        <div class="footer__item--title">Customer Care</div>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Sign in</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Register</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item--link">My Account</a>
                            </li>   
                            <li class="footer__item">
                                <a href="" class="footer__item--link">Wishlist</a>
                            </li>  
                        </ul>
                    </div>
                    <div class="col l-3">
                        <div class="footer__item--title">newsletter</div>
                        <p class="footer__descr">Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="email-form">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="footer__copyright">
            <div class="copyright--left">
                <p class="copyright--text">All Rights Reserved @ Company 2023</p.co>
            </div>
            <div class="copyright--right">
                <p class="copyright--text">Terms & Conditions</p>
                <p class="copyright--text">Claim</p>
                <p class="copyright--text">Privacy & Policy</p>
            </div>
        </div>

        <!-- footer rise -->
        <div class="footer__rise">
            <div class="grid">
                <div class="row">
                    <div class="col l-3 footer__border-right--item">
                        <div class="footer__rise--item">
                            <div class="rise__item--img">
                                <img src="./assets/image/footer-img/rise-item-1.png" alt="image">
                            </div>
                            <div class="rise__item--content">
                                <div class="rise__item--title">Curated Products</div>
                                <p class="rise__item--descr">Provide Curated Products for all product over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 footer__border-right--item">
                        <div class="footer__rise--item">
                            <div class="rise__item--img">
                                <img src="./assets/image/footer-img/rise-item-2.png" alt="image">
                            </div>
                            <div class="rise__item--content">
                                <div class="rise__item--title">Handmade</div>
                                <p class="rise__item--descr">We ensure the product quality that is our main goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 footer__border-right--item">
                        <div class="footer__rise--item">
                            <div class="rise__item--img">
                                <img src="./assets/image/footer-img/rise-item-3.png" alt="image">
                            </div>
                            <div class="rise__item--content">
                                <div class="rise__item--title">Natural Food</div>
                                <p class="rise__item--descr">Return product within 3 days for any product you buy

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 footer__border-right--item">
                        <div class="footer__rise--item">
                            <div class="rise__item--img">
                                <img src="./assets/image/footer-img/rise-item-4.png" alt="image">
                            </div>
                            <div class="rise__item--content">
                                <div class="rise__item--title">Free home delivery</div>
                                <p class="rise__item--descr">We ensure the product quality that you can trust easily</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>

    <!-- addCard-->
    <button id="addCard" ><i class="fa-solid fa-cart-shopping"></i></button>

    <!-- scroll-to-top -->
    <button id="scrollTopBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

    <script src="./assets/js/onClick.js"></script>
    <script src="./assets/js/onClick.js"></script>
    <script src="./assets/js/scrollToTop.js"></script>
    <script src="./assets/js/scrollToShowButton.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</body>
</html>