<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-5">Contact</h2>
            <?php foreach ($alamat as $a) : ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['tipe']; ?></h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?= $a['alamat']; ?><br>
                            <i class="fas fa-city"></i> <strong>City:</strong> <?= $a['kota']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
