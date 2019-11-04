<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <h3>Buat Channel</h3>
                </div>
            </div>
            <form action="">
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Nama</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" value="S1 Agroteknologi Gunadarma">
                            <small id="namaHelp" class="form-text text-muted">Terdapat 20 channel serupa <a href="">Lihat</a></small>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Tambahkan Teman</label>
                            <select class="form-control selectpicker" id="select-friend" data-live-search="true">
                                <option>Mochammad Fariz Syah L</option>
                                <option>Dheo Prasetyo Nugroho</option>
                                <option>Rafif Favian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight:bold;">Tag</label>
                            <input type="tag" class="form-control" id="tag" aria-describedby="judulHelp" value="Paralelisasi Algoritma Sieve of Erathostenes">
                            <small id="emailHelp" class="form-text text-muted">Pisahkan Tag dengan koma. Ex : Komputer, Algoritma, Basis Data</small>
                        </div>
                        <button type="button" class="btn btn-primary" style="float:right; width:25%;">Buat Channel</button>      
                    </div>
                </div>
            </form>
            <div class="row mt-2">
                <a href="/home" class="btn btn-primary" style="float:right; width:25%;">Kembali</a>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\formAline\resources\views/modul/create_channel.blade.php ENDPATH**/ ?>