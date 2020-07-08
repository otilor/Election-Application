@extends ('layouts.app')


@section('content')
<section class="random-div bg-not-too-white text-mpgray">
<div class="mx-auto text-center text-semibold">
	<div class="alert alert-danger">For now, you cannot edit your profile!</div>	
</div>
	
	
	<h1 class="text-center py-15px text-35px text-semibold">Your profile</h1>
	
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	
	<div class = "py-3 text-center">
		<input class = "p-1 rounded-30px" type="text" value="{{ Auth::user()->name }}">	
	</div>

	<div class="text-center">
		<a href = "{{ action ('Web\ProfileController@edit_profile') }}" class="btn text-white text-caps btn-success edit">Save</a>	
	</div>
		

	
	
</section>
@endsection