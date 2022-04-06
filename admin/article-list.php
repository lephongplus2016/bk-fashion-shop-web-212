<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/article.php'; 
    $article = new Article();
	$list_article = $article->show_article();

    if(isset($_GET['deleteId'])  && $_GET['deleteId'] != NULL) {
        $id = $_GET['deleteId'];
        $check = $article->delete_article($id);
        echo "<script>window.location ='article-list.php'</script>";
    }
?> 



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách tin tức</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Danh sách tin tức</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tin tức
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Hình đại diện</th>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Hình đại diện</th>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                if ($list_article != false)
                                {
                                    while($row = $list_article->fetch_assoc())
                                    {
                                        
                                        echo '<tr>';
                                        echo '<td style="text-align:center; width: fit-content;"><img src="../img/article/'.$row["image"].'" alt="'.$row["image"].'" width = 80px"></td>';
                                        echo '<td>'.$row["title"].'</td>';
                                        echo '<td>'.$row["writer"].'</td>';
                                        echo '<td>'.$row["datetime"].'</td>';
                                        echo '<td style="text-align:center;"><button class="btn btn-primary" onclick="location.assign(\'article-info.php?id='.$row["id"].'\');">Edit</Button>
                                         <button class="btn btn-danger" onclick="if(confirm(\'Bạn chắc chắn muốn xóa?\')) location.assign(\'?deleteId='.$row["id"].'\');">Delete</button></td>';
                                        echo '</tr>';
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
        
<?php include 'inc_admin/footer.php' ?>