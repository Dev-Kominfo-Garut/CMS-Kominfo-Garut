<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!empty($block->html)): ?>
        <?php echo (string)$block->html ?>
    <?php else: ?>
        <div class="page-block">
            <div class="callout alert">
                <div class="grid-container column text-center">
                    <h2><< !! Warning: Missing Block !! >></h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/vendor/pvtl/voyager-page-blocks/src/Providers/../../resources/views/default.blade.php ENDPATH**/ ?>