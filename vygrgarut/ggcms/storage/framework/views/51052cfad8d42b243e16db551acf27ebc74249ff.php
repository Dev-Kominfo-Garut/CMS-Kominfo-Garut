<div class="off-canvas position-right tetews"  id="offCanvas" data-off-canvas data-transition="push">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu" data-dropdown-menu>
        <?php echo e(menu('primary', 'voyager-frontend::partials.menu-left')); ?>

    </ul>

    <hr>

    <ul class="vertical menu">
        <?php echo $__env->make('voyager-frontend::partials.menu-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>

    <hr>

    <ul class="menu social-icons align-center">
        <?php echo e(menu('social', 'voyager-frontend::partials.social')); ?>

    </ul>
</div>
    <div data-sticky-container >
        <div class="top-bar" data-sticky data-margin-top="0">
            <div class="top-bar-left">
                <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas" style="color:#fdfdfd">
                    <i class="fas fa-bars"></i> <span>Menu</span>
                </a>

                <a href="/pencarian" class="search-icon-mobile float-right hide-for-medium" style="color:#fdfdfd">
                    <i class="fas fa-search"></i>
                </a>

                <div class="header-logo float-left">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="/storage/<?php echo e(setting('site.logo')); ?>" alt="<?php echo e(setting('site.title')); ?>" title="<?php echo e(setting('site.title')); ?>" />
                    </a>
                </div>

                <ul class="dropdown menu show-for-medium" data-dropdown-menu>
                    <?php echo e(menu('primary', 'voyager-frontend::partials.menu-left')); ?>

                </ul> <!-- /.menu -->
            </div>

	    <div class="top-bar-right show-for-medium">
		<ul class="dropdown menu" data-dropdown-menu>
                    <?php echo $__env->make('voyager-frontend::partials.menu-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/header.blade.php ENDPATH**/ ?>