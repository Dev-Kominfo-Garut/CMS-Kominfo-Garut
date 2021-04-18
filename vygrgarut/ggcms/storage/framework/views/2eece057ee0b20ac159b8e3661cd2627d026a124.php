<!-- ONE CARD BLOCK -->
<div class="page-block <?php if(in_array($blockData->spaces, [0, 2])): ?> page-block-space-bottom <?php endif; ?> <?php if(in_array($blockData->spaces, [1, 2])): ?> page-block-space-top <?php endif; ?>">
    <div class="grid-container">
        <div class="block-image-text" <?php if(!empty($blockData->animate)): ?> data-scrollreveal <?php endif; ?>>
            <?php if(!empty($blockData->image_1) && $blockData->image_position_1 == 0): ?>
                <div class="block-image-text-img">
                    <img src="<?php echo e(imageUrl($blockData->image_1, 590, null, ['crop' => false])); ?>">
                </div> <!-- /.block-image-text-img -->
            <?php endif; ?>

            <div class="block-image-text-content">
                <?php if(!empty($blockData->title_1)): ?>
                    <h4><?php echo e($blockData->title_1); ?></h4>
                <?php endif; ?>

                <?php if(!empty($blockData->content_1)): ?>
                    <p><?php echo e($blockData->content_1); ?></p>
                <?php endif; ?>

                <?php if(!empty($blockData->link_1)): ?>
                    <a href="<?php echo e($blockData->link_1); ?>" class="button round"><?php echo e($blockData->button_text_1); ?></a>
                <?php endif; ?>
            </div> <!-- /.block-image-text-content -->

            <?php if(!empty($blockData->image_1) && $blockData->image_position_1 == 1): ?>
                <div class="block-image-text-img">
                    <img src="<?php echo e(imageUrl($blockData->image_1, 590, null, ['crop' => false])); ?>">
                </div> <!-- /.block-image-text-img -->
            <?php endif; ?>
        </div> <!-- /.block-image-text -->
    </div> <!-- /.grid-container -->
</div> <!-- /.page-block -->
<!-- /ONE CARD BLOCK -->
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/vendor/pvtl/voyager-page-blocks/src/Providers/../../resources/views/blocks/cards_one_column.blade.php ENDPATH**/ ?>