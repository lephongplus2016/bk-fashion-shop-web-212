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
                                            <td style="text-align:center; width: fit-content;"><img src="../img/hero/'.$row["sliderImage"].'" alt="'.$row["sliderImage"].'" width = 80px"></td>
                                            <td>'.$row["collectionName"].'</td>
                                            <td>'.$row["sliderName"].'</td>
                                            <td>'.$row["description"].'</td>
                                            <td>'.$row["status"].'</td>
                                            <td style="text-align:center"><button style="margin:2px auto" class="btn btn-outline-primary" onclick="location.assign(\'slider-edit.php?id='.$row["id"].'\');">Edit</Button>
                                                <button style="margin:2px auto" class="btn btn-outline-danger" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteId='.$row["id"].'\')});">Delete</button></td>
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
</script>
     
<?php include 'inc_admin/footer.php' ?>