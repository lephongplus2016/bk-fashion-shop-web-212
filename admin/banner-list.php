<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/banner.php'; 
    $banner = new Banner();
	$list_banner = $banner->show_banners();

    if(isset($_GET['deleteId'])  && $_GET['deleteId'] != NULL) {
        $id = $_GET['deleteId'];
        $check = $banner->delete_banner($id);
        echo "<script>window.location ='banner-list.php'</script>";
    }
?> 

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách banner</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Danh sách banner</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Banner
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Ảnh banner</th>
                                <th>Tên banner</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Ảnh banner</th>
                                <th>Tên banner</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                if ($list_banner != false)
                                {
                                    while($row = $list_banner->fetch_assoc())
                                    {
                                        echo '
                                        <tr>
                                            <td class="text-center"><img src="../img/banner/'.$row["bannerImage"].'" alt="'.$row["bannerImage"].'" width = 80px"></td>
                                            <td>'.$row["bannerName"].'</td>
                                            <td>
                                                <div class="form-check form-switch offset-sm-4">';
                                                if ($row["status"]){
                                                    echo '<input class="form-check-input" type="checkbox" role="switch" id="mode'.$row["bannerId"].'" name="status" checked onchange="switchChange('.$row["bannerId"].', this.checked)">
                                                    <label class="form-check-label fw-bold" for="mode'.$row["bannerId"].'" id="labelswitch'.$row["bannerId"].'">Bật</label>';
                                                }
                                                else echo '<input class="form-check-input" type="checkbox" role="switch" id="mode'.$row["bannerId"].'" name="status" onchange="switchChange('.$row["bannerId"].', this.checked)">
                                                    <label class="form-check-label" for="mode'.$row["bannerId"].'" id="labelswitch'.$row["bannerId"].'">Tắt</label>';
                                        echo '
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-danger my-1" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteId='.$row["bannerId"].'\')});">Delete</button>
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
        var item = document.getElementsByName("status");
        var cnt = 0;
        for (let i = 0; i < item.length; i++){
            if(item[i].checked) cnt+=1;
        }
        if (cnt <= 3){
            $.post('banner-switch.php',
            {
                id: num,
                status: check
            },
            function(result){
                if(Number(result) > 0)
                {
                    if(check){
                        $(`#labelswitch${num}`).text("Bật").addClass("fw-bold");
                    }
                    else{
                        $(`#labelswitch${num}`).text("Tắt").removeClass("fw-bold");
                    }
                }
                else {
                    alert("Có lỗi xảy ra!");
                }
            });
        }
        else {
            document.getElementById(`mode${num}`).checked = false;
            alert("Vui lòng chọn không quá 3 banner");
        }
    }
</script>
     
<?php include 'inc_admin/footer.php' ?>