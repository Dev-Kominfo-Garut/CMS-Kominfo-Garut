<!-- ONE COLUMN BLOCK -->
<div class="page-block <?php if(in_array($blockData->spaces, [0, 2])): ?> page-block-space-bottom <?php endif; ?> <?php if(in_array($blockData->spaces, [1, 2])): ?> page-block-space-top <?php endif; ?>">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12" <?php if(!empty($blockData->animate)): ?> data-scrollreveal <?php endif; ?>>
                <?php echo $blockData->html_content_1; ?>

            </div> <!-- /.cell -->
        </div> <!-- /.grid -->
    </div> <!-- /.container -->
</div> <!-- /.page-block -->
<!-- /ONE COLUMN BLOCK --><?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/vendor/pvtl/voyager-page-blocks/src/Providers/../../resources/views/blocks/content_one_column.blade.php ENDPATH**/ ?>