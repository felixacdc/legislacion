@include('partials.head')

    <body id="body">
        <!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>
