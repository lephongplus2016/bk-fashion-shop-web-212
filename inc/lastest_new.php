<?php include_once('classes/article.php'); 
    $article = new Article();
	$list_article = $article->show_article();
?> 
 <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin tức mới</span>
                        <h2>XU HƯỚNG THỜI TRANG</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                for($i = 0; $i < 3; $i++){
                    if($row = $list_article->fetch_assoc()){
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/article/'.$row["image"].'"></div>
                                <div class="blog__item__text">
                                    <span><img src="img/icon/calendar.png" alt="">'.$fm->formatDate1($row["datetime"]).'</span>
                                    <h5>'.$row["title"].'</h5>
                                    <a href="blog-details.php?id='.$row["id"].'">Read More</a>
                                </div>
                            </div>
                        </div>';
                    }
                    else break;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->