
<?php if(empty($posts)): ?>
    <p>There are currently no posts.</p>
<?php else: ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <li><a href="<?php echo e(route('voyager-blog-custom.blog.post', ['category' => $post->category->slug,'slug' => $post->slug])); ?>" style="color:black"><?php echo e($post->title); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/posts/posts-url.blade.php ENDPATH**/ ?>