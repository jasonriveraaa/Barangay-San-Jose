<h1 class="page-header">List of All Users</h1>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Delete</th>
            <th>Admin</th>
            <th>Author</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_users";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['user_username']?></td>
                <td><?php echo $row['user_lname']?></td>
                <td><?php echo $row['user_fname']?></td>
                <td><?php echo $row['user_email']?></td>
                <td><?php echo $row['user_role']?></td>
                <td><a class="btn btn-danger" href="admin_users.php?delete=<?php echo $row['user_id']?>"><span class="fas fa-trash-alt"></span></a></td>
                <td><a class="btn btn-success" href="admin_users.php?admin=<?php echo $row['user_id']?>"><span class="fas fa-edit"></span></a></td>
                <td><a class="btn btn-warning" href="admin_users.php?author=<?php echo $row['user_id']?>"><span class="fas fa-edit"></span></a></td>
            </tr>
            <?php

                }

                if (isset($_GET['delete'])) {
                    $Del = $_GET['delete'];
                    $sql = "DELETE FROM tbl_users WHERE user_id='$Del'";
                    $result = mysqli_query($con,$sql);

                    if ($result) {

                        header("location: admin_users.php");
                    }
                }

                if (isset($_GET['admin'])) {
                    $admin_id = $_GET['admin'];
                    $sql_setTo_admin = "UPDATE tbl_users SET user_role = 'admin' WHERE user_id='$admin_id'";
                    $result = mysqli_query($con,$sql_setTo_admin);

                    if ($result) {

                        header("location: admin_users.php");
                    }
                }

                if (isset($_GET['author'])) {
                    $admin_id = $_GET['author'];
                    $sql_setTo_author = "UPDATE tbl_users SET user_role = 'author' WHERE user_id='$admin_id'";
                    $result = mysqli_query($con,$sql_setTo_author);

                    if ($result) {

                        header("location: admin_users.php");
                    }
                }
            
            ?>

        </tbody>
    </table>
</div>                        


