

<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(route('profil.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                <?php if(get_meta_value('_foto')): ?>
                    <img style="max-width:100px;max-height:100px" src="<?php echo e(asset('foto') . '/' . get_meta_value('_foto')); ?>">
                <?php endif; ?>
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>

                  <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control sm" name="_kota" id="_kota" value="<?php echo e(get_meta_value('_kota')); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control sm" name="_provinsi" id="_provinsi"  value="<?php echo e(get_meta_value('_provinsi')); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="_nohp" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control form-control sm" name="_nohp" id="_nohp"  value="<?php echo e(get_meta_value('_nohp')); ?>">
                  </div>
                  <div class="mb-3">
                    <label for="_instagram" class="form-label">instagram</label>
                    <input type="text" class="form-control form-control sm" name="_instagram" id="_instagram"  value="<?php echo e(get_meta_value('_instagram')); ?>">
                  </div>
                  
            </div>

            <div class="col-5">
                    <h3>Account Media Socials</h3>
                    <div class="mb-3">
                        <label for="_facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control form-control sm" name="_facebook" id="_facebook"  value="<?php echo e(get_meta_value('_facebook')); ?>">
                      </div>
                      <div class="mb-3">
                        <label for="_twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control form-control sm" name="_twitter" id="_twitter"  value="<?php echo e(get_meta_value('_twitter')); ?>">
                      </div><div class="mb-3">
                        <label for="_linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control form-control sm" name="_linkedin" id="_linkedin"  value="<?php echo e(get_meta_value('_linkedin')); ?>">
                      </div><div class="mb-3">
                        <label for="_github" class="form-label">Github</label>
                        <input type="text" class="form-control form-control sm" name="_github" id="_github"  value="<?php echo e(get_meta_value('_github')); ?>">
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="_email" class="form-label">email</label>
                              <input type="text" class="form-control form-control sm" name="_email" id="_email" value="<?php echo e(get_meta_value('_email')); ?>">
                            </div>
                    
            </div>
        </div>
        

          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\laravel-portofolio\resources\views/dashboard/profil/index.blade.php ENDPATH**/ ?>