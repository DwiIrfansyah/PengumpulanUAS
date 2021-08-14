<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA GOLONGAN
                    <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                         <?= validation_errors(); ?>
                    </div>
                <?php  endif; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                    
                        <div class="form-group">
                            <label for="id_golongan">ID Golongan</label>
                            <input type="text" name="id_golongan" placeholder="Masukkan ID Golongan" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_golongan'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_golongan">Nama Golongan</label>
                            <input type="text" name="nama_golongan" placeholder="Masukkan Nama Golongan" class="form-control">
                            <div class="form-text text-danger"><?= form_error('nama_golongan'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok" placeholder="Jumlah Gaji Pokok" class="form-control">
                            <div class="form-text text-danger"><?= form_error('gaji_pokok'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="tunjangan_istri">Tunjangan Istri</label>
                            <input type="text" name="tunjangan_istri" placeholder="Jumlah Tunjangan Istri" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tunjangan_istri'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="tunjangan_anak">Tunjangan Anak</label>
                            <input type="text" name="tunjangan_anak" placeholder="Jumlah Tunjangan Anak" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tunjangan_astri'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="tunjangan_transport">Tunjangan Transport</label>
                            <input type="text" name="tunjangan_transport" placeholder="Jumlah Tunjangan Transport" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tunjangan_transport'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="tunjangan_makan">Tunjangan Makan</label>
                            <input type="text" name="tunjangan_makan" placeholder="Jumlah Tunjangan Makan" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tunjangan_makan'); ?></div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
                        <a href="<?php echo base_url() ?>golongan/index" class="btn btn-md btn-secondary float-end">KEMBALI</a>
                    </form>

                </div>
            </div>
            <br>
        </div>
    </div>
</div>