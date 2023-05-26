<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('home')); ?>/css/styles.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
          
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?php echo e($about->judul); ?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo e(asset('foto')."/". get_meta_value('_foto')); ?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo set_about_nama($about->judul); ?>

                        
                    </h1>
                    <div class="subheading mb-5">
                        <?php echo e(get_meta_value('_kota')); ?> | <?php echo e(get_meta_value('_provinsi')); ?> |
                        <?php echo e(get_meta_value('_nohp')); ?> |<a href="<?php echo e(get_meta_value('_email')); ?>"><?php echo e(get_meta_value('_email')); ?> </a>
                        
                    </div>
                    <div class="lead mb-5"><?php echo $about->isi; ?></div>
                    <div class="social-icons">
                        <a class="social-icon" href="<?php echo e(get_meta_value('_linkedin')); ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="<?php echo e(get_meta_value('_github')); ?>"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="<?php echo e(get_meta_value('_twitter')); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="<?php echo e(get_meta_value('_facebook')); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="<?php echo e(get_meta_value('_instagram')); ?>"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php $__currentLoopData = $experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo e($item->judul); ?></h3>
                            <div class="subheading mb-3"><?php echo e($item->info1); ?></div>
                            <p><?php echo $item->isi; ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo e($item->tgl_mulai_indo); ?> | <?php echo e($item->tgl_akhir_indo); ?></span></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo e($item->judul); ?></h3>
                            <div class="subheading mb-3"><?php echo e($item->info1); ?></div>
                            <div><?php echo e($item->info2); ?></div>
                            <p><?php echo e($item->info3); ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo e($item->tgl_mulai_indo); ?> | <?php echo e($item->tgl_akhir_indo); ?></span></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                    <?php $__currentLoopData = explode(', ',get_meta_value('_language')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-inline-item"><i class="devicon-<?php echo e(strtolower($item)); ?>-plain"></i></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <?php echo set_list_workflow(get_meta_value('_workflow')); ?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php echo e($interest->judul); ?></h2>
                    <?php echo $interest->isi; ?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php echo e($award->judul); ?></h2>
                    <?php echo set_list_award($award->isi); ?>

                    
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('home')); ?>/js/scripts.js"></script>
    </body>
</html>
<?php /**PATH B:\laravel-portofolio\resources\views/home/index.blade.php ENDPATH**/ ?>