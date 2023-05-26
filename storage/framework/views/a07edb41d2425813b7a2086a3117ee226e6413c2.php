

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('experience.index')); ?>" class="btn btn-secondary">
    Kembali</a>
    </div>

    <form action="<?php echo e(route('experience.update',$data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Posisi</label>
          <input type="text"
            class="form-contro form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Posisi" value="<?php echo e($data->judul); ?>">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Perusahaan</label>
            <input type="text"
              class="form-contro form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Nama Perusahaan" value="<?php echo e($data->info1); ?>">
          </div>
          <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyy"  value="<?php echo e($data->tgl_mulai); ?>"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyy"  value="<?php echo e($data->tgl_akhir); ?>"></div>
            </div>
          </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
           <textarea class="form-control summernote" rows="5" name="isi" ><?php echo e(Session::get('isi')); ?></textarea>
          </div>

          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/experience/edit.blade.php ENDPATH**/ ?>