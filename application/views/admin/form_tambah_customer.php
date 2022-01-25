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
            <h1>Form Input Customer</h1>
          </div>

          <form action="<?= base_url('admin/data_customer/tambah_customer_aksi') ?>" method="post">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control">
              <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control">
              <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" class="form-control">
              <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">Gender</label>
              <select name="gender" id="" class="form-control">
                <option value="">--Pilih Gender--</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
              <?= form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">No. Telepon</label>
              <input type="text" name="no_telepon" class="form-control">
              <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">No. KTP</label>
              <input type="text" name="no_ktp" class="form-control">
              <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control">
              <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>

          </form>


        </section>
      </div>
    </div>