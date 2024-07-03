<?php require_once('db_config.php'); ?>
<?php include_once('common/header.php'); ?>
<!-- Navbar -->
<?php include_once('common/navbar.php'); ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php include_once('common/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Movie Theaters</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Movie Theaters</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
              <div class="card-header">
              <!--   <h3 class="card-title">DataTable with default features</h3> -->
                <p class="text-success"><?php 
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                ?>
                </p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Added By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                            $query="SELECT movie_theaters.*,users.user_name FROM `movie_theaters` INNER JOIN users ON movie_theaters.added_by = users.id;
                            ";
                            $result = mysqli_query($connection,$query);
                            if($result->num_rows>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['movie_theater_name'];?></td>
                                            <td><?php echo $row['movie_theater_address'];?></td>
                                            <td><?php echo $row['user_name'];?></td>
                                            <td><?php echo $row['created_at'];?></td>
                                            <td><a href="editMovieTheater.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> | <a href="deleteMovieTheater.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i></a> </td>
                                        </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="6"> No records Found</td>
                                </tr>
                                <?php
                            }
                    ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
            
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('common/footer.php'); ?>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
