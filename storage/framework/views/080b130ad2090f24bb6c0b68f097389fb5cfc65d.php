<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('admin')); ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('admin')); ?>/images/favicon.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


  
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.css"
integrity="sha512-wcf2ifw+8xI4FktrSorGwO7lgRzGx1ld97ySj1pFADZzFdcXTIgQhHMTo7tQIADeYdRRnAjUnF00Q5WTNmL3+A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
.tokenfield .token {
  margin: -1px 1px 1px 1px;
  height: 25px;
  line-height: 22px;
  color: #fff;
  background-color: #0b5ed7
}

.tokenfield .token a {
  color: #FFFFFF;
  text-decoration: none;
}
</style>
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo e(asset('admin')); ?>/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo e(asset('admin')); ?>/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo e(asset('admin')); ?>/images/faces/<?php echo e(Auth::user()->avatar); ?>" alt="profile"/>
              <span class="nav-profile-name"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo e(url('auth/logout')); ?>">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('halaman.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Halaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('experience.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Experience</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('education.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Education</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('skill.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Skill</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('profil.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pengaturanhalaman.index')); ?>">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Pengaturan Halaman</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?php echo $__env->make('dashboard.pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php echo $__env->yieldContent('konten'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="-" target="_blank">Rizki Ardiansyah Novianto </a>2023</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="-" target="_blank"> Make a love website</a> Great</span>
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo e(asset('admin')); ?>/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(asset('admin')); ?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('admin')); ?>/js/off-canvas.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('admin')); ?>/js/dashboard.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/data-table.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/jquery.dataTables.js"></script>
  <script src="<?php echo e(asset('admin')); ?>/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="<?php echo e(asset('admin')); ?>/js/jquery.cookie.js" type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

  

  <script>
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 200
      });
    });
  </script>

<?php echo $__env->yieldPushContent('child-scripts'); ?>




  
</body>

</html><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/layout.blade.php ENDPATH**/ ?>