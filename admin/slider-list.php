<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/slider.php'; 
    $slider = new Slider();
	$list_slider = $slider->show_slider();

    if(isset($_GET['deleteId'])  && $_GET['deleteId'] != NULL) {
        $id = $_GET['deleteId'];
        $check = $slider->delete_slider($id);
        echo "<script>window.location ='slider-list.php'</script>";
    }
?> 

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách slider</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Danh sách slider</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Slider
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Ảnh slider</th>
                                <th>Bộ sưu tập</th>
                                <th>Tên slider</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Ảnh slider</th>
                                <th>Bộ sưu tập</th>
                                <th>Tên slider</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                if ($list_slider != false)
                                {
                                    while($row = $list_slider->fetch_assoc())
                                    {
                                        echo '
                                        <tr>
                                            <td class="text-center"><img src="../img/hero/'.$row["sliderImage"].'" alt="'.$row["sliderImage"].'" width = 80px"></td>
                                            <td>'.$row["collectionName"].'</td>
                                            <td>'.$row["sliderName"].'</td>
                                            <td>'.$row["description"].'</td>
                                            <td class="text-center">
                                                <div class="form-check form-switch text-center">';
                                                if ($row["status"]){
                                                    echo '<input class="form-check-input" type="checkbox" role="switch" id="mode'.$row["id"].'" name="status" checked onchange="switchChange('.$row["id"].', this.checked)">
                                                    <label class="form-check-label" for="mode" id="labelswitch'.$row["id"].'">Bật</label>';
                                                }
                                                else echo '<input class="form-check-input" type="checkbox" role="switch" id="mode'.$row["id"].'" name="status" onchange="switchChange('.$row["id"].', this.checked)">
                                                    <label class="form-check-label" for="mode" id="labelswitch'.$row["id"].'">Tắt</label>';
                                        echo '
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-primary my-1" onclick="location.assign(\'slider-edit.php?id='.$row["id"].'\');">Edit</Button>
                                                <button class="btn btn-outline-danger my-1" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteId='.$row["id"].'\')});">Delete</button>
                                            </td>
                                        </tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
</div>

<script>
    title = "Delete";
    message = "Bạn có chắc chắn muốn xóa dòng này?"
    setConfirmDialog(title, message);

    function switchChange(num, check){
        $.post('slider-switch.php',
        {
            id: num,
            status: check
        },
        function(result){
            if(Number(result) > 0)
            {
                $(`#labelswitch${num}`).text((check)?"Bật":"Tắt");
            }
            else {
                alert("Có lỗi xảy ra!");
            }
        });
    }
</script>
     
<?php include 'inc_admin/footer.php' ?>