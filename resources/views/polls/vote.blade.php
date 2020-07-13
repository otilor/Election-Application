@extends ('layouts.app')


@section ('content')


<section class="story">
	<a href="/polls">
		<h2 class="no-margin"><span class = "{{ empty (count($all_details["contestants"])) ? 'bg-danger':'bg-success' }} rounded-4px px-5px tracking-1h-px font-semibold text-18px py-5px mr-8px">{{ count($all_details["contestants"]) }}</span><span class="text-18px font-semibold tracking-1h-px">Contestant(s)! </span><span class="text-18px">{{ empty (count($all_details["contestants"])) ? 'Check other polls' : '' }}</span></h2>	
	</a>
	
</section>


{{-- List all the section --}}


<section class="m-3">
	@forelse ($all_details["contestants"] as $contestant)
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	
	<div>
		<h3 class="text-23px pt-5 pb-1 text-mpgray mx-auto random-div-title-description text-center">{{ $contestant->name }}</h3>
		 
		<form action="post" class="text-center">
			<input type="submit" name="vote_me" class="btn btn-primary" value="Vote me">
		</form>
	{{-- <h4 class = "text-center">Email:  {{ $contestant->winner }} </h4>		 --}}
	</div>
	@empty 
	<p class="text-center text-danger text-headline">No contestants, yet!</p>
	@endforelse
</section>

@endsection