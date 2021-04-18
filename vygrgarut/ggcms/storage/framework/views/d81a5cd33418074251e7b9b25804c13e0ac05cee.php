<li class="hide-for-small-only">
    <a href="/pencarian">
        <i class="fas fa-search"></i>
    </a>
</li>
<?php if(Auth::guest()): ?>
    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
<?php else: ?>
    <li>
        <a href="#">My Account</a>
        <ul class="menu">
            <?php echo e(menu('user','voyager-frontend::partials.social')); ?>

            <li>
                <a href="<?php echo e(route('voyager-frontend.account')); ?>">Update Account</a>
            </li>
            <li>
                <?php if(Session::has('original_user.id')): ?>
                    <a href="#"
                       onclick="document.getElementById('impersonate-form').submit();return false;">
                        Switch back to <?php echo e(Session::get('original_user.name')); ?>

                    </a>
                    <form id="impersonate-form"
                          action="<?php echo e(route('voyager-frontend.account.impersonate', Session::get('original_user.id'))); ?>"
                          method="POST"
                          style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php else: ?>
                    <a href="#" onclick="document.getElementById('logout-form').submit();return false;">
                        Logout
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </li>
        </ul>
    </li>
<?php endif; ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/menu-right.blade.php ENDPATH**/ ?>