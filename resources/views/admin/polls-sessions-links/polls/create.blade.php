@extends ('layouts.app')
@section ('content')
<h3 class="text-center pt-4">Create a new poll</h3>
<div class="container">
	@include ('includes.messages')
	<form action = "{{ route('admin.students.store') }}" method="post">
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Title</label>
		    <input type="text" name = "name" class="form-control" id="exampleFormControlInput1" placeholder="Executive poll">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Description</label>
		    <textarea class="form-control"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Password</label>
	    	<input type="text" name = "password" class="form-control" id="exampleFormControlInput1">
		  </div>
		  
		  <div class="form-group text-center">
		  	<input type="submit" class="btn btn-dark" value="Create">
		  </div>
	</form>
</div>

@endsection