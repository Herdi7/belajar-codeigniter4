<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <form action="/Anime/save" method="post">
            <?= csrf_field(); ?>
            <input class="my-3 w-100 d-block" type="text" placeholder="nama" name="judul">
            <input class="mb-3 w-100 d-block" type="text" placeholder="produser" name="produser">
            <input class="mb-3 w-100 d-block" type="text" placeholder="img" name="img">
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
<?= $this->endSection(); ?>