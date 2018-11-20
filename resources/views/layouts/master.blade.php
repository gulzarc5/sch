<!DOCTYPE html>
<html lang="en">


 
   @include('layouts.partials.head')
 
<body>
	@include('layouts.partials.sidebar')
	<div id="right-panel" class="right-panel">
		@include('layouts.partials.nav') 
	
		@yield('content')
		 
		@include('layouts.partials.footer')
		@include('layouts.partials.footer-scripts')
	</div>
	

 </body>
 
</html>