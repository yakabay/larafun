<!doctype html>

<html lang="en">
    <head>
        @include('partials.head')
        @yield('styles')
    </head>

    <body>
        <div class="container">
            @include('partials.header')
            @include('partials.top_section')
        </div>

        @include('partials.flash')

        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    @yield('content')
                </div><!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">
                    @include('partials.sidebar')
                </aside><!-- /.blog-sidebar -->
            </div><!-- /.row -->
        </main><!-- /.container -->

        @include('partials.footer')
        @yield('scripts')
    </body>
</html>