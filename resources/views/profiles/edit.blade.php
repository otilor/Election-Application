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
	
	

	<div class="text-center py-3">
		

		<form action = "/profile/update" method = "post">
			<input class = "p-1 text-semibold rounded-30px" type="text" value="{{ Auth::user()->name }}">
			<input class="btn text-white text-caps btn-success edit" type = "submit" value = "Save">
		</form>	
	</div>
		

	
	
</section>
@endsection