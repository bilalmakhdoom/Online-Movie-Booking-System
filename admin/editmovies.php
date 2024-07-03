<?php   
    require_once('db_config.php'); 
    $query="SELECT * FROM movies WHERE id=".$_GET['id'];
    $result  = mysqli_query($connection,$query);
    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
    }
?>
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
                    <h1 class="m-0">Add Movie</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Movie</li>
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
                        <form action="editmoviesprocess.php" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <div class="form-group">
                                    <label for="movie_name">Movie Name</label>
                                    <input type="text" class="form-control" id="movie_name" placeholder="Movie Name"
                                        name="movie_name" value="<?php echo $row['movie_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="movie_trailer">Movie Trailer</label>
                                    <input type="text" class="form-control" id="movie_trailer"
                                        placeholder="movie Trailer" name="movie_trailer"
                                        value="<?php echo $row['movie_trailer'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" placeholder="Description"
                                        name="description" value="<?php echo $row['description'];?>"></textarea>
                                </div>
                              <!--   <div class="form-group">
                                    <label for="Movie_image">Image</label> -->
                                    <input type="hidden" id="poster" 
                                        name="poster" value="<?php echo $row['poster'];?>">
                                <!-- </div> -->
                                <div class="form-group">
                                    <label for="release_date">Release Date</label>
                                    <input type="date" class="form-control" id="release_date"
                                        placeholder="movie Release" name="release_date"
                                        value="<?php echo $row['release_date'];?>">
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