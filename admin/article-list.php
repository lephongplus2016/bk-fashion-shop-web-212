<?php include 'inc_admin/header.php' ?>

<?php include 'inc_admin/sidebar.php' ?>

<?php include '../classes/article.php'; 
    $article = new Article();
	$list_article = $article->show_article();
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
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                if ($list_article != false)
                                {
                                    while($row = $list_article->fetch_assoc())
                                    {
                                        
                                        echo '<tr>';
                                        echo '<th><a href="article-info.php?id='.$row["id"].'">'.$row["title"].'</a></th>';
                                        echo '<th>'.$row["writer"].'</th>';
                                        echo '<th>'.$row["datetime"].'</th>';
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