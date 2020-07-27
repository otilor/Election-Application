@extends ('layouts.app')
@section ('content')
<h3 class="text-center pt-4">Add position</h3>
<div class="container">
	@include ('includes.messages')
	<form action = "/admin/polls-sessions-links/polls/{{ $pollId }}/positions/store" method = "post">
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Title</label>
		    <input type="text" name = "title" class="form-control" id="exampleFormControlInput1" placeholder="President">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Description</label>
		    <textarea name = "description" class="form-control"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Poll id</label>
		    <input name = "poll_id" class  = "form-control" type="text" readonly="true" value = "{{ $pollId }}">
		  </div>
		  
		  <div class="form-group text-center">
		  	<input type="submit" class="btn btn-dark" value="Create">
		  </div>

		  
	</form>
</div>

@endsection