<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($hasChildren = count($menu_item->children) > 0); ?>
    <li>
        <a href="<?php echo e($menu_item->link()); ?>"><?php echo e($menu_item->title); ?></a>
        <?php if($hasChildren): ?>
            <ul class="menu">
                <?php echo $__env->make('voyager-frontend::partials.menu-left', ['items' => $menu_item->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/menu-left.blade.php ENDPATH**/ ?>