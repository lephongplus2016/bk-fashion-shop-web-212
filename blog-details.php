<?php
    include 'inc/include_header.php';
?>
<?php include 'classes/commentArticle.php';
$commentArticle = new commentArticle();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    // echo '<pre>'; print_r($_FILES); echo '</pre>';

    $commentArticle->insert_commentArticle($_POST, $_FILES, $_GET["id"]);
}
?>

<?php include 'classes/article.php';
    if(isset($_GET['id'])  && $_GET['id'] != NULL) {
        $id = $_GET['id'];
    }
    else{
        echo "<script>window.location ='blog.php'</script>";
    } 

    $article = new Article();
	$article_details = $article->getDetailsArticleById($id);
    if ($article_details === false){
        echo "<script>alert('Lấy dữ liệu bị lỗi. Trở lại trang trước'); window.location ='blog.php'</script>";
    }
    else {
        $data = $article_details->fetch_assoc();
    }

    // SEO section
    $title = $data["title"];
    if (trim($data["description"]) != "") $description = $data["description"];
    if (trim($data["keywords"]) != "") $keywords = $data["keywords"];
?>

<?php
    include 'inc/header.php';
?>

    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <?php
                        echo '
                        <h2>'.$data["title"].'</h2>
                        <ul>
                            <li>By '.$data["writer"].'</li>
                            <li>'.date("d-m-Y", strtotime($data["datetime"])).'</li>
                        </ul>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <?php
                        echo '<img src="img/article/'.$data["image"].'" alt="">'
                        ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <?php echo $data["content"] ?>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="img/blog/details/blog-author.jpg" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <?php
                                            echo '<h5>'.$data["writer"].'</h5>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="#">#Fashion</a>
                                        <a href="#">#Trending</a>
                                        <a href="#">#2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__btns">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <?php
                                    $article_previous = $article->getDetailsArticleById($id-1);
                                    if ($article_previous != false){
                                        $pre_art = $article_previous->fetch_assoc();
                                        $p_title = vn_to_str($pre_art["title"]);
                                    ?>
                                        <a href="blog/<?php echo $p_title.'-'.$pre_art["id"]?>" class="blog__details__btns__item">
                                            <p><span class="arrow_left"></span> Bài trước</p>
                                            <h5><?php echo $pre_art["title"];?></h5>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <?php
                                    $article_next = $article->getDetailsArticleById($id+1);
                                    if ($article_next != false){
                                        $next_art = $article_next->fetch_assoc();
                                        $n_title = vn_to_str($next_art["title"]);
                                    ?>
                                        <a href="blog/<?php echo $n_title.'-'.$next_art["id"]?>" class="blog__details__btns__item blog__details__btns__item--next">
                                            <p>Bài tiếp theo <span class="arrow_right"></span></p>
                                            <h5><?php echo $next_art["title"];?></h5>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

<script type="text/javascript">
    
    function validate_cmt()
    {
        var content = document.cmtForm.content.value;
        if (content.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.cmtForm.content.focus();
            return false;
        }

        var image = document.cmtForm.image1.value;
        if(image != '')
        {
           if (image.indexOf('.jpeg') == -1 && image.indexOf('.jpg') == -1 && image.indexOf('.png') == -1 && image.indexOf('.gif') == -1)
            {
                document.getElementById("alert2").style.display = "flex";
                document.cmtForm.image1.focus();
                return false;
            }
        }
        
        return true;
    }
    
</script>
                        
                        <div class="blog__details__comment">
                            <h4>Bình Luận</h4>
                            <form action="" method = "POST" enctype="multipart/form-data" name="cmtForm" onsubmit="return validate_cmt();">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea placeholder="Comment" id = 'content' name = 'content'></textarea>
                                        <span class="invalid-feedback" id="alert1">Vui lòng nhập nội dung</span>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <label for="image1" class="form-label">Ảnh liên quan</label>
                                    <input class="form-control" type="file" name = "image1" id="image1" accept=".jpeg, .jpg, .png, .gif">
                                    <div style="padding-top: 5px;">
                                        <img id="upload-img1" style="max-width: 50%">
                                    </div>
                                    <span class="invalid-feedback" id="alert2">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                                </div>
                                </div>
                                <div class="mb-3 text-center">
                                <?php
                                    $login_check = Session::get('user_login');
                                    if($login_check == true){
                                        echo '<button type="submit" class="site-btn" name = "submit">Gửi Bình Luận</button>';
                                    }
                                    else {
                                        echo '<button type="button" class="site-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Gửi Bình Luận
                                        </button>';
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                        <div class="container-commented-contented" id="comments-ajax">
                            <!-- comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
            <button type="button" class="fa fa-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Vui lòng <a href="login.php?id=<?=$_GET['id']?>">Đăng nhập</a> để bình luận
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

<script>

    function load_comments(){
    $.get( "ajax/article-comment.php", { id: <?php echo $id?> }, 
        function( result ) {
            var html = '<h2 class="comments-from-users">Bình luận bài viết</h2>';
            //console.log(result);
            try{
                $.each (result, function (key, item){
                    html += '<div class = "in4-comment-user">';
                    html += '<div class = "img-user-comment">';
                    html += '<img src="img/avatar.jpg" alt=""></div>';
                    html += '<div class = "content-main">';
                    html += item.name;
                    html += '<p class="date-commented">Vào lúc:'+item.datetime+'</p>';
                    html += '<p class="content-commented">'+item.content+'</p>';
                    <?php
                        $isAdmin = Session::get('user_role');
                        $userId = Session::get('user_id');
                        if ($userId != "") {
                    ?>
                    html += '<button class = "container-btn-ellip"><i class="fa fa-ellipsis-v"></i></button>';
                    html += '<div class="att-comment">';
                    if ('<?php echo $isAdmin;?>' == 'admin' || <?php echo $userId;?> == item.userId) {
                        html += '<a onclick="delete_comment('+item.commentId+');">Xóa</a>';
                    }
                    else {
                        html += '<a href="">Báo cáo</a>';
                    }
                    html += '</div>';
                    <?php } ?>
                    html += '</div>';
                    if(item.image != ""){ 
                        html += '<div class="img-commented">';
                        html += '<img src="img/commentArticle/'+item.image+'" alt="">';
                        html += '</div>';
                    }
                    html += '</div>';
                });
            }
            catch(e)
            {
                alert(e);
            }

            $("#comments-ajax").html(html);
            add_event_ellip();
        }, "json" );
    }

    const fileUploader = document.getElementById(`image1`);
    const reader = new FileReader();
    fileUploader.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader.readAsDataURL(file);
        
        reader.addEventListener('load', (event) => {
            img = document.getElementById(`upload-img1`);
            img.src = event.target.result;
            img.alt = file.name;
        });
    }); 

    function add_event_ellip(){
        const btnEllips = document.querySelectorAll('.container-btn-ellip');
        console.log(btnEllips);
        btnEllips.forEach((btnEllip)=>{
            const attComment = btnEllip.parentNode.querySelector('.att-comment');
            btnEllip.addEventListener('click', () => {
                btnEllip.classList.toggle('text-black');
                attComment.classList.toggle('show-att-coment');
            });
        });
    }

    function delete_comment(commentId){
        if (confirm('Bạn có muốn xóa bình luận này?'))
        {
            $.getScript("ajax/article-comment.php?commentId="+commentId, function(){
                load_comments();
            });
        }
    }

    load_comments();

</script>

<?php
    include 'inc/footer.php';
?>