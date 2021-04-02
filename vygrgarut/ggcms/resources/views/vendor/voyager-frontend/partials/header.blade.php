<header id="header" class="topbar-sticky-shrink-header"></header>
<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push" style="height:0px">
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <ul class="vertical menu" data-dropdown-menu>
        {{ menu('primary', 'voyager-frontend::partials.menu-left') }}
    </ul>

    <hr>

    <ul class="vertical menu">
        @include('voyager-frontend::partials.menu-right')
    </ul>

    <hr>

    <ul class="menu social-icons align-center">
        {{ menu('social', 'voyager-frontend::partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('voyager-frontend::partials.search-box')
                </div>
            </div>
        </div>
    </div>


    <div data-sticky-container>
    <div data-sticky data-margin-top='0' data-top-anchor="header:bottom" data-btm-anchor="content:bottom">
        <div class="top-bar topbar-sticky-shrink">
            <div class="top-bar-left">
                <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                    <i class="fas fa-bars"></i> <span>Menu</span>
                </a>

                <div class="header-logo float-left">
                    <a href="{{ url('/') }}">
                        <img src="/storage/{{ setting('site.logo') }}" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
                    </a>
                </div>

                <ul class="dropdown menu show-for-medium" data-dropdown-menu>
                    {{ menu('primary', 'voyager-frontend::partials.menu-left') }}
                </ul> <!-- /.menu -->
            </div>

            <div class="top-bar-right show-for-medium">
                <ul class="dropdown menu" data-dropdown-menu>
                    @include('voyager-frontend::partials.menu-right')
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
