@include('voyager-frontend::partials.meta')
@include('voyager-frontend::partials.header')

<style>
.wide-article-link {
  background-color: #fefefe;
  /* padding: 1rem 1rem 0.5rem; */
  border-bottom: 1px solid #cacaca;
  margin-bottom: 1rem;
}

.wide-article-link .article-title a {
  color: #0a0a0a;
}

.wide-article-link .article-title a:hover, .wide-article-link .article-title a:focus {
  color: #1779ba;
}

.wide-article-link .article-elipsis .read-more {
  font-weight: bold;
  color: #0a0a0a;
}

.wide-article-link .article-title,
.wide-article-link .article-author,
.wide-article-link .article-elipsis {
  margin-bottom: 0.25rem;
  color: #1a1a1a;
}

.splide__arrow {
	background:transparent;
}
</style>

{{--  category:slider  --}}
<main class="main-content">
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
	<ul class="orbit-container">
	@php
	$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 11)->get();
	$z = 0;
	
	foreach($pengPost as $result){
		$x = "/storage/" . $result['image'];
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
				<img class='orbit-image' src='$x' style='height: 500px'>
				<figcaption class='orbit-caption'><a href='/blog/$a' style='color:#fff;font-weight:bold;'>$y</a></figcaption>
			</figure>
		</li>";
	}
	@endphp
	</ul>
  </div>
	<nav class="orbit-bullets">
	@php
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
	@endphp
	</nav>
</div>
<hr style="border-bottom:10px solid transparent;">

{{--  SLIDER HERE  --}}

<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-3 text-center medium-text-left">
			<h5>Pengumuman</h5><hr>
			<div class="grid-container wide-article-link" style="border:1px solid;border-bottom:3px solid;">
				@php
				$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 4)->limit(4)->get();
				foreach($pengPost as $result){
					echo "<div class='grid-x'>
					<h5 class='article-title'><a href='/blog/" . $result['slug'] . "'>" . $result['title'] . "</a></h5>
					</div>";
				}
				@endphp
			</div>
			<div class="vspace-medium-1"></div>
			<h5>Agenda Kegiatan</h5><hr>
			<div class="grid-container wide-article-link" style="border:1px solid;border-bottom:3px solid;">
				@php
				$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 5)->limit(4)->get();
				foreach($pengPost as $result){
					echo "<div class='grid-x'>
					<h5 class='article-title'><a href='/blog/" . $result['slug'] . "'>" . $result['title'] . "</a></h5>
					</div>";
				}
				@endphp
			</div>
		</div> <!-- /.cell -->
		<div class="cell medium-1 text-center medium-text-left">
		</div> <!-- /.cell -->
		<div class="cell medium-8 text-left medium-text-left">
			<h5>Berita</h5><hr>
			@php	
				$blogPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 3)->limit(6)->get();
				// var_dump($blogPost);
				foreach($blogPost as $result){
					$x = "/storage/resized/-260x175/" . substr($result['image'],1);
					echo "<div class='wide-article-link'>";
						echo "<h5 class='article-title'>";
						echo "<a href='/blog/" . $result['slug'] . "'>";
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
						echo "<p class='article-author'><em>" . substr($result['published_date'],0,10) . "</em></p>";
						echo "<p class='article-elipsis'>";
						echo  $result['excerpt'] . "... <a href='/blog/" . $result['slug'] . "' class='read-more'>Read more</a></p>";
						echo "</div>";
						echo "</div><br>";
						echo "</div>";
						echo "</div>";
				}
			@endphp
		</div> <!-- /.cell -->
	</div> <!-- /.grid -->
</div>
<hr style="border-bottom:10px solid transparent;">


<div class="grid-x">
	<div class="cell medium-12 text-center">
		<h5 class='text-center'>Link</h5>
	</div>
	<div class="cell medium-12 text-center medium-text-center" style='background:#282f34'>
			<br>
			<div class="splide">
				<div class="splide__track">
					<ul class="splide__list">
						@php
						$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 6)->get();						
						foreach($pengPost as $result){
							$x = "/storage/resized/-260x175/" . substr($result['image'],1);
							$y = $result['slug'];
							echo "<li class='splide__slide'><a href='/blog/$y'><img src='$x' class='thumbnail'></a></li>";
						}
						@endphp
					</ul>
				</div>
			</div>
		
	</div> <!-- /.cell -->
</div>
<hr style="border-bottom:10px solid transparent;">

<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-12 text-center medium-text-center">
			<h5>Galeri Foto</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					@php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 7)->limit(3)->get();
					foreach($pengPost as $result){
						$x = "/storage/resized/-260x175/" . substr($result['image'],1);
						echo "<div class='cell medium-4 text-center medium-text-center' style='padding:2em'>
						<a href='/blog/" . $result['slug'] . "'><img class='thumbnail' src='$x' style='width: 100%'></a>
						</div>";
					}
					@endphp
				</div>
			</div>
		</div>
		<div class="cell medium-12 text-center medium-text-center">
			<h5>Galeri Video</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					@php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 8)->limit(3)->get();
					foreach($pengPost as $result){
						$x = "/storage/resized/-260x175/" . substr($result['image'],1);
						echo "<div class='cell medium-4 text-center medium-text-center' style='padding:2em'>
						<a href='/blog/" . $result['slug'] . "'><img class='thumbnail' src='$x' style='width: 100%'></a>
						</div>";
					}
					@endphp
				</div>
			</div>
		</div> <!-- /.cell -->
	</div> <!-- /.grid -->
</div>
<hr style="border-bottom:10px solid transparent;">
<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-7 text-center medium-text-center">
			<h5>Info Grafis</h5><hr>
				<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
				  <ul class="orbit-container">
					@php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 9)->limit(3)->get();
					foreach($pengPost as $result){
						$x = "/storage/" . $result['image'];
						echo "<li class='is-active orbit-slide'>
							<img class='thumbnail' src='$x' style='width: 60%'>
						</li>";
					}
					@endphp
				  </ul>
				  <nav class="orbit-bullets">
					@php
					$pengPost = \App\Models\BlogPost::with('category')->where('category_id', '=', 8)->limit(3)->get();
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
					@endphp
				  </nav>
				</div>
		</div>
		<div class="cell medium-1 text-center medium-text-left">
		</div>
		<div class="cell medium-4 text-center medium-text-left">    
			<h5>Government Public Relation</h5><hr>
			<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
			<div id="gpr-kominfo-widget-container" style="margin-bottom: 15px;"></div>
		</div>
	</div>
</div>
<hr style="border-bottom:10px solid transparent;">
    @yield('content')
</main>

@include('voyager-frontend::partials.footer')
