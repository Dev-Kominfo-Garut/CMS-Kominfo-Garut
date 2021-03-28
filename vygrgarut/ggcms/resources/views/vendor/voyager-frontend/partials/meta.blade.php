<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description" content="@yield('meta_description')">

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
    <meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

    <!-- Icons -->
    <meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
    <meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/app.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
    
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>

    @if (setting('site.google_analytics_tracking_id'))
    <!-- Google Analytics (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>
    @endif
    @if (setting('admin.google_recaptcha_site_key'))
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script>
            function setFormId(formId) {
                window.formId = formId;
            }

            function onSubmit(token) {
                document.getElementById(window.formId).submit();
            }
        </script>
    @endif


	<style>
		footer.top-footer { background-color: #0000ff; }
		footer.bottom-footer { background-color: #0000ff; }
		.top-bar, .top-bar ul { background-color: #0000ff; }
		a { color: #ffffff; }
		.top-bar, .top-bar ul { background-color: #0000ff; }
		.dropdown.menu > li > a { background: none; }
		.top-bar .top-bar-right a { color: #ffffff; }
		.top-bar .top-bar-right a:hover { color: #ffffff; }
		.dropdown.menu > li.is-dropdown-submenu-parent > a::after { border-color: #ffffff transparent transparent; }
	</style>
</head>
<body>