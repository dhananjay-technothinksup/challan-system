<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>Admin/dashboard" class="brand-link">
    <!-- <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Challan System</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/company_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Company Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/item_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Item Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/item_group_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Item Group Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/party_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Party Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/vehicle_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Vehicle Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/remark_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Remark Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/process_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Process Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/inword_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Inword Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/outword_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Outword Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/user_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    User Information
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/unit_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Unit Information
                  </p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Transaction
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">

              </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Reports
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>Admin/item_wise_stock_report" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Item Wise Stock Reports
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>Admin/vehicle_report" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Vehicle Reports
                      </p>
                    </a>
                  </li>
                </ul>
              </li>





      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
