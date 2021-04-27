<div class="vspace-2"></div>

<div class="grid-container">
    <div class="cell small-12">
        <div class="grid-x grid-padding-x">
            <?php if(empty($posts)): ?>
                <p>There are currently no posts.</p>
            <?php else: ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cell small-12 medium-4 large-4">
                        <div class="card">
                            <a href="<?php echo e(route('voyager-blog-custom.blog.post', ['category' => $post->category->slug,'slug' => $post->slug])); ?>">
                                <img src="<?php echo e(imageUrl($post->image, 260, 175)); ?>" style="width: 100%">
                            </a>
                            <div class="card-section" style="height: 250px;">
                                <span class="label secondary">
                                    <?php echo e($post->created_at->format('M. jS Y')); ?>

                                </span>
                                <a href="<?php echo e(route('voyager-blog-custom.blog.post', ['category' => $post->category->slug,'slug' => $post->slug])); ?>">
                                    <h5><?php echo e($post->title); ?></h5>
                                </a>
                                <?php if($post->excerpt): ?>
                                    <p><?php echo e(Illuminate\Support\Str::limit($post->excerpt, 100)); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="vspace-1"></div>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/posts/posts-grid.blade.php ENDPATH**/ ?>