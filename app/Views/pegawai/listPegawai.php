<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">   
    <div class="col-12">
        <div class="col-7 mx-auto">
            <form action="/Pegawai" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari disini!" name="input-cari">
                    <button  class="input-group-text btn btn-primary" name="btn-cari" type="submit">Cari</button>
                </div>  
            </form>
        </div>
        <div class="col-12">
            <div class="list-group list-group-numbered">
                <?php foreach( $pegawai as $p ) : ?>
                <a href="#" class="list-group-item list-group-item-action"><?= $i; ?>. <?= $p['name']; ?></a>
                <?php $i++;?>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- link pagination -->
        <?= $pager->links('default', 'custom_pager'); ?>
    </div>
</div>

<?= $this->endSection(); ?>