<?php $__env->startSection('content'); ?>

<title>Tambah Data Pegawai</title>
<div class="container">
<h1 class="mt-4">Tambah Data Pegawai</h1>
        <div class="card">
            <div class="card-body">
            <form method="POST" action="<?php echo e(route('createDataPegawai')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    <a href="<?php echo e(url('')); ?>"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                </form>
            </div>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_lanjut\resources\views/mahasiswa/tambah.blade.php ENDPATH**/ ?>