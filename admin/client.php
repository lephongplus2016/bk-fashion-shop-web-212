<?php include 'inc_admin/header.php' ?>

           <?php include 'inc_admin/sidebar.php' ?>
           <?php include '../classes/user.php'; 
            $user = new user();
            $result = $user->show_user();
            if(isset($_GET['deleteid'])  && $_GET['deleteid'] != NULL) {
                $userId = $_GET['deleteid'];
                $delUser = $user->delete_user($userId);
            }
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản Lý Khách Hàng</h1>
                                <?php 
                                if(isset($delUser)){
                                echo "<script>window.location ='client.php'</script>";

                                echo $delUser;
                        }
                    ?>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stt = 1;
                                    while($row = $result->fetch_assoc()){
                                        echo
                                        '<tr>
                                        <th scope="row">'.$stt.'</th>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['address'].'</td>
                                        <td>'.$row['phone'].'</td>
                                        <td>'.$row['role'].'</td>
                                        <td class="text-center"><button class="btn btn-outline-primary my-1" onclick="location.assign(\'clientEdit.php?userId='.$row["userId"].'\');">Edit</Button>
                                                <button class="btn btn-outline-danger my-1" onclick="openDeleteConfirm(()=>{location.assign(\'?deleteid='.$row["userId"].'\')});">Delete</button></td>                       
                                        </tr>';
                                        $stt++;
                                    }
                                ?>
                            </tbody>
                            </table>
                    </div>
                </main>
                
            </div>

<script>
    title = "Delete";
    message = "Bạn có chắc chắn muốn xóa dòng này?"
    setConfirmDialog(title, message);
</script>
<?php include 'inc_admin/footer.php' ?>
