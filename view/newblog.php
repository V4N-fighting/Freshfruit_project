<div class="contain grid wide">
        <div class="avatar"></div>
        <div class="content">
            <?php 
                echo'
                    <div class="title">'.$curblog[0]['tieude'].'</div>
                    <div class="sourse">
                        <span class="time">'.$curblog[0]['created_at'].'</span>
                        <span class="space">-</span>
                        <span>Bởi<span class="author">'.$curblog[0]['tacgia'].'</span></span>
                    </div>
                    <p class="desc">'.$curblog[0]['noidung'].'</p>
                '
            ?>
            
        
        </div>
        <div class="blogs ">
            <div class="blogs-content">
                <div class="blog__title">Các bài viết khác</div>
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