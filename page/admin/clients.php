
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/clientbar.php';?>
  <!-- Main Sidebar Container -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client's List</h1><br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client's List</li>
            </ol>
          </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <a href="#" class="btn btn-secondary modal-trigger" data-toggle="modal" data-target="#add_client">Add Client</a>
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
                      <label>Client's Name:</label><input type="text" name="" id="client_name" class="form-control">
                    </div>
                     <div class="col-8">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="search_client()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 420px;">
                        <table class="table table-head-fixed text-nowrap table-hover" id="announcement_list">
                        <thead style="text-align:center;">
                            <th>#</th>
                            <th>Client Name</th>
                            <th>Address</th>
                            <th>Client Code</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Nature of Business</th>
                            <th>Business Type</th>
                            <th>Years of Operation</th>
                    </thead>
                    <tbody id="list_of_client" style="text-align:center;"></tbody>
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
<?php include 'plugins/javascript/client_script.php';?>