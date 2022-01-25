<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

        <!-- Nav Item - Alerts -->


        <!-- Nav Item - Messages -->



        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong><?= $this->session->userdata('nama') ?></strong></span>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>


    <div class="container-fluid">
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Filter Laporan Transaksi</h1>
          </div>

          <form action="<?= base_url('admin/laporan') ?>" method="post">
            <div class="form-group">
              <label for="">Dari Tanggal</label>
              <input type="date" name="dari" class="form-control">
              <?= form_error('dari', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">Sampai Tanggal</label>
              <input type="date" name="sampai" class="form-control">
              <?= form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
          </form>

        </section>
      </div>
    </div>