<?php $__env->startSection('meta_title', '404'); ?>
<?php $__env->startSection('meta_description', '404'); ?>
<?php $__env->startSection('page_title', '404'); ?>

<?php $__env->startSection('content'); ?>
    <div class="vspace-5"></div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12">
                <h2 class="text-center">Sorry, the page you are looking for could not be found.</h2>
            </div>
        </div>
    </div>

    <div class="vspace-5"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager-frontend::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/errors/404.blade.php ENDPATH**/ ?>