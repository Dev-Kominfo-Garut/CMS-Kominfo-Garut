<?php $__env->startSection('meta_title', $post->title); ?>
<?php $__env->startSection('meta_description', $post->meta_description); ?>
<?php $__env->startSection('page_title', $post->title); ?>
<?php $__env->startSection('page_subtitle', 'Posted at : ' . $post->created_at->format('j M Y')); ?>
<?php $__env->startSection('page_banner'); ?>

<?php $__env->startSection('content'); ?>
<style>
.page-title {
	/* background-image: linear-gradient(<?php echo e(setting('site.color_1')); ?>, #151515), url(/storage/<?php echo $post->image; ?>); */ 
	background-image: linear-gradient(rgba(34, 34, 34, 0.9), rgba(240, 240, 240, 0.6)), url(/storage/<?php echo $post->image; ?>);
}
</style>
<div
    class="page-title"
    <?php if(View::hasSection('page_banner')): ?>
    style="background-image: url(<?php echo $__env->yieldContent('page_banner'); ?>)"
    <?php endif; ?>>
    <div class="grid-container">
        <h5><?php echo $__env->yieldContent('page_title'); ?></h5>
        <?php if(View::hasSection('page_subtitle')): ?>
            <p><?php echo $__env->yieldContent('page_subtitle'); ?></p>
        <?php endif; ?>
    </div>
</div>

    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="sharethis-inline-share-buttons"></div>
            <div class="cell small-12">
                <?php echo $post->body; ?>


                <?php if($relatedPosts): ?>
                    <div class="vspace-1"></div>
                    <hr />

                    <h2 class="text-center">Artikel Terkait</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php echo $__env->make('voyager-frontend::modules.posts.posts-grid', ['posts' => $relatedPosts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="vspace-2"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager-frontend::layouts.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/posts/post.blade.php ENDPATH**/ ?>