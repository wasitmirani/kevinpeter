<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	@include('layouts.partials.meta')
		<title>Kevin Peter Jones Music School</title>
	</head>
	<body>
		<!-- Header Begins here -->
@include('layouts.partials.header')
<!-- Header Begins here -->
		<!-- Banner -->

        @yield('content')


        @include('layouts.partials.footer')
		<!-- Footer Begins here -->
		<!-- Footer Script Begins here -->

        @include('layouts.partials.footer_script')
		<!-- Footer Script Begins here -->
	@yield('scripts')
	</body>
</html>

