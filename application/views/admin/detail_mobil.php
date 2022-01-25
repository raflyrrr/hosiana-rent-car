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
            <h1>Detail Mobil</h1>
          </div>
        </section>

        <?php foreach ($detail as $dt) : ?>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <img width="90%;" src="<?= base_url('assets/upload/') . $dt->gambar; ?>" alt="">
                </div>
                <div class="col-md-7">
                  <table class="table">
                    <tr>
                      <td>Tipe Mobil</td>
                      <td>
                        <?php
                        if ($dt->kode_tipe == "SDN") {
                          echo "Sedan";
                        } elseif ($dt->kode_tipe == "MNV") {
                          echo "Mini Van";
                        } elseif ($dt->kode_tipe == "MPV") {
                          echo "Multi Purpose Vechicle";
                        } else { ?>
                          <span class="text-danger">Tipe mobil belum terdaftar</span>
                        <?php }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Merek</td>
                      <td><?= $dt->merek; ?></td>
                    </tr>
                    <tr>
                      <td>No. Plat</td>
                      <td><?= $dt->no_plat; ?></td>
                    </tr>
                    <tr>
                      <td>Warna</td>
                      <td><?= $dt->warna; ?></td>
                    </tr>
                    <tr>
                      <td>Tahun</td>
                      <td><?= $dt->tahun; ?></td>
                    </tr>
                    <tr>
                      <td>Harga Sewa</td>
                      <td>Rp. <?= number_format($dt->harga, 0, ',', '.'); ?>,-</td>
                    </tr>
                    <tr>
                      <td>Denda</td>
                      <td>Rp. <?= number_format($dt->denda, 0, ',', '.'); ?>,-</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>
                        <?php
                        if ($dt->status == "0") { ?>
                          <span class="badge badge-danger">Tidak Tersedia</span>
                        <?php } else { ?>
                          <span class="badge badge-primary">Tersedia</span>
                        <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Sopir</td>
                      <td>
                        <?php
                        if ($dt->sopir == "0") { ?>
                          <span class="badge badge-danger">Tidak Tersedia</span>
                        <?php } else { ?>
                          <span class="badge badge-primary">Tersedia</span>
                        <?php } ?>
                      </td>
                  </table>

                  <a href="<?= base_url('admin/data_mobil'); ?>" class="btn btn-sm btn-danger ml-4">Kembali</a>
                  <a href="<?= base_url('admin/data_mobil/update_mobil/') . $dt->id_mobil; ?>" class="btn btn-sm btn-primary">Update</a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
      <!-- Page Heading -->


      <!-- Content Row -->


      <!-- Content Row -->


    </div>