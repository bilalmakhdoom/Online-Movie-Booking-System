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
            <h1 class="m-0">Add Movie Theater</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Movie Theater</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fill the information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <p class="text-success">
                <?php 
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                ?>
              </p>
              <form action="addMovieTheaterProcess.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="movie_theater_name">Movie Theater Name</label>
                    <input type="text" class="form-control" id="movie_theater_name" placeholder="Movie Theater Name" name="movie_theater_name">
                  </div>
                  <div class="form-group">
                    <label for="movie_theater_address">Movie Theater Address</label>
                    <textarea class="form-control" id="movie_theater_address" placeholder="Movie Theater Address" name="movie_theater_address"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
  