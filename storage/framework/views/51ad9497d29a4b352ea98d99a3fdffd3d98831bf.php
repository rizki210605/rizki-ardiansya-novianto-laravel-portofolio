

<?php $__env->startSection('konten'); ?>
        
    <form action="<?php echo e(route('skill.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="judul" class="form-label">Programing Languages & Tools</label>
          <input type="text"
            class="form-contro form-control-sm skill" name="_language" id="judul" aria-describedby="helpId" placeholder="Programing Language & Tools" value="<?php echo e(get_meta_value('_language')); ?>">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">WorkFlow</label>
           <textarea class="form-control summernote" rows="5" name="_workflow" ><?php echo e(get_meta_value('_workflow')); ?></textarea>
          </div>

          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('child-scripts'); ?>
<script>
    $(document).ready(function() {
        $('.skill').tokenfield({
            autocomplete: {
                source: [<?php echo $skill; ?>],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    });
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/skill/index.blade.php ENDPATH**/ ?>