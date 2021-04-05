        <footer class="top-footer">
            <div class="grid-container">
                <div class="grid-x" style="color:white;">
					
				  <div class="columns small-2 large-2 medium-text-left">
					<img src="/storage/{{ setting('site.logo') }}">
					{{ setting('site.address') }}
				  
				  </div>
				  <div class="columns small-4 large-7 medium-text-left" style="padding-left:15px"><!-- ... -->
					<a onclick="window.open('{{ setting('site.link_facebook') }}');" href="#" style="color:white"><img src="storage/settings/April2021/fb.png" width="30px"> {{ setting('site.facebook') }}</a> 
					<a onclick="window.open('{{ setting('site.link_instagram') }}');" href="#" style="color:white"><img src="storage/settings/April2021/ig.png" width="30px"> {{ setting('site.instagram') }}</a> 
					<a onclick="window.open('{{ setting('site.link_twitter') }}');" href="#" style="color:white"><img src="storage/settings/April2021/twitter.png" width="30px"> {{ setting('site.twitter') }}</a> 
					<a onclick="window.open('{{ setting('site.link_youtube') }}');" href="#" style="color:white"><img src="storage/settings/April2021/yt.png" width="30px"> {{ setting('site.youtube') }}</a> <br>
					
<pre style="padding-left:350px">Jumlah Pengunjung : @php echo rand(1,2087)."\n"; @endphp
Online            : @php echo rand(1,20)."\n"; @endphp
Hari Ini          : @php echo rand(1,40)."\n"; @endphp
s/d Hari Kemarin  : @php echo rand(1,120)."\n"; @endphp
</pre>
				  
				  </div>
				  <div class="columns small-2 large-3 medium-text-right"><!-- ... -->
				  <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=diskominfo%20garut&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/5"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}</style><a href="https://www.embedgooglemap.net">google maps plugin html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div></div>				  
				  </div>
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>

    </div> <!-- /.off-canvas-content -->
	
<script src="{{ url('/') }}/js/app.js"></script>
<script src="{{ url('/') }}/js/BigPicture.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
