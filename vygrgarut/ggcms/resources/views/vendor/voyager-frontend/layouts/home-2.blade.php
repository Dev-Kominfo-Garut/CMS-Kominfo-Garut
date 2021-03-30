@include('voyager-frontend::partials.meta')
@include('voyager-frontend::partials.header')

{{--  category:slider  --}}
<main class="main-content">
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="http://placehold.it/1200x600/999?text=Slide-1" alt="Space" style="height:510px">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/888?text=Slide-2" alt="Space" style="height:510px">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/777?text=Slide-3" alt="Space" style="height:510px">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/666&text=Slide-4" alt="Space" style="height:510px">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

{{--  SLIDER HERE  --}}

<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-3 text-center medium-text-left">
			<h5>Pengumuman</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 2
				</div>
			</div>
			<div class="vspace-medium-1"></div>
			<h5>Agenda Kegiatan</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 2
				</div>
			</div>
		</div> <!-- /.cell -->
		<div class="cell medium-1 text-center medium-text-left">
		</div> <!-- /.cell -->
		<div class="cell medium-8 text-center medium-text-left">
			<h5>Berita</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Berita 1
					ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
		</div> <!-- /.cell -->
	</div> <!-- /.grid -->
</div>
<hr style="border-bottom:10px solid transparent;">

<div class="grid-x">
	<div class="cell medium-12 text-center medium-text-center">
		<h5>Link</h5><hr>
		<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
			<ul class="orbit-container">
			<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
			<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
			<li class="is-active orbit-slide">
				<figure class="orbit-figure">
					<img class="orbit-image" src="http://placehold.it/1200x600/999?text=Slide-1" alt="Space" style="height:210px">
				</figure>
			</li>
			<li class="orbit-slide">
				<figure class="orbit-figure">
					<img class="orbit-image" src="http://placehold.it/1200x600/999?text=Slide-1" alt="Space" style="height:210px">
				</figure>
			</li>
			<li class="orbit-slide">
				<figure class="orbit-figure">
					<img class="orbit-image" src="http://placehold.it/1200x600/999?text=Slide-1" alt="Space" style="height:210px">
				</figure>
			</li>
			<li class="orbit-slide">
				<figure class="orbit-figure">
					<img class="orbit-image" src="http://placehold.it/1200x600/999?text=Slide-1" alt="Space" style="height:210px">
				</figure>
			</li>
			</ul>
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
					ini adalah isi dari Agenda Kegiatan 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 2
				</div>
			</div>
		</div>
		<div class="cell medium-12 text-center medium-text-center">
			<h5>Galeri Video</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Agenda Kegiatan 2
				</div>
			</div>
		</div> <!-- /.cell -->
	</div> <!-- /.grid -->
</div>
<hr style="border-bottom:10px solid transparent;">
<div class="grid-container">
	<div class="grid-x">
		<div class="cell medium-8 text-center medium-text-left">
			<h5>Government Public Relation</h5><hr>
			<div class="grid-container">
				<div class="grid-x">
					ini adalah isi dari Berita 1
					ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x">
				ini adalah isi dari Berita 1
				</div>
			</div>
		</div>
		<div class="cell medium-1 text-center medium-text-left">
		</div>
		<div class="cell medium-3 text-center medium-text-left">    
			<h5>Info Grafis</h5><hr>
				<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
				  <ul class="orbit-container">
					<li class="is-active orbit-slide">
					  <div style="background:orange">
						<p><strong>This is dodgerblue.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </div>
					</li>
					<li class="orbit-slide">
					  <div style="background:aqua">
						<p><strong>This is rebeccapurple.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </div>
					</li>
					<li class="orbit-slide">
					  <div style="background:darkgrey">
						<p><strong>This is darkgoldenrod.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </div>
					</li>
					<li class="orbit-slide">
					  <div style="background:lime">
						<p><strong>This is lightseagreen.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </div>
					</li>
				  </ul>
				  <nav class="orbit-bullets">
					<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
					<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
					<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
					<button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
				  </nav>
				</div>
		</div>
	</div>
</div>
<hr style="border-bottom:10px solid transparent;">
    @yield('content')
</main>

@include('voyager-frontend::partials.footer')
