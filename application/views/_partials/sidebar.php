<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'students' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/list') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Calon Siswa Baru</span>
        </a>
    </li>
</ul>