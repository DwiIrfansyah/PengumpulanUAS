<main class="form-signin">

    <form class="user" method="post" action="<?= base_url('auth') ?>">
        <center>
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </center>
        <?= $this->session->flashdata('pesan'); ?>
        <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?= set_value('username'); ?>">
            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <center>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 - Restohelper v1.0</p>
        </center>
    </form>

</main>