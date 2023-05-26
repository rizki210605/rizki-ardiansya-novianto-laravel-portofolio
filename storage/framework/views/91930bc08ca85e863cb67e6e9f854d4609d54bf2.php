

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('halaman.index')); ?>" class="btn btn-secondary">
    Kembali</a>
    </div>

    <form action="<?php echo e(route('halaman.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text"
            class="form-contro form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Judul" value="<?php echo e(Session::get('judul')); ?>">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
           <textarea class="form-control summernote" rows="5" name="isi" ><?php echo e(Session::get('isi')); ?></textarea>
          </div>

          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/halaman/create.blade.php ENDPATH**/ ?>