<!DOCTYPE html>
<html lang="en">
<head>
 
   @include('layouts.partials.head')
 
 </head>
<body id="page-top">
	@include('layouts.partials.nav')
<div id="wrapper">	 
	@include('layouts.partials.sidebar')
	<div id="content-wrapper">
		@yield('content')
		 
		@include('layouts.partials.footer')
	</div>
	@include('layouts.partials.footer-scripts')
</div>
 </body>
 
</html>