<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="mt-3 text-center">MY HOBBY</h1>
        <a href="" class="btn btn "></a>
        <h4 class="mt-3 text-center">(MY HOBBY IS READING VARIOUS KINDS OF COMICS)</h4>
        <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="text-center">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($komik as $k) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td class="text-center"><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                        <td><?= $k['judul']; ?></td>
                        <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a></td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- Tambahkan baris lainnya di sini jika diperlukan -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
