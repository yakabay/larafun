<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials.head')
        @yield('styles')
    </head>

    <body>
        @include('partials.nav')
        @include('partials.header')
        @include('partials.flash')

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
        <hr>

        @include('partials.footer')
        @yield('scripts')
    </body>

</html>
