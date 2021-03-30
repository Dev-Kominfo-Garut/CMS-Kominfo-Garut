        <footer class="top-footer">
            <div class="grid-container">
                <div class="grid-x">
					
				  <div class="columns small-2 large-4 medium-text-left">
					ini bagian untuk logi <br />
					ini bagian untuk logi <br />
					ini bagian untuk logi <br />
					ini bagian untuk logi <br />
					ini bagian untuk logi <br />
					ini bagian untuk logi <br />
				  
				  </div>
				  <div class="columns small-4 large-4 medium-text-center"><!-- ... -->
					ini bagian untuk socmed <br />  dan ini untuk counter nya
				  
				  </div>
				  <div class="columns small-6 large-4 medium-text-right"><!-- ... -->
					ini untu google maps
				  
				  </div>
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>

    </div> <!-- /.off-canvas-content -->
	
</div>
<script src="{{ url('/') }}/js/app.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



{{-- @foreach($BlogPost->id as $id)

..
<img src="{!! \App\Models\BlogPost::findOrFail($id)->image; !!}" alt="">
..

@endforeach --}}
</body>
</html>
