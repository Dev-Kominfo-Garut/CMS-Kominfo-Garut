        <footer class="top-footer">
            <div class="grid-container">
                <div class="grid-x" style="color:white;">
					
				  <div class="columns small-2 large-2 medium-text-left">
					<img src="/storage/{{ setting('site.logo') }}">
					{{ setting('site.address') }}
				  
				  </div>
				  <div class="columns small-4 large-7 medium-text-left" style="padding-left:15px"><!-- ... -->
					<a onclick="window.open('{{ setting('site.link_facebook') }}');" href="#" style="color:white"><img src="/storage/settings/April2021/fb.png" width="16px"> {{ setting('site.facebook') }}</a> 
					<a onclick="window.open('{{ setting('site.link_instagram') }}');" href="#" style="color:white"><img src="/storage/settings/April2021/ig.png" width="16px"> {{ setting('site.instagram') }}</a> 
					<a onclick="window.open('{{ setting('site.link_twitter') }}');" href="#" style="color:white"><img src="/storage/settings/April2021/twitter.png" width="16px"> {{ setting('site.twitter') }}</a> 
					<a onclick="window.open('{{ setting('site.link_youtube') }}');" href="#" style="color:white"><img src="/storage/settings/April2021/yt.png" width="16px"> {{ setting('site.youtube') }}</a> <br>
					
<pre style="padding-left:350px">@php $dc = exec('cat /home/ubuntu/awstatall.log',$red); foreach($red as $rd){echo $rd."\n";} @endphp
@php $xc = exec('cat /home/ubuntu/awstat.log',$res); foreach($res as $r){echo $r."\n";} @endphp
</pre>
				  
				  </div>
				  <div class="columns small-2 large-3 medium-text-right"><!-- ... -->
				  {!! setting('site.map') !!}
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
