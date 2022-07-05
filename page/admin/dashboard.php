
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/dashboardbar.php';?>
  <!-- Main Sidebar Container -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Announcement Board</h1><br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Announcement Board</li>
            </ol>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <a href="#" class="btn btn-secondary modal-trigger" data-toggle="modal" data-target="#add_announcement">Add Announcement</a>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                   <div class="row">
                    <div class="col-4">
                      <label>Date From:</label><input type="date" name="" id="date_posted_from" class="form-control" value="<?=$server_month;?>">
                    </div>
                     <div class="col-4">
                      <label>Date To:</label><input type="date" name="" id="date_posted_to" class="form-control" value="<?=$server_date_only;?>">
                    </div>
                     <div class="col-4">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="search_announcement()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 420px;">
                        <table class="table table-head-fixed text-nowrap table-hover" id="announcement_list">
                        <thead style="text-align:center;">
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Content</th>
                            <th>Date Posted</th>
                    </thead>
                    <tbody id="list_of_announcement" style="text-align:center;"></tbody>
                        </table>
                      </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/dashboard_script.php';?>