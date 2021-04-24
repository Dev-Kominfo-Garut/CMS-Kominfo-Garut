<?php $__env->startSection('meta_title', 'Blog Posts'); ?>
<?php $__env->startSection('meta_description', 'Blog Posts'); ?>
<?php $__env->startSection('page_title', 'Blog Posts'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('voyager-frontend::partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="vspace-2"></div>
    <div class="grid-container">
    <form id="search-form" action="/pencarian" method="GET">
        <div class="input-group">
            <input class="input-group-field" name="q" type="search" value="<?php echo e(\Request::get('q')); ?>" placeholder="Pencarian berita"/>
            <div class="input-group-button">
                <input type="submit" class="button dark" value="Search">
            </div>
        </div>
    </form>
    </div>

    <?php if($featuredPost): ?>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12">
                    <div class="block-image-text">
                        <?php if(!empty($featuredPost->image)): ?>
                            <a href="<?php echo e(route('voyager-frontend.posts.post', ['slug' => $featuredPost->slug])); ?>"
                               class="block-image-text-img"
                            >
                                <img src="<?php echo e(imageUrl($featuredPost->image, 585, 390)); ?>">
                            </a>
                        <?php endif; ?>

                        <div class="block-image-text-content">
                            <?php if(!empty($featuredPost->title)): ?>
                                <h4><?php echo e($featuredPost->title); ?></h4>
                            <?php endif; ?>

                            <?php if(!empty($featuredPost->excerpt)): ?>
                                <p><?php echo e($featuredPost->excerpt); ?></p>
                            <?php endif; ?>

                            <a href="<?php echo e(route('voyager-frontend.posts.post', ['slug' => $featuredPost->slug])); ?>"
                               class="button round"
                            >
                                Read Post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php echo $__env->make('voyager-frontend::modules.posts.posts-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager-frontend::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/modules/posts/search.blade.php ENDPATH**/ ?>