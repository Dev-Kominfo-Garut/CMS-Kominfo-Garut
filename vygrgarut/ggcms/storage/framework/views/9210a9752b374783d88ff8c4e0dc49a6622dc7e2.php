     <?php echo app('arrilot.widget')->run('ModalEvents'); ?>;
     <footer class="top-footer">
         <div class="grid-container full" style="padding-left:1rem;padding-right:1rem;">
             <div class="grid-x" style="color:white;">

                 <div class="columns small-4 large-2 medium-text-left">
                     <img src="/storage/<?php echo e(setting('site.logo')); ?>"><br>
                     <?php echo e(setting('site.address')); ?>


                 </div>
                 <div class="columns small-4 large-7 medium-text-center" style="padding-left:15px">
                     <!-- ... -->
                     <a onclick="window.open('<?php echo e(setting('site.link_facebook')); ?>');" href="#"
                         style="color:white"><img src="/storage/settings/April2021/fb.png" width="16px">
                         <?php echo e(setting('site.facebook')); ?></a>
                     <a onclick="window.open('<?php echo e(setting('site.link_instagram')); ?>');" href="#"
                         style="color:white"><img src="/storage/settings/April2021/ig.png" width="16px">
                         <?php echo e(setting('site.instagram')); ?></a>
                     <a onclick="window.open('<?php echo e(setting('site.link_twitter')); ?>');" href="#" style="color:white"><img
                             src="/storage/settings/April2021/twitter.png" width="16px">
                         <?php echo e(setting('site.twitter')); ?></a>
                     <a onclick="window.open('<?php echo e(setting('site.link_youtube')); ?>');" href="#" style="color:white"><img
                             src="/storage/settings/April2021/yt.png" width="16px"> <?php echo e(setting('site.youtube')); ?></a>
                     <br>
                     <div class="grid-x" style="color:white;">
                         <div class="columns small-6 large-6 medium-text-center">
                         </div>
                         <div class="columns small-6 large-6 medium-text-center">
                             <pre class='medium-text-justify'><?php
                                 $dc = exec('cat /home/ubuntu/awstatall.log', $red);
                                 foreach ($red as $rd) {
                                     echo $rd . "\n";
                                 }
                             ?>
<?php
$xc = exec('cat /home/ubuntu/awstat.log', $res);
foreach ($res as $r) {
    echo $r . "\n";
}
?>/pre>
      </div>
     </div>
    
    </div>
    <div class="columns small-4 large-3 medium-text-right" style="padding-left:15px"><!-- ... -->
    
    <div class="map-responsive">
    <?php echo setting('site.map'); ?>

</div>
    </div>
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>
 
<script src="<?php echo e(url('/')); ?>/js/app.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/partials/footer.blade.php ENDPATH**/ ?>