<footer class="app-footer">
    <div class="site-footer-right">
        <?php if(rand(1,100) == 100): ?>
            <i class="voyager-rum-1"></i> <?php echo e(__('voyager::theme.footer_copyright2')); ?>

        <?php else: ?>
            <?php echo __('voyager::theme.footer_copyright'); ?> <a href="#" target="_blank">Motekar Labs</a>
        <?php endif; ?>
        <?php $version = Voyager::getVersion(); ?>
        <?php if(!empty($version)): ?>
            - <?php echo e($version); ?>

        <?php endif; ?>
    </div>
</footer>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager/partials/app-footer.blade.php ENDPATH**/ ?>