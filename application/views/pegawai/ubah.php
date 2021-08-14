<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    EDIT DATA PEGAWAI
             <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                         <?= validation_errors(); ?>
                    </div>
                <?php  endif; ?>    
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_pegawai" value="<?php echo $pegawai['id_pegawai']; ?>">
                        <div class="form-group">
                            <label for="id_pegawai">ID Pegawai</label>
                            <input type="text" name="id_pegawai" placeholder="Masukkan ID Pegawai" class="form-control" value="<?= $pegawai['id_pegawai']; ?>">
                            <div class="form-text text-danger"><?= form_error('id_pegawai'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" placeholder="Masukkan NIP" class="form-control" value="<?= $pegawai['nip']; ?>">
                            <div class="form-text text-danger"><?= form_error('nip'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK" class="form-control" value="<?= $pegawai['nik']; ?>">
                            <div class="form-text text-danger"><?= form_error('nik'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="nama">Nama Pegawai</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama Pegawai" class="form-control" value="<?= $pegawai['nama']; ?>">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        <hr>
                        <div>
                            <div class="form-group mt-3">
                                <label>Jenis Kelamin</label>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mt-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="<?= $pegawai['tempat_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tempat_lahir'); ?></div>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $pegawai['tanggal_lahir']; ?>">
                            <div class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="text" name="telepon" id="telepon" placeholder="Masukkan Nomor Telepon" class="form-control" value="<?= $pegawai['telepon']; ?>">
                            <div class="form-text text-danger"><?= form_error('telepon'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" id="agama" placeholder="Masukkan Agama" class="form-control" value="<?= $pegawai['agama']; ?>">
                            <div class="form-text text-danger"><?= form_error('agama'); ?></div>
                        </div>
                        <hr>
                        <div>
                            <div class="form-group mt-3">
                                <label>Status Pernikahan</label>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" value="belum nikah">
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Belum Menikah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" value="nikah">
                                    <label class="form-check-label" for="status_nikah">
                                        Sudah Menikah
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Nomor Alamat" class="form-control" value="<?= $pegawai['alamat']; ?>">
                            <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="id_golongan">ID Golongan</label>
                            <input type="text" name="id_golongan" id="id_golongan" placeholder="Masukkan ID Golongan" class="form-control" value="<?= $pegawai['id_golongan']; ?>">
                            <div class="form-text text-danger"><?= form_error('id_golongan'); ?></div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
                        <a href="<?php echo base_url() ?>pegawai/index" class="btn btn-md btn-secondary float-end">KEMBALI</a>
                    </form>

                </div>
            </div>
            <br>
        </div>
    </div>
</div>