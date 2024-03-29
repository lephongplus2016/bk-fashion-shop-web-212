<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<script type="text/javascript">
    
    function validate_slider()
    {
        var title = document.sliderForm.collection.value;
        if (title.trim() == '')
        {
            document.getElementById("alert1").style.display = "flex";
            document.sliderForm.collection.focus();
            return false;
        }

        var name = document.sliderForm.sliderName.value;
        if(name.trim() == '')
        {
            document.getElementById("alert2").style.display = "flex";
            document.sliderForm.sliderName.focus();
            return false;
        }

        var content = document.sliderForm.contents.value;
        if(content.trim() == '')
        {
            document.getElementById("alert3").style.display = "flex";
            document.sliderForm.contents.focus();
            return false;
        }

        var image = document.sliderForm.img.value;
        if(image == '')
        {
            document.getElementById("alert4").style.display = "flex";
            document.sliderForm.img.focus();
            return false;
        }
        if (image.indexOf('.jpeg') == -1 && image.indexOf('.jpg') == -1 && image.indexOf('.png') == -1 && image.indexOf('.gif') == -1)
        {
            document.getElementById("alert5").style.display = "flex";
            document.sliderForm.img.focus();
            return false;
        }
        console.log(document.sliderForm.status.checked);
        return true;
    }
    
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Thêm Slider</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" name="sliderForm" onsubmit="return validate_slider()" method="post" enctype="multipart/form-data" class="mb-0">
                        <div class="form-group row">
                            <label for="collection" class="col-sm-2 col-form-label">Tên bộ sưu tập</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="collection" name="collection" placeholder="ex: Summer collection" onchange="document.getElementById('alert1').style.display = 'none';">
                                <span class="invalid-feedback" id="alert1">Vui lòng điền tên bộ sưu tập</span>
                            </div>   
                        </div>
                        <div class="form-group row">
                            <label for="sliderName" class="col-sm-2 col-form-label">Tiêu đề</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sliderName" name="sliderName" placeholder="Tiêu đề" onchange="document.getElementById('alert2').style.display = 'none';">
                                <span class="invalid-feedback" id="alert2">Vui lòng điền tiêu đề cho slider</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contents" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-6">
                                <textarea id="contents" name="contents" class="form-control" placeholder="Mô tả ngắn" style="width:100%;" onchange="document.getElementById('alert3').style.display = 'none';"></textarea>
                                <span class="invalid-feedback" id="alert3">Vui lòng điền mô tả cho slider</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-6">
                                <input type="file" id="img" name="img" class="form-control" accept=".jpeg, .jpg, .png, .gif" onchange="document.getElementById('alert4').style.display = 'none';document.getElementById('alert5').style.display = 'none';">
                                <div class="pt-2">
                                    <img id="upload-img" style="max-width: 100%">
                                </div>
                                <span class="invalid-feedback" id="alert4">Vui lòng chọn ảnh cho slider</span>
                                <span class="invalid-feedback" id="alert5">Vui lòng chọn file có các định dạng sau .jpeg .jpg .png .gif</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 offset-sm-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="mode" name="status" checked />
                                    <label class="form-check-label" for="mode">Bật / Tắt hiển thị trên trang chủ</label>
                                </div>
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

    setNotificationDialog("Đã thêm Slider!");
</script>

<?php include '../classes/slider.php'; 
    $slider = new Slider();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){ 
        $check = $slider->insert_slider($_POST, $_FILES);
        if ( $check === true){
            echo "<script>openNotification(()=>{window.location ='slider-list.php'}); </script>";
        }
        else echo "<script>alert('Đã có lỗi xảy ra! Mã: ".$check."')</script>";
    }
?> 
        
<?php include 'inc_admin/footer.php' ?>
