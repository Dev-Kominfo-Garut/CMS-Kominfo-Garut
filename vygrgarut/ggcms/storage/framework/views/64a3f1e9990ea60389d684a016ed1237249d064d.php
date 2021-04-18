<?php if(isset($breadcrumbs) && count($breadcrumbs) > 1): ?>
    <div class="breadcrumbs-container background-color-lightgray">
        <div class="grid-container">
            <div class="vspace-1"></div>

            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php if(($key + 1) === count($breadcrumbs)): ?>
                                <span class="breadcrumb"><?php echo e($crumb['text']); ?></span>
                            <?php else: ?>
                                <a class="breadcrumb" href="<?php echo e($crumb['link']); ?>"><?php echo e($crumb['text']); ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </nav>

            <div class="vspace-1"></div>
        </div> <!-- /.grid-container -->
    </div> <!-- /.breadcrumbs-container -->
<?php endif; ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/breadcrumbs.blade.php ENDPATH**/ ?>