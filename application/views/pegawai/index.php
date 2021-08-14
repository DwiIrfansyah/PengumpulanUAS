<body>
<div class="col text-center">
  <h2>DATA PEGAWAI</h2>
</div>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-14">
        <div class="card">
          <div class="card-header bg-primary">
          </div>
          <div class="card-body">
            <a href="<?php echo base_url() ?>pegawai/tambah/" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <div class="row mt-2">
                  <div class="col-md-4">
                      <form action="" method="post">
                          <div class="input-group mb-2">
                                  <input type="text" class="form-control" placeholder="Cari Data Pegawai.." name="keyword">       
                                      <div class="input-group-append">
                                  <button class="btn btn-primary" type="submit">Cari</button>
                              </div>
                          </div>   
                      </form>
                  </div>
              </div>
            <div class="table-responsive">
              <?php if (empty($pegawai)) : ?>
                <div class="row">
                  <div class="col-md-14">
                    <div class="alert alert-danger" role="alert">
                      Data Pegawai Tidak Ditemukan
                    </div>
                  </div>
                </div>
              <?php endif ?>
              <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data Pegawai <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      </button>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">NIP</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">ID Golongan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($pegawai as $pegawai) {
                  ?>

                    <tr>
                      <td><?php echo $pegawai['id_pegawai'] ?></td>
                      <td><?php echo $pegawai['nip'] ?></td>
                      <td><?php echo $pegawai['nik'] ?></td>
                      <td><?php echo $pegawai['nama'] ?></td>
                      <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                      <td><?php echo $pegawai['tempat_lahir'] ?></td>
                      <td><?php echo $pegawai['tanggal_lahir'] ?></td>
                      <td><?php echo $pegawai['telepon'] ?></td>
                      <td><?php echo $pegawai['agama'] ?></td>
                      <td><?php echo $pegawai['status_nikah'] ?></td>
                      <td><?php echo $pegawai['alamat'] ?></td>
                      <td><?php echo $pegawai['id_golongan'] ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>pegawai/ubah/<?= $pegawai['id_pegawai']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>pegawai/hapus/<?= $pegawai['id_pegawai']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>
        <div class="row-mt-3">
          <div class="col">
          <a href="<?php echo base_url() ?>pegawai/index/" class="btn btn-md btn-success">TAMPIL SEMUA DATA</a>
          </div>
        </div>
      </div>