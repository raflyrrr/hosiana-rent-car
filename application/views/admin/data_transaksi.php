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
            <h1>Data Transaksi</h1>
          </div>

          <table class="table table-responsive table-bordered table-striped">
            <tr>
              <th>No</th>
              <th>Customer</th>
              <th>Mobil</th>
              <th>Tgl. Rental</th>
              <th>Tgl. Kembali</th>
              <th>Harga/Hari</th>
              <th>Denda/Hari</th>
              <th>Total Denda</th>
              <th>Tgl. Dikembalikan</th>
              <th>Status Pengembalian</th>
              <th>Status Rental</th>
              <th>Cek Pembayaran</th>
              <th>Total Pembayaran</th>
              <th>Action</th>
            </tr>

            <?php
            $no = 1;
            foreach ($transaksi as $tr) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $tr->nama; ?></td>
                <td><?= $tr->merek; ?></td>
                <td><?= date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>
                <td><?= date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>
                <td>Rp.<?= number_format($tr->harga, 0, ',', '.'); ?>,-</td>
                <td>Rp.<?= number_format($tr->denda, 0, ',', '.'); ?>,-</td>
                <td>Rp.<?= number_format($tr->total_denda, 0, ',', '.'); ?>,-</td>
                <td>
                  <?php if ($tr->tgl_pengembalian == "0000-00-00") {
                    echo "-";
                  } else {
                    echo date('d/m/Y', strtotime($tr->tgl_pengembalian));
                  } ?>
                </td>

                <td>
                  <?php if ($tr->tgl_pengembalian == "0000-00-00") {
                    echo "Belum Kembali";
                  } else {
                    echo "Kembali";
                  } ?>
                </td>


                <td>
                  <?php if ($tr->tgl_pengembalian == "0000-00-00") {
                    echo "Belum Selesai";
                  } else {
                    echo "Selesai";
                  } ?>
                </td>

                <td>
                  <center>
                    <?php if (empty($tr->bukti_pembayaran)) { ?>
                      <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                    <?php } else { ?>
                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/transaksi/pembayaran/' . $tr->id_rental); ?>"><i class="fas fa-check-circle"></i></a>
                    <?php } ?>
                  </center>
                </td>

                <td>
                  Rp.<?= number_format($tr->harga + $tr->total_denda, 0, ',', '.'); ?>,-
                </td>

                <td>
                  <?php if ($tr->status == "1") {
                    echo "-";
                  } else { ?>
                    <div class="row">
                      <a class="btn btn-sm btn-success mr-2" href="<?= base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>"><i class="fas fa-check"></i></a>
                      <a onclick="return confirm('Yakin batal?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/transaksi/batal_transaksi/' . $tr->id_rental) ?>"><i class="fas fa-times"></i></a>
                    </div>
                  <?php } ?>
                </td>
              </tr>

            <?php endforeach; ?>
          </table>
        </section>
      </div>
      <!-- Page Heading -->


      <!-- Content Row -->


      <!-- Content Row -->


    </div>