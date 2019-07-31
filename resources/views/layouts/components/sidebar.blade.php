<div class="col-lg-3">

	<h1 class="my-4">Shop Name</h1>
	<div class="list-group">
		@foreach (menu() as $category)
			<a href="#" class="list-group-item">{{ $category->name }}</a>
		@endforeach
	</div>

</div>