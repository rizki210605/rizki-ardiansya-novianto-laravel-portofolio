

<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(route('pengaturanhalaman.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_about">
                    <option value="">-pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php echo e(get_meta_value('_halaman_about') == $item->id ? 'selected' : ''); ?>>
                            <?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_interest">
                    <option value="">-pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php echo e(get_meta_value('_halaman_interest') == $item->id ? 'selected' : ''); ?>>
                            <?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Award</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_award">
                    <option value="">-pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php echo e(get_meta_value('_halaman_award') == $item->id ? 'selected' : ''); ?>>
                            <?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/pengaturanhalaman/index.blade.php ENDPATH**/ ?>