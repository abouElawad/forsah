@include('layouts.dashboard.header')
@include('layouts.dashboard.navbar')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.main')	

@yield('content')

@include('layouts.dashboard.body')
@include('layouts.dashboard.footer')	
@include('layouts.dashboard.activities')	
@include('layouts.dashboard.modals')
@include('layouts.dashboard.scripts')