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
                                        <td>
                                        <select id = "dropdown">';
                                        if($row['role'] == 'customer'){
                                            echo '<option value="customer" selected>customer</option>
                                            <option value="admin">admin</option>';
                                        } 
                                        else
                                        {
                                            echo '<option value="admin" selected>admin</option>
                                            <option value="customer">customer</option>';
                                        }
                                    echo '</select>
                                        </td>
                                        <td>
                                        <a href="clientEdit.php?userId='.$row['userId'].'">Edit</a> 
                                        || <a onclick="return confirm('.'"Bạn có chắc chắn xóa?"'.')"  href="?deleteid='.$row['userId'].'">Delete</a>
                                        </td>
                                        </tr>';
                                        $stt++;
                                    }
                                ?>
                            </tbody>
                            </table>
                    </div>
                </main>
                
            </div>
        
<?php include 'inc_admin/footer.php' ?>
