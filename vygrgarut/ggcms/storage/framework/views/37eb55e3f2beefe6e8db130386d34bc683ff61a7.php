<?php if (empty($layout)) $layout = 'default'; ?>

<?php $__env->startSection('meta_title', $page->title); ?>
<?php $__env->startSection('meta_description', $page->meta_description); ?>
<?php $__env->startSection('page_title', $page->title); ?>
<?php $__env->startSection('page_banner', imageUrl($page->image, 1200, 211)); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $page->body; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager-frontend::layouts.' . $layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/pages/default.blade.php ENDPATH**/ ?>