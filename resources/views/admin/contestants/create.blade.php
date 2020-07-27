@extends ('layouts.app')

@section ('content')
<div class="container my-1">
	<form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose user</label>
    <select class="form-control" id="exampleFormControlSelect1">
    	@forelse ($users as $user)
	      <option>{{ $user->name }}</option>
	      @empty
	      <option>No user yet!</option>
	    @endforelse
    </select>
  </div>
</form>	

</div>
@endsection