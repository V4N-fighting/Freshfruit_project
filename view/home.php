
<div class="contain">

        <!-- discount -->
        <div class="discount">
            <div class="grid">
                <div class="discount__container grid wide">
                    <div class="discount__container-scene bg-orange">
                        <div class="discount__container-main">
                            <div class="discount__container-text">
                                <div class="discount__container-text-suppertitle">HOT SALES</div>
                                <div class="discount__container-text-title">Big Sale</div>
                                <div class="discount__container-text-description">Mango & Juci</div>
                                <button class="discount__container-btn button">
                                    Buy Now
                                    <svg style="margin-left: 8px;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></g></svg>
                                </button>
                            </div>
                            <div class="discount__container-img">
                                <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/promotion%2Forange.png?alt=media&token=f32b8380-bf79-4af8-9b01-717692fcb300" alt="" class="discount__container-img-icon">
                            </div>
                        </div>
                    </div>


                    <div class="discount__container-scene bg-d-green">
                        <div class="discount__container-main">
                            <div class="discount__container-text">
                                <div class="discount__container-text-suppertitle">HOT SALES</div>
                                <div class="discount__container-text-title">Save 20%</div>
                                <div class="discount__container-text-description">Every Order</div>
                                <button class="discount__container-btn button">
                                    Buy Now
                                    <svg style="margin-left: 8px;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></g></svg>
                                </button>
                            </div>
                            <div class="discount__container-img">
                                <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/promotion%2Fpomelo.png?alt=media&token=6c2c2123-1905-435b-acbd-00ccb9f8eeea" alt="" class="discount__container-img-icon">
                            </div>
                        </div>
                    </div>


                    <div class="discount__container-scene bg-orange">
                        <div class="discount__container-main">
                            <div class="discount__container-text">
                                <div class="discount__container-text-suppertitle">HOT SALES</div>
                                <div class="discount__container-text-title">Big Sale</div>
                                <div class="discount__container-text-description">Pineapple</div>
                                <button class="discount__container-btn button">
                                    Buy Now
                                    <svg style="margin-left: 8px;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></g></svg>
                                </button>
                            </div>
                            <div class="discount__container-img">
                                <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/promotion%2Fpineapple.png?alt=media&token=4785124f-7691-4c98-b0f5-b3a3b3e56dee" alt="" class="discount__container-img-icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product -->
        <div class="products grid wide">
            <div class="element--title">Our Products <a href="index.php?act=shop" class="view__all--btn">View all</a></div>
            <div class="products__navbar">
                <ul class="products__navbar-items">
                <?php 
                    foreach ($allcategory as $category) {
                        echo '<li class="products__navbar-items-link"><a href="index.php?act=filterCate&idCategory=' . $category['idCategory'] . '">' . $category['tenloaisp'] . '</a></li>';
                    }
                ?>

                </ul>
            </div>
            <div class="products__container grid">
                <div class="row mg-left-6 ">
                    <?php 
                        // Kiểm tra nếu idCategory được gửi qua URL
                        $selectedCategory = isset($_GET['idCategory']) ? $_GET['idCategory'] : null;

                        // Nếu có idCategory, lọc danh sách sản phẩm
                        if ($selectedCategory) {
                            $filteredProducts = array_filter($allsp, function($sp) use ($selectedCategory) {
                                return $sp['idCategory'] == $selectedCategory;
                            });
                        } else {
                            // Nếu không chọn danh mục, hiển thị tất cả sản phẩm
                            $filteredProducts = $allsp;
                        }
                        foreach ($filteredProducts as $sp) {
                            echo '<div class="products__container-scene col c-3">
                                <div class="products__container-items">
                                    <a href="" class="products__container-items-link">
                                        <img src="' . $sp['img1'] . '" alt="" class="products__container-items-img">
                                        <span class="products__container-items-label">' . $sp['nhandan'] . '</span>
                                        <div class="products__container-items-icon">
                                            <button class="products__btn">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                            <button class="products__btn">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                            <button class="products__btn">
                                                <i class="fa-solid fa-heart"></i>
                                            </button>
                                        </div>
                                    </a>
                                    <div class="products__container-items-info">
                                        <div class="products__container-items-rating">';
                                            for ($i = 0; $i < floor($sp['danhgia']); $i++) {
                                                echo '<span><i class="fa-solid fa-star"></i></span>';
                                            }
                                            if ($sp['danhgia'] > floor($sp['danhgia'])) {
                                                echo '<span><i class="fa-solid fa-star-half"></i></span>';
                                            }
                                            echo '<span class="products__container-items-quantily">(' . $sp['soluong'] . ')</span>
                                        </div>
                                        <div class="products__container-items-title">
                                            <a href="" class="products__container-items-title-link">' . $sp['tensp'] . '</a>
                                        </div>
                                        <div class="products__container-items-sprices">
                                            <div class="products__container-items-sprices-new">' . $sp['gia'] . '</div>
                                            <div class="products__container-items-sprices-old">' . $sp['gia'] . '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
            <a href="./shop.html" class="view__all--btn">View all</a>
        </div>
        

        


        <!-- deal -->
        <div class="deal">
            <div class="deal__wrapper">
                <div class="grid">
                    <div class="row">
                        <div class="col l-5">
                            <div class="deal__product">
                                <img class="deal__propduct--image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/countdown%2Fhoney_jar.png?alt=media&token=d72546a1-8ba2-476b-9670-ffd983c15b89" alt="image" >
                            </div>
                        </div>
                        <div class="col l-7">
                            <div class="deal__content">
                                <div class="deal__subtitle">Todays Hot Deals</div>
                                <div class="deal__title">Original Stock Honey Combo Package</div>
                                <div class="deal__countdown">
                                    <div class="deal__time">
                                        <span id="deal_days">00</span>
                                        <p>DAYS</p>
                                    </div>
                                    <div class="deal__time">
                                        <span id="deal_hours">00</span>
                                        <p>HRS</p>
                                    </div>
                                    <div class="deal__time">
                                        <span id="deal_minutes">00</span>
                                        <p>MINS</p>
                                    </div>
                                    <div class="deal__time">
                                        <span id="deal_seconds">00</span>
                                        <p>SECS</p>
                                    </div>
                                </div>
                                <a href="index.php?act=shop" class="button__hover--effect  "><span>KHÁM PHÁ NGAY</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- invesment -->
        <div class="invesment">
            <div class="invesment__wrapper">
                <div class="invesment__suptitle">portpolio</div>
                <div class="element--title">We Have Done</div>
                <div class="invesment__content">
                    <section class="splide" id="invesment" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                              <ul class="splide__list">
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                                  <li class="splide__slide col l-2-5">
                                    <div class="invesment__item">
                                        <img class="invesment__image" src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/portfolio%2Fgarden1.webp?alt=media&token=0706b489-93eb-4951-80d7-3e08dd1c1dd6" alt="image" >
                                    </div>
                                  </li>
                              </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        
        <!-- blogs -->
        <div class="blogs ">
            <div class="element--title">Lastest Blog <a href="index.php?act=blog" class="view__all--btn">View all</a></div>
            <div class="blogs-content">
                <section class="splide" id="blog" aria-label="Ví dụ HTML cơ bản của Splide">
                    <div class="splide__track padding-t-b-10">
                            <ul class="splide__list">
                                <?php 
                                    foreach ($allblog as $blog) {
                                        echo '
                                        <li class="splide__slide col l-4">
                                            <div class="card">
                                                <a  href="index.php?act=new_blog&id='.$blog['idBlog'].'" class="card__link">
                                                    <div class="card__image">
                                                        <img src="'.$blog['img'].'" alt="'.$blog['tieude'].'">
                                                    </div>
                                                </a>
                                                <div class="card__content">
                                                    <div class="tags">';
                                                    foreach ($allblogtype as $blogtype) {
                                                        if ($blogtype['idBlogtype']==$blog['idBlogtype']) {
                                                            echo '<span class="tag">'.$blogtype['tenloaiblog'].'</span>';
                                                        }
                                                    }
                                                    echo ' 
                                                        
                                                    </div>
                                                         
                                                    <a href="#" class="card__title">'.$blog['tieude'].'</a>
                                                    <p class="card__text">'.$blog['noidung'].'</p>
                                            
                                                    <div class="card__footer">
                                                        <span class="author"><i class="fa-solid fa-user-pen"></i> by '.$blog['tacgia'].'</span>
                                                        <span class="date"><i class="fa-regular fa-calendar-days"></i>'.$blog['created_at'].'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>  ';
                                    }
                                ?>

                            </ul>
                    </div>
                </section>
            </div>
            
        </div>
    </div>