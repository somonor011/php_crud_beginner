<!-- include header -->

<?php include('header.php') ?>
<?php include('dbcon.php') ?>

<h2>ALL STUDENTS</h2>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <!-- php code goes here -->

        <?php
        $query = "SELECT * FROM `tbl_crud_beginner`";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Error : " . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) { // if data have 2 row while 2 time
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['frist_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>

<!-- include footer -->
<?php include('footer.php') ?>