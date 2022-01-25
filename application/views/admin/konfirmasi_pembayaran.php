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
            <h1>Konfirmasi Pembayaran</h1>
          </div>
          <div class="card" style="width: 55%;">
            <div class="card-header">
              Konfirmasi Pembayaran
            </div>
            <center class="card-body">
              <form action="<?= base_url('admin/transaksi/cek_pembayaran'); ?>" method="post">
                <?php foreach ($pembayaran as $pmb) : ?>
                  <a class="btn btn-sm btn-success" href="<?= base_url('admin/transaksi/download_pembayaran/' . $pmb->id_rental) ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>

                  <div class="custom-control custom-switch ml-3">
                    <input type="hidden" class="custom-control-input" value="<?= $pmb->id_rental ?>" name="id_rental">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                    <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                  </div>
                  <hr>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <?php endforeach; ?>
              </form>
            </center>
          </div>
        </section>
      </div>
    </div>