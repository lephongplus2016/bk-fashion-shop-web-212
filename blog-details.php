<?php
    include 'inc/header.php';
?>
<?php include 'classes/commentArticle.php';
$commentArticle = new commentArticle();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    // echo '<pre>'; print_r($_FILES); echo '</pre>';

    $check = $commentArticle->insert_commentArticle($_POST, $_FILES, $_GET["id"]);
}
else if(isset($_GET['deleteCommentId'])){
    $CommentId = $_GET['deleteCommentId'];
    $delUser = $commentArticle->delete_comment($CommentId);
    $id = $_GET['id'];
    echo "<script>window.location ='blog-details.php?id=$id'</script>";
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

    echo '<script>
        var temp = document.getElementsByTagName("title");
        temp[0].innerHTML = "'.$data["title"].' - BK Fashion Shop";
        </script>';
?>
        <style>
            .container-commented-contented {
                margin-top: 50px;
            }
            .in4-comment-user {
                display: flex;
                height: 180px;
                margin-bottom: 20px;
                /* border-bottom: 1px solid rgba(0,0,0,.09); */
            }
            .img-user-comment {
                height: 40px;
                flex-basis: 5%;
                margin-right: 10px;
            }
            .img-user-comment img {
                border-radius: 50%;
                width: 40px;
                height: 100%;
                object-fit: cover;
            }
            .content-main {
                flex-basis: 75%;
                position: relative;
                border-bottom: 1px solid rgba(0,0,0,.09);
            }
            .content-main:hover .container-btn-ellip {
                color: #000;
            }
            .img-commented {
                flex-basis: 20%;
            }
            .img-commented img{
                
                width: 100%;
                height: 90%;
                object-fit: cover;
            }
            .date-commented {
                font-size: 12px;
            }
            .comments-from-users {
                font-size: 18px;
                background: rgba(0,0,0,.02);
                color: rgba(0,0,0,.87);
                padding: 0.875rem;
                text-transform: capitalize;
                margin-bottom: 20px;
            }
            .container-btn-ellip {
                background: transparent;
                border: transparent;
                position: absolute;
                top: 0;
                right: 0;
                padding: 8px 16px;
                z-index: 999;
                color: #fff;
                transition: all 0.3s ease;
            }
            .att-comment {
                position: absolute;
                top: 30px;
                right: 0;
                box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);
                visibility: hidden;
                z-index: -999;
            }
            .att-comment a:hover {
                background: #ccc;
            }
            .att-comment a {
                padding: 5px 30px;
                color: black;
                display: block;
            }
            .show-att-coment {
                visibility: visible;
                z-index: 999;
            }
            .text-black {
                color: black !important;
            }
        </style>
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
                            <li>8 Comments</li>
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
                                    <a href="" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Previous Pod</p>
                                        <h5>It S Classified How To Utilize Free Classified Ad Sites</h5>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="" class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Next Pod <span class="arrow_right"></span></p>
                                        <h5>Tips For Choosing The Perfect Gloss For Your Lips</h5>
                                    </a>
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
                            <h4>Leave A Comment</h4>
                            <form action="" method = "POST" enctype="multipart/form-data" name="cmtForm" onsubmit="return validate_cmt();">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Comment" id = 'content' name = 'content'></textarea>
                                        <span class="invalid-feedback" id="alert1">Vui lòng nhập nội dung</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Ảnh liên quan</label>
                                    <input class="form-control" type="file" name = "image1" id="image1" accept=".jpeg, .jpg, .png, .gif">
                                    <div style="padding-top: 5px;">
                                            <img id="upload-img1" style="max-width: 50%">
                                            </div>
                                    </div>
                                    <span class="invalid-feedback" id="alert2">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                                <?php
                                    $login_check = Session::get('user_login');
                                    if($login_check == true){
                                        echo '<button type="submit" class="site-btn" name = "submit">Post Comment</button>';
                                    }
                                    else {
                                        echo '<button type="button" class="site-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Post Comment
                                      </button>';
                                        }
                                    ?>
                                    </div>
                            </form>
                        </div>
                        <div class="container-commented-contented">
                                    <h2 class="comments-from-users">Bình luận bài báo</h2>
                                        <?php 
                                                    $commentArticles = $commentArticle->getImgByCommentArticlerticleId($_GET["id"]);
                                                    if($commentArticles != false) {
                                                    while($i = $commentArticles->fetch_assoc())
								                	{
                                                            ?>
                                                            <div class = "in4-comment-user">
                                                                <div class = "img-user-comment">
                                                                <img src="img/avatar.jpg" alt="">
                                                                </div>
                                                                <div class = "content-main">
                                                                <?php
                                                                $nameUser = $commentArticle->getNameUserCommentArticle($i['userId']);
                                                                if($nameUser!=false){
                                                                while($m = $nameUser->fetch_assoc()){
                                                                    echo $m['name'];
                                                                }
                                                            }
                                                                ?>
                                                                <p class="date-commented">Vào lúc: <?=$i['datetime']?></p>
                                                                <p class="content-commented"><?=$i['content']?></p>
                                                                <button class = "container-btn-ellip"><i class="fa fa-ellipsis-v"></i></button>
                                                                <div class="att-comment">
                                                                <?php
                                                                    $isAdmin = Session::get('user_role');
                                                                    $userId = Session::get('user_id');
                                                                    if ($isAdmin == 'admin' || $userId == $i['userId']) {
                                                                        echo '<a href="?deleteCommentId='.$i['commentId'].'&id='.$id.'">Xóa</a>';
                                                                    }
                                                                    else {
                                                                        echo '<a href="">Báo cáo</a>';
                                                                    }
                                                                    ?>
                                                            </div>
                                                            </div>
                                                            <?php if($i['image']!=""){ 
                                                                echo '<div class="img-commented">
                                                                    <img src="img/commentArticle/'.$i['image'].'" alt="">
                                                                    </div>';
                                                                    }?>
                                                            </div>
                                                            <?php
                                                    }
                                                } 	  
												?>
                                        </div>
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

const fileUploader = document.getElementById(`formFile`);
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


const btnEllips = document.querySelectorAll('.container-btn-ellip');
    btnEllips.forEach((btnEllip)=>{
        const attComment = btnEllip.parentNode.querySelector('.att-comment');
        btnEllip.addEventListener('click', () => {
            btnEllip.classList.toggle('text-black');
            attComment.classList.toggle('show-att-coment');
        });
    });

</script>
<?php
    include 'inc/footer.php';
?>