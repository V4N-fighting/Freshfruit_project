<?php
    $sd = 6;
    $code = @mysqli_connect("localhost", "root", "") or die("Kết nối thất bại");
        mysqli_select_db($code, "webtraicay_db") or die("Db không tồn tại");

    // Thực hiện truy vấn lấy tất cả sản phẩm:
    $sl = "select * from product";
    $kq = mysqli_query($code, $sl);
    $tsp = mysqli_num_rows($kq);

    // Tổng số trang:
    $tst = ceil($tsp / $sd);

    // Tính trang hiện hành:
    if (isset($_GET['page'])) $page = $_GET['page']; else $page = 1;

    // Tính vị trí lấy sản phẩm theo page:
    $vt = ($page - 1) * $sd;

    // Truy vấn lấy sản phẩm theo vị trí:
    $sl2 = "select * from product limit $vt, $sd";
    $kq2 = mysqli_query($code, $sl2);

?>
<div class="contain">
        <div class="grid wide">
            <div class="row">
                <div class="col l-8">
                    <div class="content">
                        <div class="content__header">
                            <div class="content__header--title">All product</div>
                            <div class="content__header--select">
                                <select>
                                    <option>Sort By Popularity</option>
                                    <option>Sort By Price: From High to Low</option>
                                    <option>Sort By Price: From Low to High</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                $i = 1;
                                while ($d2 = mysqli_fetch_array($kq2)) {
                                    
                            ?>
                            
                            <?php 
                            echo'<div class="col l-4">
                                    <div class="products__container-items">
                                        <a href="" class="products__container-items-link">
                                            <img src="'.$d2['img1'].'" alt="" class="products__container-items-img">
                                            <span class="products__container-items-label">new</span>
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
                                                for ($i = 0; $i < floor($d2['danhgia']); $i++) {
                                                echo '<span><i class="fa-solid fa-star"></i></span>';
                                                }
                                                if ($d2['danhgia'] > floor($d2['danhgia'])) {
                                                    echo '<span><i class="fa-solid fa-star-half"></i></span>';
                                                }
                                                echo'<span class="products__container-items-quantily">'.$d2['soluong'].'</span>
                                            </div>
                                            <div class="products__container-items-title">
                                                <a href="" class="products__container-items-title-link">'.$d2['tensp'].'</a>
                                            </div>
                                            <div class="products__container-items-sprices">
                                                <div class="products__container-items-sprices-new">'.$d2['gia'].'</div>
                                                <div class="products__container-items-sprices-old">'.$d2['gia'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            ?>
                            <?php } ?>
                            
                        </div>
                            
                    </div>

                    <!-- pagination -->
                     <div class="pagination">
                        <button class="page-btn">Previous</button>
                        <?php for ($i = 1; $i <= $tst; $i++) {
                            if ($page == $i) {
                                echo '<button class="page-btn active"><a href="index.php?act=shop&page='.$i.'">'.$i.'</a></button>';
                            } else {
                                echo '<button class="page-btn"><a href="index.php?act=shop&page='.$i.'">'.$i.'</a></button>';
                            }
                        } ?>
                        <button class="page-btn">Next</button>
                    </div>
                    
                </div>
                <div class="col l-4">
                    <div class="filter">
                       <div class="filter__header">
                            <span class="filter__header--icon"><i class="fa-solid fa-filter"></i></span>
                            <span class="filter__header--title">Filter by</span>
                       </div>
                       <div class="filter__content">
                            <div class="filter__item">
                                <div class="filter__item--name">Type</div>
                                <ul class="filter__item--list">
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">melon</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">melon</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">melon</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">melon</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter__item">
                                <div class="filter__item--name">Sale program</div>
                                <ul class="filter__item--list">
                                    <li class="filter__item--item">
                                        <input type="radio" name="" id="">
                                        <label for="">sale</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="radio" name="" id="">
                                        <label for="">big sale</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="radio" name="" id="">
                                        <label for="">new</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter__item">
                                <div class="filter__item--name">Popularity</div>
                                <ul class="filter__item--list">
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">1 start & Up</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">1 start & Up</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">1 start & Up</label>
                                    </li>
                                    <li class="filter__item--item">
                                        <input type="checkbox" name="" id="">
                                        <label for="">1 start & Up</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter__item">
                                <div class="filter__item--name">Popularity</div>
                                <div class="price-values">
                                    <span id="priceFrom">From: $0</span>
                                    <span id="priceTo">To: $281</span>
                                </div>
                                <input type="range" id="priceRange" min="0" max="281" value="281" step="1" />
                            </div>
                       </div>
                       <div class="filter__footer">
                            <button class="apply__filter">Apply Filter</button>
                            <button class="clear__filter">Clear All Filter</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
     </div>