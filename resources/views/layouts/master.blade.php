<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8" />
        <title>Notifications | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('layouts.style')
        @yield('style-page')
    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
                <div>
                    @yield('content')
                </div>
            @include('layouts.footer')
        </div>
        <!-- END layout-wrapper -->

        @include('layouts.right-sidebar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('layouts.script')
        @yield('script-page')

    </body>
</html>
