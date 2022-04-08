<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<script type="text/javascript">
    
    function validate_article()
    {
        var title = document.articleForm.articleTitle.value;
        if (title.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.articleForm.articleTitle.focus();
            return false;
        }

        var name = document.articleForm.author.value;
        if(name.trim() == '')
        {
            document.getElementById("alert2").style.display = "flex";
            document.articleForm.author.focus();
            return false;
        }

        var image = document.articleForm.img.value;
        if(image == '')
        {
            document.getElementById("alert3").style.display = "flex";
            document.articleForm.img.focus();
            return false;
        }
        if (image.indexOf('.jpeg') == -1 && image.indexOf('.jpg') == -1 && image.indexOf('.png') == -1 && image.indexOf('.gif') == -1)
        {
            document.getElementById("alert4").style.display = "flex";
            document.articleForm.img.focus();
            return false;
        }
        return true;
    }
    
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Thêm bài viết</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <form name="articleForm" onsubmit="return validate_article();" method="post" enctype="multipart/form-data" class="mb-0">
                        <div class="form-group row">
                            <label for="articleTitle" class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="articleTitle" name="articleTitle" placeholder="Tên tiêu đề..." onchange="document.getElementById('alert1').style.display = 'none';">
                                <span class="alertForm" id="alert1" style="font-size: smaller;">Vui lòng điền tiêu đề</span>
                            </div>   
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label">Tác giả</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Tên người viết..." onchange="document.getElementById('alert2').style.display = 'none';">
                                <span class="alertForm" id="alert2" style="font-size: smaller;">Vui lòng điền tên người viết</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-8">
                                <textarea name="contents"></textarea>
                                <script>
                                    CKEDITOR.replace( 'contents' );
                                </script>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-6">
                                <input type="file" id="img" name="img" class="form-control" accept=".jpeg, .jpg, .png, .gif" onchange="document.getElementById('alert3').style.display = 'none';document.getElementById('alert4').style.display = 'none';">
                                <div style="padding-top: 5px;">
                                    <img id="upload-img" style="max-width: 100%">
                                </div>
                                <span class="alertForm" id="alert3" style="font-size: smaller;">Vui lòng chọn ảnh đại diện</span>
                                <span class="alertForm" id="alert4" style="font-size: smaller;">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" style="width:100%">Đăng bài</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </main>
    
</div>

<script>
    const x = document.getElementsByClassName("alertForm");
    for(var i = 0; i < x.length; i++){
        x[i].style.color = 'red';
        x[i].style.display = 'none';
    }

    const fileUploader = document.getElementById('img');
    const reader = new FileReader();
    fileUploader.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader.readAsDataURL(file);
        
        reader.addEventListener('load', (event) => {
            img = document.getElementById('upload-img');
            img.src = event.target.result;
            img.alt = file.name;
        });
    });

    action = "Đã đăng tải bài viết!";
    setNotificationDialog(action);
</script>

<?php include '../classes/article.php'; 
	$article = new Article();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
        $check = $article->insert_article($_POST, $_FILES);
        if ( $check === true){
            echo "<script>openNotification(()=>{window.location ='article-list.php'}); </script>";
        }
        else echo "<script>alert('Đã có lỗi xảy ra! Mã: ".$check."')</script>";
    }
?> 
        
<?php include 'inc_admin/footer.php' ?>
