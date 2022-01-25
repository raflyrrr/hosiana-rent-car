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
            <h1>Form Input Data Mobil</h1>
          </div>

          <div class="card">
            <div class="card-body">

              <form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Tipe Mobil</label>
                      <select name="kode_tipe" id="" class="form-control">
                        <option value="">--Pilih Tipe Mobil--</option>
                        <?php foreach ($tipe as $tp) : ?>
                          <option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Merek</label>
                      <input type="text" name="merek" class="form-control">
                      <?= form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Nomor Plat</label>
                      <input type="text" name="no_plat" class="form-control">
                      <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Warna</label>
                      <input type="text" name="warna" class="form-control">
                      <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                    </div>



                    <div class="form-group">
                      <label for="">Sopir</label>
                      <select name="sopir" id="" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                      </select>
                      <?= form_error('sopir', '<div class="text-small text-danger">', '</div>') ?>
                    </div>


                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Harga Sewa perhari</label>
                      <input type="number" name="harga" class="form-control">
                      <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Denda</label>
                      <input type="number" name="denda" class="form-control">
                      <?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Tahun</label>
                      <input type="text" name="tahun" class="form-control">
                      <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Status</label>
                      <select name="status" id="" class="form-control">
                        <option value="">--Pilih Status--</option>
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                      </select>
                      <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="">Gambar</label>
                      <input type="file" name="gambar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    <button type="reset" class="btn btn-success mt-4">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>


        </section>
      </div>
    </div>