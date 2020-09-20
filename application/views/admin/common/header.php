<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 11:47:58 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cost Estimator</title>
    <!-- plugins:css -->
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/select2/select2.min.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/codemirror/codemirror.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/codemirror/ambiance.css">

        <?php $css = $this->site_model->get_rows('css'); ?>
        <?php 
          if (@$css) { 
            if($css[0]['name'] == "custom.php") { ?>
                <link rel="stylesheet" href="<?= base_url(); ?>application/views/admin/<?= $css[0]['name']; ?>">
            <?php }else{ ?>
                <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/css/<?= $css[0]['name']; ?>">    
            <?php } }else{ ?>
                <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/css/style.css">
        <?php } ?>
        
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/jquery-toast-plugin/jquery.toast.min.css">
        <link rel="shortcut icon" href="<?= base_url('demo_admin_assets'); ?>/images/favicon.png" />
    <!-css: end--->
    <script src="<?= base_url(); ?>/assets/front/js/jquery-1.11.2.min.js"></script>
</head>
<body>
    <div class="container-scroller">
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
              <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style='height: auto!important;'>
                  <!-- website logo -->
                  <?php $img = $this->site_model->get_rows_d1('logo', 'device', "1", 'active', "1"); ?>
                  <?php 
                    if (@$img) { ?>
                      <a class="navbar-brand brand-logo" href="<?= base_url();  ?>" referrerpolicy="origin"><img style="height: 75px!important;" src="<?= base_url('admin_assets')  ?>/images/logo/<?= $img[0]['name']; ?>" alt="logo"/></a>
                  <?php }else{ ?>
                      <a class="navbar-brand brand-logo" href="<?= base_url();  ?>" referrerpolicy="origin">No Logo</a>
                  <?php } ?>

                  <!-- mobile logo -->
                  <?php $img2 = $this->site_model->get_rows_d1('logo', 'device', "0", 'active', "1"); ?>
                  <?php 
                    if (@$img2) { ?>
                      <a class="navbar-brand brand-logo-mini" href="<?= base_url();  ?>"><img src="<?= base_url('admin_assets')  ?>/images/logo/<?= $img2[0]['name']; ?>" alt="logo"/></a>
                  <?php }else{ ?>
                      <a class="navbar-brand brand-logo-mini" href="<?= base_url();  ?>" referrerpolicy="origin">No Logo</a>
                  <?php } ?>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dashboard">
                            <a class="nav-link" href="<?= base_url('admin/app/dashboard'); ?>">
                              <i class="icon-home menu-icon"></i>
                              <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        <?php if( !empty($this->session->userdata('is_admin_logged')) ){ ?>
                            <li class="nav-item dropdown d-inline-flex align-items-center user-dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-magic-wand menu-icon"></i>
                                <span class="menu-title">Setup</span>
                                <i class="menu-arrow"></i></a>
                              <?php if($this->session->userdata('is_admin_logged')) { ?> 
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                  <a class="dropdown-item" href="<?= base_url('admin/app/uploadlogo'); ?>">
                                    <i class="dropdown-item-icon icon-picture menu-icon text-primary"></i>
                                    Upload Logo
                                  </a>
                                  <a class="dropdown-item" href="<?= base_url('admin/app/changelogo'); ?>">
                                    <i class="dropdown-item-icon icon-picture menu-icon text-primary"></i>
                                    Change Logo
                                  </a>
                                  <a class="dropdown-item" href="<?= base_url('admin/app/managequotelogo'); ?>">
                                      <i class="dropdown-item-icon icon-picture menu-icon text-primary"></i> Manage Quote Logo
                                    </a>
                                  <a class="dropdown-item" href="<?= base_url('admin/app/changestyle'); ?>">
                                    <i class="dropdown-item-icon fa fa-adjust menu-icon text-primary"></i>
                                    Change Style
                                  </a>
                                </div>
                              <?php } ?>   
                            </li>
                        <?php } ?>

                        <?php if( !empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged')) ){ ?>
                            <li class="nav-item dropdown d-inline-flex align-items-center user-dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class=" icon-settings menu-icon"></i>
                                <span class="menu-title">Settings</span>
                                <i class="menu-arrow"></i></a>
                              <?php if($this->session->userdata('is_admin_logged') || !empty($this->session->userdata('is_cost_estimator_logged'))){ ?> 
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                    <a class="dropdown-item" href="<?= base_url('admin/app/venues'); ?>">
                                      <i class="dropdown-item-icon fa fa-institution menu-icon text-primary"></i>
                                      Manage Venue
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/cost_type'); ?>">
                                      <i class="dropdown-item-icon icon-book-open menu-icon text-primary"></i>
                                      Manage Job Type
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/salesperson'); ?>">
                                      <i class="dropdown-item-icon fa fa-user menu-icon text-primary"></i>
                                      Manage Salesperson
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/backupdatabase'); ?>">
                                      <i class="dropdown-item-icon fa fa-check menu-icon text-primary"></i> Backup Database
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/exclusions'); ?>">
                                      <i class="dropdown-item-icon fa fa-exclamation menu-icon text-primary"></i>
                                      Manage Exclusions
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/terms'); ?>">
                                      <i class="dropdown-item-icon fa fa-check menu-icon text-primary"></i>
                                      Manage Terms and Conditions
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/copyright'); ?>">
                                      <i class="dropdown-item-icon menu-icon text-primary">©</i> Manage Copyright
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/coverletter'); ?>">
                                      <i class="dropdown-item-icon fa fa-font menu-icon text-primary"></i> Manage Cover letter
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/validity'); ?>">
                                      <i class="dropdown-item-icon icon-wrench menu-icon text-primary"></i> Manage Validity
                                    </a>
                                </div>
                              <?php } ?>   
                            </li>
                        <?php } ?>

                        <?php if(!empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged'))){ ?>
                            <li class="nav-item dropdown d-inline-flex align-items-center user-dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-users menu-icon"></i>
                                <span class="menu-title">Users</span>
                                <i class="menu-arrow"></i></a>
                              <?php if($this->session->userdata('is_admin_logged') || !empty($this->session->userdata('is_cost_estimator_logged'))){ ?> 
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                    <a class="dropdown-item" href="<?= base_url('admin/app/add_user'); ?>">
                                      <i class="dropdown-item-icon icon-user text-primary"></i>
                                      Add New User
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('admin/app/users'); ?>">
                                      <i class="dropdown-item-icon icon-user text-primary"></i>
                                      Manage Users
                                    </a>
                                </div>
                              <?php } ?>   
                            </li>
                        <?php } ?>
                        <li class="nav-item dropdown d-inline-flex align-items-center user-dropdown">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-inline"> <?php echo get_single_col_value('user_role','id',$this->session->userdata('user_role_id'),'name'); ?> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <a class="dropdown-item" href="<?= base_url('admin/app/changepassword'); ?>">
                                  <i class="dropdown-item-icon fa fa-lock text-primary"></i>
                                  Change Password
                                </a>
                                <a class="dropdown-item" href="<?= base_url('admin/app/logout'); ?>">
                                  <i class="dropdown-item-icon icon-power text-primary"></i>
                                  Sign Out
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="icon-menu"></span>
                    </button>
                </div>
              </div>
            </nav>
            <nav class="bottom-navbar">
              <div class="container">
                <ul class="nav page-navigation">
                  
                  <?php if($this->session->userdata('is_admin_logged') || !empty($this->session->userdata('is_cost_estimator_logged'))){ ?>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-shopping-cart menu-icon"></i>
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i></a>
                      <div class="submenu">
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/add_product'); ?>">Add New product</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/add_bulk_product'); ?>">Bulk Product Import</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/products'); ?>">Manage Products</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/categories'); ?>">Manage Categories</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/units'); ?>">Manage Units</a></li>
                          
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_currency'); ?>">Manage Currency</a></li>
                        </ul>
                      </div>
                    </li>
                    
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-users menu-icon"></i>
                        <span class="menu-title">Customers</span>
                        <i class="menu-arrow"></i></a>
                      <div class="submenu">
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/add_customers'); ?>">Add New Customer</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/payment_terms'); ?>">Payment Terms</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/customers'); ?>">Manage Customers</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/contact_person'); ?>">Manage Contact Person</a></li>
                        </ul>
                      </div>
                    </li>
                  <?php } ?>
    
                  <?php if(!empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged')) ){ ?>
    
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="icon-paper-clip menu-icon"></i>
                        <span class="menu-title">Cost Sheets</span>
                        <i class="menu-arrow"></i></a>
                      <div class="submenu">
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/create_cost_sheet'); ?>">Add New Cost Sheet</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_costsheet'); ?>">Manage Cost Sheets</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_draft'); ?>">Manage Drafts</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/create_cost_template'); ?>">Add New Cost Model</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_template'); ?>">Manage Cost Model</a></li>
                        </ul>
                      </div>
                    </li>
                  <?php  } ?>
    
                  <?php if(!empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged')) || !empty($this->session->userdata('is_sales_logged')) || !empty($this->session->userdata('is_finance_logged'))){ ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-archive menu-icon"></i>
                            <span class="menu-title">Quotations</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_quotations'); ?>">View Quotations</a></li>
                            
                                <?php if($this->session->userdata('is_admin_logged')){ ?> 
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/archived_quotations'); ?>">Archived Quotations</a></li>
                                <?php } ?>  
                            </ul>
                        </div>
                    </li>
                  <?php } ?>
                  
                  <?php if(!empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged')) || !empty($this->session->userdata('is_finance_logged')) || !empty($this->session->userdata('is_project_manage_logged'))){ ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-briefcase menu-icon"></i>
                            <span class="menu-title">Jobs</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/app/manage_jobs'); ?>">View Jobs</a></li>
                            </ul>
                        </div>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </nav>
        </div>
    
