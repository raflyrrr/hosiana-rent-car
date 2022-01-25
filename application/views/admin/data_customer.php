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
            <h1>Data Customer</h1>
          </div>

          <a href="<?= base_url('admin/data_customer/tambah_customer'); ?>" class="btn btn-primary mb-3">Tambah Customer</a>
          <?= $this->session->flashdata('pesan'); ?>

          <table class="table table-hover table-striped table-responsive table-bordered">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Alamat</th>
              <th>Gender</th>
              <th>No. Telepon</th>
              <th>No. KTP</th>
              <th>Password</th>
              <th>Action</th>
            </tr>

            <?php
            $no = 1;
            foreach ($customer as $cs) : ?>
              <tr>
                <td><?= $no++; ?>.</td>
                <td><?= $cs->nama; ?></td>
                <td><?= $cs->username; ?></td>
                <td><?= $cs->alamat; ?></td>
                <td><?= $cs->gender; ?></td>
                <td><?= $cs->no_telepon; ?></td>
                <td><?= $cs->no_ktp; ?></td>
                <td><?= $cs->password; ?></td>
                <td>
                  <div class="row">
                    <a href="<?= base_url('admin/data_customer/update_customer/') . $cs->id_customer; ?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('admin/data_customer/delete_customer/') . $cs->id_customer; ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>

            <?php endforeach; ?>
          </table>



        </section>
      </div>
    </div>