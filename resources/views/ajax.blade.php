@if (\Request::ajax())
	@yield('content')
@else
	@yield('non-ajax')
@endif