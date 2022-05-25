<?php
    include 'inc/include_header.php';
?>

<?php include 'classes/article.php'; 
    $article = new Article();
    $fm = new Format();
	$list_article = $article->show_article_by_pagination();

    $title = "Blog"; 
?> 

<?php
    include 'inc/header.php';
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
                if($list_article){
                    while($row = $list_article->fetch_assoc()){
                        $b_title = vn_to_str($row["title"]);
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/article/'.$row["image"].'"></div>
                                <div class="blog__item__text">
                                    <span><img src="img/icon/calendar.png" alt="">'.$fm->formatDate($row["datetime"]).'</span>
                                    <h5>'.$row["title"].'</h5>
                                    <a href="'.$b_title.'-'.$row["id"].'">Read More</a>
                                </div>
                            </div>
                        </div>';
                    }   ?>          
                    
                    </div> <!-- pagination -->                   
                    <div class="row">
                        <?php
                                    $number_of_product_per_page = 6;
                                    if(!isset($_GET['page'])){
                                        $page = 1;
                                    }else{
                                        $page = $_GET['page'];
                                    }

                                    //this line is to find product that match category
                                    $product_all = $article->show_article();
                                    if($product_all){
                                        $num_of_product = mysqli_num_rows($product_all);
                                        $num_of_page = ceil($num_of_product/$number_of_product_per_page);
                                        $index_page_show = ($page-1)*$number_of_product_per_page +1;
                                    }

                                ?>
                        <div class="col-lg-6">
                            <!-- phần thống kê hiển thị sản phẩm -->
                            <p>Hiển thị <?php echo $index_page_show."-".($index_page_show+$number_of_product_per_page-1); ?> trong tổng số <?php echo  $num_of_product; ?> kết quả</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="product__pagination">
                                <!-- trang trước -->
                                <a href="blog-page-<?php if($page>1) {echo $page-1;}  else {echo $page;}?>" ><</a>
                                <?php
                                    // số trang hiển thị ra màn hình tối đa hiện tại là 3
                                    $start = $page> 1? $page -1: $page;
                                    $end = $page < $num_of_page? $page +1: $num_of_page;
                                    for($i=$start;$i<=$end;$i++){
                                        ?>
                                        <a <?php if($i == $page) { echo 'class="active"';} ?> href="blog-page-<?php echo $i ?>"><?php echo $i ?></a>
                                    <?php
                                    }
                                ?>
                                <!-- trang sau -->
                                <a href="blog-page-<?php if($page<$num_of_page) {echo $page+1;}  else {echo $num_of_page;}?>" >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
               <!-- End pagination -->
                    
                    
                    
                    
       <?php             
                }   
                
                ?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<?php
    include 'inc/footer.php';
?>