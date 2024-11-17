<?php
    $sd = 4;
    $code = @mysqli_connect("localhost", "root", "") or die("Kết nối thất bại");
        mysqli_select_db($code, "webtraicay_db") or die("Db không tồn tại");

    // Thực hiện truy vấn lấy tất cả sản phẩm:
    $sl = "select * from blog";
    $kq = mysqli_query($code, $sl);
    $tsp = mysqli_num_rows($kq);

    // Tổng số trang:
    $tst = ceil($tsp / $sd);

    // Tính trang hiện hành:
    if (isset($_GET['page'])) $page = $_GET['page']; else $page = 1;

    // Tính vị trí lấy sản phẩm theo page:
    $vt = ($page - 1) * $sd;

    // Truy vấn lấy sản phẩm theo vị trí:
    $sl2 = "select * from blog limit $vt, $sd";
    $kq2 = mysqli_query($code, $sl2);

?>
<div class="contain">
        <div class="contain__main">
            <div class="contain__container">   
                <!-- Khối thứ 1 chiếm 66,6667% -->
                 <div class="contain__blog  grid-col-8">
                    <div class="contain__items">
                        <!-- Khối con 1 chiếm 50% của khối thứ hai -->
                        <?php
                            $i = 1;
                            while ($d2 = mysqli_fetch_array($kq2)) {
                                
                        ?>
                        
                        <?php 
                        echo'<div class="contain__card">
                                        <a  href="index.php?act=new_blog&id='.$d2['idBlog'].'" class="contain__card-link">
                                            <div class="contain__card-image">
                                                <img src="'.$d2['img'].'" alt="'.$d2['tieude'].'">
                                            </div>
                                        </a>
                                        <div class="contain__card-content">
                                            <div class="contain__card-tags">
                                                <span class="tag-icon"><i class="fa-solid fa-tags"></i></span>';
                                            foreach ($allblogtype as $blogtype) {
                                                if ($blogtype['idBlogtype']==$d2['idBlogtype']) {
                                                    echo '<span class="tag">'.$blogtype['tenloaiblog'].'</span>';
                                                }
                                            }
                                            echo ' 
                                                
                                            </div>
                                                    
                                            <a href="#" class="contain__card-title">'.$d2['tieude'].'</a>
                                            <p class="contain__card-text">'.$d2['noidung'].'</p>
                                    
                                            <div class="card__footer">
                                                <span class="author"><i class="fa-solid fa-user-pen"></i> by '.$d2['tacgia'].'</span>
                                                <span class="date"><i class="fa-regular fa-calendar-days"></i>'.$d2['created_at'].'</span>
                                            </div>
                                        </div>
                                    </div>';
                        ?>
                        <?php } ?>
                       
                    </div>
                    
                    <div class="pagination">
                        <button class="page-btn">Previous</button>
                        <?php for ($i = 1; $i <= $tst; $i++) {
                            if ($page == $i) {
                                echo '<button class="page-btn active"><a href="index.php?act=blog&page='.$i.'">'.$i.'</a></button>';
                            } else {
                                echo '<button class="page-btn"><a href="index.php?act=blog&page='.$i.'">'.$i.'</a></button>';
                            }
                        } ?>
                        <!-- <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button> -->
                        <button class="page-btn">Next</button>
                    </div>
                </div>
                
                <!-- Khối thứ 2 chiếm 33,333% -->
                <div class="contain__sidebar grid-col-4">
                    <div class="contain__info">
                        <span class="contain__info-heading">
                            <div class="contain__info-icon"><i class="fa-solid fa-user-tie"></i></div>
                            <div class="contain__info-text">About me</div>
                        </span>
                        <div class="contain__info-content">
                            <img src="https://tunatheme.com/tf/html/broccoli-preview/broccoli/img/team/4.jpg" alt="" class="contain__info-img">
                            <div class="contain__info-title">Rosalina D. Willaimson</div>
                            <div class="contain__info-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</div>
                            <div class="contain__info-link">
                                <a href="" class="contain__info-media"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-instagram"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="contain__info">
                        <span class="contain__info-heading">
                            <div class="contain__info-icon"><i class="fa-solid fa-bars-staggered"></i></div>
                            <div class="contain__info-text">Search Object</div>
                        </span>
                        <div class="contain__search">
                            <div class="contain__search">
                                <input class="contain__search-input" type="text" placeholder="Enter your search key...">
                                <div class="contain__search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="contain__info">
                        <span class="contain__info-heading">
                            <div class="contain__info-icon"><i class="fa-solid fa-list"></i></div>
                            <div class="contain__info-text">Categories</div>
                        </span>
                        <div class="contain__categories">
                            <button class="contain__categories-btn button">
                                <span>Vegetables</span>
                                <span class="contain__categories-btn-quanlity">10</span>
                            </button>
                            <button class="contain__categories-btn button">
                                <span>Fruits</span>
                                <span class="contain__categories-btn-quanlity">20</span>
                            </button>
                            <button class="contain__categories-btn button">
                                <span>Dairy</span>
                                <span class="contain__categories-btn-quanlity">41</span>
                            </button>
                            <button class="contain__categories-btn button">
                                <span>Meet</span>
                                <span class="contain__categories-btn-quanlity">20</span>
                            </button>
                        </div>
                    </div>
                    <div class="contain__info">
                        <span class="contain__info-heading">
                            <div class="contain__info-icon"><i class="fa-solid fa-envelopes-bulk"></i></div>
                            <div class="contain__info-text">Never Miss News</div>
                        </span>
                        <div class="contain__socalmedia">
                            <div class="contain__info-link">
                                <a href="" class="contain__info-media"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-instagram"></i></a>
                                <a href="" class="contain__info-media"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="contain__info">
                        <span class="contain__info-heading">
                            <div class="contain__info-icon"><i class="fa-solid fa-tags"></i></div>
                            <div class="contain__info-text">Popular Tags</div>
                        </span>
                        <div class="contain__tags">
                            <a href="" class="contain__tags-link">#freshfood</a>
                            <a href="" class="contain__tags-link">#healthyfood</a>
                            <a href="" class="contain__tags-link">#homemade</a>
                            <a href="" class="contain__tags-link">#supportlocal</a>
                            <a href="" class="contain__tags-link">#eatlocal</a>
                            <a href="" class="contain__tags-link">#dinner</a>
                            <a href="" class="contain__tags-link">#cooking</a>
                        </div>
                    </div>
                    
                    <div class="contain__discount-scene bg-d-green">
                        <div class="contain__discount-main">
                            <div class="contain__discount-text">
                                <div class="contain__discount-text-suppertitle">HOT SALES</div>
                                <div class="contain__discount-text-title">Save 20%</div>
                                <div class="contain__discount-text-description">Every Order</div>
                                <button class="contain__discount-btn button">
                                    Buy Now
                                    <svg style="margin-left: 8px;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></g></svg>
                                </button>
                            </div>
                            <div class="contain__discount-img">
                                <img src="https://firebasestorage.googleapis.com/v0/b/freshmeals-reactjs.appspot.com/o/promotion%2Fpomelo.png?alt=media&token=6c2c2123-1905-435b-acbd-00ccb9f8eeea" alt="" class="contain__discount-img-icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>