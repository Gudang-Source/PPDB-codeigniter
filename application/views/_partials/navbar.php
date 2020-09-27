<nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-4" href="<?php echo base_url('index.php') ?>">
        <div class="row align-items-center">
            <div style="margin-left:10px">
                <i class="fas fa-home"></i>
                <?php echo SITE_NAME ?>
            </div>
        </div>
    </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <div class="input-group-append">
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <a href="<?php echo site_url('admin/login') ?>">
            <button class="btn btn-light">Login</button>
        </a>
    </ul>

</nav>