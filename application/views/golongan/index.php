<body>
  <div class="col text-center">
  <h2>DATA GOLONGAN</h2>
  </div>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-14">
        <div class="card">
          <div class="card-header bg-primary">
          </div>
          <div class="card-body">
            <a href="<?php echo base_url() ?>golongan/tambah/" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <div class="row mt-2">
                  <div class="col-md-4">
                      <form action="" method="post">
                          <div class="input-group mb-2">
                                  <input type="text" class="form-control" placeholder="Cari Data Golongan.." name="keyword">       
                                      <div class="input-group-append">
                                  <button class="btn btn-primary" type="submit">Cari</button>
                              </div>
                          </div>   
                      </form>
                  </div>
              </div>
            <div class="table-responsive">
              <?php if (empty($golongan)) : ?>
                <div class="row">
                  <div class="col-md-14">
                    <div class="alert alert-danger" role="alert">
                      Data Golongan Tidak Ditemukan
                    </div>
                  </div>
                </div>
              <?php endif ?>
              <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data Golongan <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      </button>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID Golongan</th>
                    <th scope="col">Nama Golongan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tunjangan Istri</th>
                    <th scope="col">Tunjangan anak</th>
                    <th scope="col">Tunjangan Transport</th>
                    <th scope="col">Tunjangan Makan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($golongan as $golongan) {
                  ?>

                    <tr>
                      <td><?php echo $golongan['id_golongan'] ?></td>
                      <td><?php echo $golongan['nama_golongan'] ?></td>
                      <td><?php echo $golongan['gaji_pokok'] ?></td>
                      <td><?php echo $golongan['tunjangan_istri'] ?></td>
                      <td><?php echo $golongan['tunjangan_anak'] ?></td>
                      <td><?php echo $golongan['tunjangan_transport'] ?></td>
                      <td><?php echo $golongan['tunjangan_makan'] ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>golongan/ubah/<?= $golongan['id_golongan']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>golongan/hapus/<?= $golongan['id_golongan']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
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
          <a href="<?php echo base_url() ?>golongan/index/" class="btn btn-md btn-success">TAMPIL SEMUA DATA</a>
          </div>
        </div>
      </div>