<div
    class="page-title"
    <?php if(View::hasSection('page_banner')): ?>
    style="background-image: url(<?php echo $__env->yieldContent('page_banner'); ?>)"
    <?php endif; ?>>
    <div class="grid-container">
        <h1><?php echo $__env->yieldContent('page_title'); ?></h1>
        <?php if(View::hasSection('page_subtitle')): ?>
            <p><?php echo $__env->yieldContent('page_subtitle'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php echo $__env->make('voyager-frontend::partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/page-title.blade.php ENDPATH**/ ?>