<?php
    include 'inc/header.php';
?>

<?php include 'classes/article.php'; 
    include_once('helper/format.php');
    $article = new Article();
    $fm = new Format();
	$list_article = $article->show_article();
?> 

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php
                while($row = $list_article->fetch_assoc()){
                    echo '
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="img/article/'.$row["image"].'"></div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt="">'.$fm->formatDate($row["datetime"]).'</span>
                                <h5>'.$row["title"].'</h5>
                                <a href="blog-details.php?id='.$row["id"].'">Read More</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<?php
    include 'inc/footer.php';
?>