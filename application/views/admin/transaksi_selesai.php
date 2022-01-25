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

    </nav>s
<div class="container-fluid">
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Transaksi Selesai</h1>
      </div>

      <?php foreach ($transaksi as $tr) : ?>
        <form action="<?= base_url('admin/transaksi/transaksi_selesai_aksi'); ?>" method="post">
          <input type="hidden" name="id_rental" value="<?= $tr->id_rental; ?>">
          <input type="hidden" name="id_mobil" value="<?= $tr->id_mobil; ?>">
          <input type="hidden" name="tgl_kembali" value="<?= $tr->tgl_kembali; ?>">
          <input type="hidden" name="denda" value="<?= $tr->denda; ?>">
          <div class="form-group">
            <label for="">Tanggal Pengembalian</label>
            <input type="date" name="tgl_pengembalian" class="form-control" value="<?= $tr->tgl_pengembalian; ?>">
          </div>
          <!-- <div class="form-group">
        <label for="">Status Pengembalian</label>
        <select name="status_pengembalian" id="" class="form-control">
          <option value="<? //= $tr->status_pengembalian; 
                          ?>"><? //= $tr->status_pengembalian; 
                                                              ?></option>
          <option value="Kembali">Kembali</option>
          <option value="Belum Kembali">Belum Kembali</option>
        </select>
      </div> -->
          <!-- <div class="form-group">
        <label for="">Status Rental</label>
        <select name="status_rental" id="" class="form-control">
          <option value="<? //= $tr->status_rental; 
                          ?>"><? //= $tr->status_rental; 
                                                        ?></option>
          <option value="Selesai">Selesai</option>
          <option value="Belum Selesai">Belum Selesai</option>
        </select>
      </div> -->

          <button type="submit" class="btn btn-success">Save</button>
        </form>
      <?php endforeach; ?>

    </section>
  </div>
</div>