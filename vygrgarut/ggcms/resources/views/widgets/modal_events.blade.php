<div>
    {{-- <div class='cell medium-4 text-center medium-text-center' style='padding:5px'>
        <img class='thumbnail' src='$x' style='width: 100%' data-open='events'>
    </div> --}}
    @if (count($events) > 0)
        <div class='reveal' id='events' data-reveal data-animation-in='fade-in' data-animation-out='fade-out'>
            <h5>Event</h5>
            {{-- <ul class="orbit-container"> --}}
            @foreach ($events as $item)
                <div class='grid-x'>
                    <div class='article-title'><a href='#'><i class='fa fa-angle-right'></i>{{ $item->title }}</a>
                    </div>
                </div>
            @endforeach
            {{-- </ul> --}}
            {{-- <img class='thumbnail' src='$x' style='width: 100%'>
        <button class='close-button' data-close aria-label='Close modal' type='button'>
            <span aria-hidden='true'>&times;</span>
        </button> --}}
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
            integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
            crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#events').foundation('open');
            });
            // jQuery(document).ready(function($) {
            //     //you can now use $ as your jQuery object.
            //     $('#events').foundation('open');
            // });
            // (function($) {
            //     // $.ajax('/')
            //     // .done(function(resp) {
            //     //     var $modal = $('#events');
            //     //     $modal.html(resp).foundation('open');
            //     // });
            //     $('#events').foundation('open');
            // })();

        </script>
    @endif

</div>
