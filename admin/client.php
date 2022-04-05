<?php include 'inc_admin/header.php' ?>

           <?php include 'inc_admin/sidebar.php' ?>
           <?php include '../classes/user.php'; 
            $user = new user();
            $result = $user->show_user();
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
