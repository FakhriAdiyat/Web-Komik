<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact</h1>
             <p>Anda bisa menghubungi kami di amezorakomik@gmail.com</p>
             <h1>Alamat</h1>
             <ul>
                 <?php foreach ($alamat as $a): ?>
                 <li><?= $a['jalan'] ?>, <?= $a['kota'] ?></li>
                 <?php endforeach; ?>
             </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>