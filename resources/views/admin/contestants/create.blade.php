@extends ('layouts.app')

@section ('content')
<div class="container my-1">
<form action="store" method="post">	
  @csrf
  <input type="hidden" name = "position_id" value="{{ $positionId }}">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose user</label>
    <select class="form-control" name = "contestant" id="exampleFormControlSelect1">
    	@forelse ($users as $user)
	      <option>{{ $user->id }}. {{ $user->name }}</option>
	      @empty
	      <option>No user yet!</option>
	    @endforelse
    </select>
  </div>
  <div class="form-group">
      <input class="btn btn-dark form-control" type = "submit" value = "Submit">
  </div>
</form>	

</div>
@endsection