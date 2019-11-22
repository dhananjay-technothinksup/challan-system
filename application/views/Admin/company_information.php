<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
  include('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>COMPANY INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Company Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Enter Company Name">
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" rows="3" name="" id="" placeholder="Enter Company Name"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="City">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="State">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="District">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="" id="" placeholder="Pincode">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="" id="" placeholder="Mobile No. 1">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="" id="" placeholder="Mobile No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="" id="" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="Website">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="Pan No.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="GST No.">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="Lic No. 1">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="" placeholder="Lic No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control date" name="" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Fin Start Date">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="" id="date2" data-target="#date2" data-toggle="datetimepicker" placeholder="Fin End Date">
                  </div>
                  <div class="form-group col-md-6">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Browse Logo</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    No file selected.
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="" id="" placeholder="Admin Email">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="" id="" placeholder="Admin Password">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create Company</button>
                  <button type="submit" class="btn btn-default ml-4">Cancel</button>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>
</body>
</html>
