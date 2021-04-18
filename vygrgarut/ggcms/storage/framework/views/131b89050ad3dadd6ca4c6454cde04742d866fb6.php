<?php $__env->startSection('content'); ?>
    <form class="register-form" method="POST" action="<?php echo e(route('voyager-frontend.account')); ?>">
        <?php echo csrf_field(); ?>

        <div class="grid-container">
            <div class="grid-x grid-padding-y">
                <div class="medium-6 medium-offset-3 cell email">
                    <h4 class="text-center">Update Account</h4>

                    <?php if(!empty(session('alert-type'))): ?>
                        <div class="callout small success text-center">
                            <p><?php echo e(session('message')); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if(!empty($errors) && $errors->has('name')): ?>
                        <div class="callout small alert text-center" id="nameHelpText">
                            <p><?php echo e($errors->first('name')); ?></p>
                        </div>
                    <?php endif; ?>

                    <label for="email">
                        Name
                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" aria-describedby="nameHelpText" required autofocus>
                    </label>

                    <?php if(!empty($errors) && $errors->has('email')): ?>
                        <div class="callout small alert text-center" id="emailHelpText">
                            <p><?php echo e($errors->first('email')); ?></p>
                        </div>
                    <?php endif; ?>

                    <label for="email">
                        E-Mail Address
                        <input id="email" type="email" name="email" value="<?php echo e($user->email); ?>" aria-describedby="emailHelpText" required>
                    </label>

                    <?php if(!empty($errors) && $errors->has('password')): ?>
                        <div class="callout small alert text-center" id="passwordHelpText">
                            <p><?php echo e($errors->first('password')); ?></p>
                        </div>
                    <?php endif; ?>

                    <label for="password">
                        Password
                        <input id="password" type="password" name="password" aria-describedby="passwordHelpText">
                    </label>

                    <label for="password-confirm">
                        Confirm Password
                        <input id="password-confirm" type="password" name="password_confirmation">
                    </label>

                    <button type="submit" class="button expanded">Update</button>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager-frontend::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/auth/account.blade.php ENDPATH**/ ?>