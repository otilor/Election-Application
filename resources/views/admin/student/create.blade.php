@extends ('layouts.app')
@section ('content')
<h3 class="text-center pt-4">Create an account</h3>
<div class="container">
	@include ('includes.messages')
	<form action = "{{ route('admin.students.store') }}" method="post">
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Name</label>
		    <input type="text" name = "name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Password</label>
	    	<input type="text" name = "password" class="form-control" id="exampleFormControlInput1">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Choose account type</label>
		    <select name = "role" disabled class="form-control" id="exampleFormControlSelect1">
		      <option>Student</option>
		    </select>
		  </div>
		  <div class="form-group text-center">
		  	<input type="submit" class="btn btn-dark" value="Create">
		  </div>
	</form>
</div>

@endsection