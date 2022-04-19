<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<script type="text/javascript">
    
    function validate_banner()
    {
        var title = document.bannerForm.bannerName.value;
        if (title.trim() == '')
        {
            document.getElementById("feedback1").style.display = "flex";
            document.bannerForm.bannerName.focus();
            return false;
        }

        var image = document.bannerForm.img.value;
        if(image == '')
        {
            document.getElementById("feedback2").style.display = "flex";
            document.bannerForm.img.focus();
            return false;
        }
        if (image.indexOf('.jpeg') == -1 && image.indexOf('.jpg') == -1 && image.indexOf('.png') == -1 && image.indexOf('.gif') == -1)
        {
            document.getElementById("feedback3").style.display = "flex";
            document.bannerForm.img.focus();
            return false;
        }
        return true;
    }
    
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Thêm Banner</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <form name="bannerForm" onsubmit="return validate_banner()" method="post" enctype="multipart/form-data" class="mb-0">
                        <div class="form-group row">
                            <label for="bannerName" class="col-sm-2 col-form-label">Tiêu đề</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="bannerName" name="bannerName" placeholder="Tiêu đề" onchange="document.getElementById('feedback1').style.display = 'none';">
                                <span class="invalid-feedback" id="feedback1">Vui lòng điền tiêu đề cho banner</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-6">
                                <input type="file" id="img" name="img" class="form-control" accept=".jpeg, .jpg, .png, .gif" onchange="document.getElementById('feedback2').style.display = 'none';document.getElementById('feedback3').style.display = 'none';">
                                <div class="pt-2">
                                    <img id="upload-img" style="max-width: 100%">
                                </div>
                                <span class="invalid-feedback" id="feedback2">Vui lòng chọn ảnh cho banner</span>
                                <span class="invalid-feedback" id="feedback3">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 offset-sm-4">
                                <button type="submit" class="btn btn-primary" name="submit" style="width:100%">Thêm</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </main>
    
</div>

<script>
    const x = document.getElementsByClassName("invalid-feedback");
    for(var i = 0; i < x.length; i++){
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

    setNotificationDialog("Đã thêm banner!");
</script>

<?php include '../classes/banner.php'; 
    $banner = new Banner();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
        $check = $banner->insert_banner($_POST, $_FILES);
        if ( $check === true){
            echo "<script>openNotification(()=>{window.location ='banner-list.php'}); </script>";
        }
        else echo "<script>alert('Đã có lỗi xảy ra! Mã: ".$check."')</script>";
    }
?> 
        
<?php include 'inc_admin/footer.php' ?>
