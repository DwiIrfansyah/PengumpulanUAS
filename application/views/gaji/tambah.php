<div class="container" style="margin-top: 30px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA GAJI
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
                            <label for="id_gaji">ID Gaji</label>
                            <input type="text" name="id_gaji" placeholder="Masukkan ID Gaji" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_gaji'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" placeholder="Masukan Tanggal" class="form-control">
                            <div class="form-text text-danger"><?= form_error('tanggal'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="id_pegawai">ID Pegawai</label>
                            <input type="text" name="id_pegawai" placeholder="Masukan ID Pegawai" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_pegawai'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="id_golongan">ID Golongan</label>
                            <input type="text" name="id_golongan" placeholder="Masukkan ID Golongan" class="form-control">
                            <div class="form-text text-danger"><?= form_error('id_golongan'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_gaji">Gaji Pokok</label>
                            <input type="text" name="jumlah_gaji" placeholder="Masukan Gaji Pokok" class="form-control">
                            <div class="form-text text-danger"><?= form_error('jumlah_gaji'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="total_gaji">Total Gaji</label>
                            <input type="text" name="total_gaji" placeholder="Masukan Total Gaji" class="form-control">
                            <div class="form-text text-danger"><?= form_error('total_gaji'); ?></div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
                        <a href="<?php echo base_url() ?>gaji/index" class="btn btn-md btn-secondary float-end">KEMBALI</a>
                    </form>

                </div>
            </div>
            <br>
        </div>
    </div>
</div>