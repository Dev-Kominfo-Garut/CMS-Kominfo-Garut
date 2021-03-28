@include('voyager-frontend::partials.meta')
@include('voyager-frontend::partials.header')

<main class="main-content">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="vspace-2"></div>
            <div class="cell small-12 medium-9">
                @yield('content')
            </div>

            <div class="cell small-12 medium-3 sidebar">
                <div class="card" style="background:#ff76ca">
                    <ul class="vertical menu">
                        <li><a href="#">Page One</a></li>
                        <li><a href="#">Page Two</a></li>
                        <li><a href="#">Page Three</a></li>
                        <li><a href="#">Page Four</a></li>
                    </ul>
                </div>

                <div class="card">
                    <img alt="" src="https://images.unsplash.com/photo-1473800447596-01729482b8eb?auto=format&fit=crop&w=500&q=50">
                    <div class="card-section">
                        <h4>Moto Kami</h4>
                        <p>Hidup Mulia Atau Mati Syahid!</p>
                        <a href="#" class="button">Pelajari</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="vspace-2"></div>
    </div>
</main>

@include('voyager-frontend::partials.footer')
