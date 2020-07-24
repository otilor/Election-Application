@extends ('layouts.app')
@section ('content')
<h3 class="text-center pt-4">Create a poll</h3>
<div class="container">
	@include ('includes.messages')
	<form action = "/admin/polls/store" method="post">
		@csrf
		@method ("post")
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Title</label>
		    <input type="text" name = "name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Description</label>
		    <textarea name = "description "class="form-control"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Link id</label>
		    <input class  = "form-control" type="text" disabled="true" value = "{{ Str::random(8) }}">
		  </div>
		  
		  <div class="form-group text-center">
		  	<input type="submit" class="btn btn-dark" value="Create">
		  </div>

		  
	</form>
</div>

@endsection