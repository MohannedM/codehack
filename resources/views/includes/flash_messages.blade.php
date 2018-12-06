@if(Session::has('comment_massege'))
	<div class="alert alert-success col-sm-6">
	<p class="text-center">{{ session('comment_massege') }}</p>
	</div>
@endif