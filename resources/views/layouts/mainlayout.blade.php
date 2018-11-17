<!DOCTYPE html>
<!doctype html>
<html class="no-js" lang="en">
 
   @include('layouts.partials.head')
 
<body>
	@include('layouts.partials.sidebar')
	<div id="right-panel" class="right-panel">
		@include('layouts.partials.nav') 
	
		@yield('content')
		 
		@include('layouts.partials.footer')
	</div>
	@include('layouts.partials.footer-scripts')

 </body>
 
</html>