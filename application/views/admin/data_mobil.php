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
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>

          <a href="<?= base_url('admin/data_mobil/tambah_mobil'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
          <?= $this->session->flashdata('pesan'); ?>

          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Tipe</th>
                <th>Merek</th>
                <th>Nomor Plat</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($mobil as $mb) : ?>
                <tr>
                  <td><?= $no++; ?>.</td>
                  <td>
                    <img width="70px;" src="<?= base_url('assets/upload/') . $mb->gambar; ?>" alt="">
                  </td>
                  <td><?= $mb->kode_tipe; ?></td>
                  <td><?= $mb->merek; ?></td>
                  <td><?= $mb->no_plat; ?></td>
                  <td>
                    <?php if ($mb->status == 0) { ?>
                      <span class="badge badge-danger">Tidak Tersedia</span>
                    <?php } else { ?>
                      <span class="badge badge-primary">Tersedia</span>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?= base_url('admin/data_mobil/detail_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <a onclick="return confirm('Yakin hapus?')" href="<?= base_url('admin/data_mobil/delete_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="<?= base_url('admin/data_mobil/update_mobil/') . $mb->id_mobil; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>



        </section>
      </div>
      <!-- Content Row -->


      <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->

  </div>