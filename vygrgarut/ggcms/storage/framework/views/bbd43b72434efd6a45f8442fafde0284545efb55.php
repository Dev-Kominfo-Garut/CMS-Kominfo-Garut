<!-- CALLOUT BLOCK -->
<div class="page-block <?php if(in_array($blockData->spaces, [0, 2])): ?> page-block-space-bottom <?php endif; ?> <?php if(in_array($blockData->spaces, [1, 2])): ?> page-block-space-top <?php endif; ?>">
    <div
        class="callout callout-size-<?php echo e($blockData->size); ?> background-image <?php if($blockData->fade_background === 'on'): ?> fade-background <?php endif; ?>"
        style="background-image: url(<?php echo e(imageUrl($blockData->background_image, 1600, 750, ['crop' => false])); ?>);"
    >
        <div
            class="grid-container column text-center"
            <?php if(!empty($blockData->animate)): ?> data-scrollreveal <?php endif; ?>
        >
            <?php if(!empty($blockData->title)): ?>
                <?php if($blockData->size > 1): ?> <h1> <?php else: ?> <h2> <?php endif; ?>
                    <?php echo e($blockData->title); ?>

                <?php if($blockData->size > 1): ?> </h1> <?php else: ?> </h2> <?php endif; ?>
            <?php endif; ?>

            <?php if(!empty($blockData->content)): ?>
                <p class="lead"><?php echo e($blockData->content); ?></p>
            <?php endif; ?>

            <?php if(!empty($blockData->link)): ?>
                <a href="<?php echo e($blockData->link); ?>" class="button light large">
                    <?php echo e($blockData->button_text); ?>

                </a>
            <?php endif; ?>
        </div> <!-- /.container -->
    </div> <!-- /.callout -->
</div> <!-- /.page-block -->
<!-- /.CALLOUT BLOCK -->
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/vendor/pvtl/voyager-page-blocks/src/Providers/../../resources/views/blocks/callout.blade.php ENDPATH**/ ?>