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
            <h1>Data Tipe Mobil</h1>
          </div>

          <a href="<?= base_url('admin/data_tipe/tambah_tipe'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
          <?= $this->session->flashdata('pesan'); ?>

          <table class="table table-stripped table-bordered table-hover">
            <thead>
              <tr>
                <th width="20px;">No</th>
                <th>Kode Tipe</th>
                <th>Nama Tipe</th>
                <th width="180px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($tipe as $tp) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $tp->kode_tipe; ?></td>
                  <td><?= $tp->nama_tipe; ?></td>
                  <td>
                    <a href="<?= base_url('admin/data_tipe/update_tipe/') . $tp->id_tipe; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a onclick="confirm('Yakin hapus?')" href="<?= base_url('admin/data_tipe/delete_tipe/') . $tp->id_tipe; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </section>
      </div>
      <!-- Page Heading -->


      <!-- Content Row -->


      <!-- Content Row -->


    </div>