<?php echo $__env->make('voyager-frontend::partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('voyager-frontend::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('voyager-frontend::partials.page-title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="main-content">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="vspace-2"></div>
            <div class="cell small-12 medium-9">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <div class="cell small-12 medium-3 sidebar">

                <div class="card">
                    <img alt="" src="https://images.unsplash.com/photo-1473800447596-01729482b8eb?auto=format&fit=crop&w=500&q=50">
                    <div class="card-section">
                        <h4>Artikel Terkait</h4>
                        <ul class="vertical menu">
                            <?php echo $__env->make('voyager-frontend::modules.posts.posts-url', ['posts' => $relatedPosts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </ul>
                </div>
            </div>
        </div>

        <div class="vspace-2"></div>
    </div>
</main>

<?php echo $__env->make('voyager-frontend::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/layouts/sidebar-right.blade.php ENDPATH**/ ?>