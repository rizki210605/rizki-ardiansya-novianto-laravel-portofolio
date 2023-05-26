

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary">
    Kembali</a>
    </div>

    <form action="<?php echo e(route('education.update',$data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Universitas</label>
          <input type="text"
            class="form-contro form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Universitas" value="<?php echo e($data->judul); ?>">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input type="text"
              class="form-contro form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Nama Fakultas" value="<?php echo e($data->info1); ?>">
          </div>
          <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input type="text"
              class="form-contro form-control-sm" name="info2" id="info2" aria-describedby="helpId" placeholder="Nama Prodi" value="<?php echo e($data->info2); ?>">
          </div>
          <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input type="text"
              class="form-contro form-control-sm" name="info3" id="info3" aria-describedby="helpId" placeholder="IPK" value="<?php echo e($data->info3); ?>">
          </div>
          <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyy"  value="<?php echo e($data->tgl_mulai); ?>"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyy"  value="<?php echo e($data->tgl_akhir); ?>"></div>
            </div>
          </div>
          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/education/edit.blade.php ENDPATH**/ ?>