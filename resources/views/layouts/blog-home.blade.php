@include('includes.front_header')
    <!-- Navigation -->
    @include('includes.front_nav')
<div class="container">
    <!-- Page Content -->
    @include('includes.flash_messages')
@yield('content')
        <!-- /.row -->
        	
</div>
@include('includes.front_footer')