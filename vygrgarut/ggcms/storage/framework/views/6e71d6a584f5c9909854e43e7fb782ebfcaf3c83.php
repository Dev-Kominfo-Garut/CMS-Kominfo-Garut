<?php echo $__env->make('voyager-frontend::partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('voyager-frontend::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
.wide-article-link {
  background-color: #f6f6f6;
  padding: 1rem 1rem 0.5rem;
  border-bottom: 2px solid <?php echo e(setting('site.color_1')); ?>;
  margin-bottom: 1rem;
}

.wide-article-link .article-title a {
  color: <?php echo e(setting('site.color_1')); ?>;
}

.wide-article-link .article-title a:hover, .wide-article-link .article-title a:focus {
  color: <?php echo e(setting('site.color_1')); ?>;
}

.wide-article-link .article-elipsis .read-more {
  font-weight: bold;
  color: <?php echo e(setting('site.color_1')); ?>;
}

.wide-article-link .article-title,
.wide-article-link .article-author,
.wide-article-link .article-elipsis {
  margin-bottom: 0.25rem;
  color: #454545;
}

.splide__arrow {
	background:transparent;
}

h5{ color:<?php echo e(setting('site.color_1')); ?>; font-weight: bold; font-size: 1.1rem;}

#gpr-kominfo-widget-container {
      height: 600px!important;
	  background-color: #f6f6f6!important;
	  border-top: 1px solid #f6f6f6!important;
    }

    #gpr-kominfo-widget-body {
      overflow: auto;
      height: 600px!important;
      background-color:#f6f6f6!important;  
    }

    #gpr-kominfo-widget-footer{
      display: none!important;
    }
    #gpr-kominfo-widget-header{
      display: none!important;
    }

.img-responsive {
    display: block;
    max-width: 100%;
    height: 90vh;
}
.orbit-next, .orbit-previous {top:43%}
</style>


<main class="main-content">
<div class='grid-container full'>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls" style='bottom:100px;'>
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
	<ul class="orbit-container">
	<?php
	$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 11)->get();
	$z = 0;
	
	foreach($pengPost as $result){
		$x = "/storage/" . $result['image'];
		// $x = "/storage/resized/-260x175/" . substr($result['image'],1);
		$y = $result['title'];
		$a = $result['slug'];
		if($z == 1){
		echo "
			<li class='is-active orbit-slide'>
		";
			
		}else{
		echo "
		<li class='orbit-slide'>
		";

		}
		echo "
			<figure class='orbit-figure'>
				<img class='orbit-image img-responsive oorbit-custom' src='$x'>
			</figure>
		</li>";
	}
	?>
	</ul>
  </div>
		<marquee style="color: white;bottom: 40px;opacity: 0.7;position: absolute;padding-bottom: 20px;background-color:<?php echo e(setting('site.color_1')); ?>;"><br>
			<?php
				$blogPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 14)->orderBy('published_date','desc')->limit(3)->get();
				foreach($blogPost as $result){
					$x = $result['excerpt'];
					echo $x . "<em> | </em>";
				}
			?>
			<br>
		</marquee>
        <nav class="orbit-bullets" style='bottom:110px; opacity:0.8;'>
        <?php
        $pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 11)->get();
        $x = -1;
        foreach($pengPost as $result){
                $x = $x+1;
                if($x == 0){
                echo "
                        <button class='is-active' data-slide='$x'><span class='show-for-sr'></span></button>
                ";

                }else{
                echo "
                        <button data-slide='$x'><span class='show-for-sr'></span></button>
                ";

                }
        }
        ?>
        </nav>
</div>
</div>


<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-8 text-center medium-text-left">
			<h5>Berita</h5><hr>
			<?php	
				$blogPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 3)->orderBy('published_date','desc')->limit(3)->get();
				// var_dump($blogPost);
				foreach($blogPost as $result){
					// $x = "/storage/resized/-260x175/" . substr($result['image'],1);
					$x = "/storage/".$result['image'];
					echo "<div class='wide-article-link'>";
						echo "<h5 class='article-title'>";
						echo "<a href='/blog/berita/" . $result['slug'] . "'>";
						echo $result['title'];
						echo "</a>";
						echo "</h5>";
					echo "<div class='container'>";
						echo "<div class='grid-x'>";
						echo "<div class='cell medium-3'>";
						echo "<img src='$x' style='width: 100%'>";
						echo "</div>";
						echo "<div class='cell medium-1' style='width:15px'>";
						echo "</div>";
						echo "<div class='cell medium-8'>";
						echo "<p class='article-author'><i class='fa fa-calendar-alt'></i> <em>" . substr($result['published_date'],0,10) . "</em> | <i class='fa fa-eye'></i> " . $result['viewer'] . "</p>";
						echo "<p class='article-elipsis'>";
						echo  $result['excerpt'] . "... <a href='/blog/berita/" . $result['slug'] . "' class='read-more'>Read more</a></p>";
						echo "</div>";
						echo "</div><br>";
						echo "</div>";
						echo "</div>";
				}
			?>
			<a href="/blog/berita"><i class='fa fa-folder-open'></i> Arsip Berita</a>
			<div class="vspace-medium-1"></div>
			<h5 class="medium-text-left">Link</h5>
			<hr>
			<div class="splide text-center" style="background:<?php echo e(setting('site.color_1')); ?>;padding-top:5px;padding-bottom:5px">
				<script>
					document.addEventListener( 'DOMContentLoaded', function () {
						new Splide( '.splide', {
							type   : 'loop',
							perPage: 5,
							perMove: 2,
							pagination: false,
						} ).mount();
					} );
				</script>
				<div class="splide__track">
					<ul class="splide__list">
						<?php
						$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 6)->get();						
						foreach($pengPost as $result){
							$x = "/storage/" . $result['image'];
							$y = $result['excerpt'];
							echo "<li class='splide__slide'><a href='#' onclick=\"window.open('$y');\"><img src='$x' style='width:150px;border-radius: 12px;'></a></li>";
						}
						?>
					</ul>
				</div>
			</div>
			<div class="vspace-medium-1"></div>
			<h5>Galeri Foto</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					<?php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 7)->orderBy('published_date','desc')->limit(3)->get();
					$y = 0;
					foreach($pengPost as $result){
						// $x = "/storage/resized/-260x175/" . substr($result['image'],1);
						$x = "/storage/".$result['image'];
						$y = $y+1;
						echo "<div class='cell medium-4 text-center medium-text-center' style='padding:5px'>
						<img class='thumbnail' src='$x' style='width: 100%' data-open='exampleModal$y'>
						</div>";
						
						echo "
						
							<div class='reveal' id='exampleModal$y' data-reveal data-animation-in='fade-in' data-animation-out='fade-out'>
							  <h5>".$result['title']."</h5>
							  <img class='thumbnail' src='$x' style='width: 100%'>
							  <button class='close-button' data-close aria-label='Close modal' type='button'>
								<span aria-hidden='true'>&times;</span>
							  </button>
							</div>
						
						";
					}
					?>
					<a href="/blog/galerifoto"><i class='fa fa-folder-open'></i> Arsip Foto</a>
				</div>
			</div>
			<div class="vspace-medium-1"></div>
			<h5>Galeri Video</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					<?php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 8)->orderBy('published_date','desc')->limit(3)->get();
					$y = 0;
					foreach($pengPost as $result){
						$y = $y+1;
						// $x = "/storage/resized/-260x175/" . substr($result['image'],1);
						$x = "/storage/".$result['image'];
						$z = str_replace('"', "'", $result['excerpt']);
						echo "<div class='cell medium-4 text-center medium-text-center' style='padding:5px'>
						<img class='thumbnail' src='$x' style='width: 100%' data-open='vModal$y'>
						</div>";
						
						echo "
						
						
							<div class='reveal' id='vModal$y' data-reveal data-animation-in='slide-in-down' data-animation-out='slide-out-up'>
							  <h5>".$result['title']."</h5>".$z."
							  <button class='close-button' data-close aria-label='Close modal' type='button'>
								<span aria-hidden='true'>&times;</span>
							  </button>
							</div>
						
						";
					}
					?>
					<a href="/blog/galerivideo"><i class='fa fa-folder-open'></i> Arsip Video</a>
				</div>
			</div>
		</div> <!-- /.cell -->
		<div class="cell medium-1 text-center medium-text-left">
		</div> <!-- /.cell -->
		<div class="cell medium-3 text-center medium-text-left">
			<h5>Pengumuman</h5><hr>
			<div class="grid-container wide-article-link" style="border:1px solid <?php echo e(setting('site.color_1')); ?>;;border-bottom:3px solid <?php echo e(setting('site.color_1')); ?>;">
				<?php
				$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 4)->orderBy('published_date','desc')->limit(4)->get();
				foreach($pengPost as $result){
					echo "<div class='grid-x'>
					<div class='article-title'><a href='/blog/pengumuman/" . $result['slug'] . "'><i class='fa fa-angle-right'></i> " . $result['title'] . "</a></div>
					</div>";
				}
				?>
			</div><a href="/blog/pengumuman"><i class='fa fa-folder-open'></i> Arsip Pengumuman</a>
			<div class="vspace-medium-1"></div>
			<h5>Agenda Kegiatan</h5><hr>
			<div class="grid-container wide-article-link" style="border:1px solid <?php echo e(setting('site.color_1')); ?>;;border-bottom:3px solid <?php echo e(setting('site.color_1')); ?>;">
				<?php
				$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 5)->orderBy('published_date','desc')->limit(4)->get();
				foreach($pengPost as $result){
					echo "<div class='grid-x'>
					<div class='article-title'><a href='/blog/agendakegiatan/" . $result['slug'] . "'><i class='fa fa-calendar-alt'></i> " . $result['title'] . "</a></div>
					</div>";
				}
				?>
			</div><a href="/blog/agendakegiatan"><i class='fa fa-folder-open'></i> Arsip Agenda Kegiatan</a>
			<div class="vspace-medium-1"></div>			
			<h5>Info Grafis</h5><hr>
				<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
				  <ul class="orbit-container">
					<?php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 9)->orderBy('published_date','desc')->limit(3)->get();
					foreach($pengPost as $result){
						$x = "/storage/" . $result['image'];
						// $x = "/storage/resized/-260x175/" . substr($result['image'],1);
						$y = $result['slug'];
						echo "<li class='is-active orbit-slide'>
							<a href='/blog/infografis/$y'><img class='thumbnail' src='$x' style='width: 100%'></a>
						</li>";
					}
					?>
				  </ul>
				  <nav class="orbit-bullets" style='bottom:80px'>
					<?php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 8)->orderBy('published_date','desc')->limit(3)->get();
					$x = -1;
					foreach($pengPost as $result){
						$x = $x+1;
						if($x == 0){
						echo "
							<button class='is-active' data-slide='$x'><span class='show-for-sr'></span></button>
						";
							
						}else{
						echo "
							<button data-slide='$x'><span class='show-for-sr'></span></button>
						";

						}
					}
					?>
				  </nav>
				</div>
			<div class="vspace-medium-1"></div>			
			<h5>Government Public Relation</h5><hr>
			<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
			<div id="gpr-kominfo-widget-container"></div>
		</div> <!-- /.cell -->
	</div> <!-- /.grid -->
</div>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('voyager-frontend::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/ubuntu/git-cms-garut/CMS-Kominfo-Garut/vygrgarut/ggcms/resources/views/vendor/voyager-frontend/layouts/home-1.blade.php ENDPATH**/ ?>