<!-- include header -->

<?php include('header.php') ?>
<?php include('dbcon.php') ?>


<div class="box1">
    <h2>ALL STUDENTS</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btn_modal">Add Student</button>
</div>
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

<!-- Modal -->
<form action="" class="">
<div class="modal fade" id="btn_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <label for="id">ID</label>
            <input type="text" name="id" id="id" class="form-control" >
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control">
            <label for="age">Age</label>
            <input type="text" name="age" id="age" class="form-control">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- include footer -->
<?php include('footer.php') ?>