@extends ('layouts.app')


@section('content')
<section class="random-div bg-not-too-white text-mpgray">
	<h1 class="text-center py-15px text-35px text-semibold">Your profile</h1>
	<h3 class="text-23px mx-auto text-random-light random-div-title-description text-center">NAME</h3>
	<div class="text-center">
		<img class = "rounded-img img-responsive voting-icon" src="{{ asset('img/male.webp') }}">
	</div>
	
	<div class="mx-auto my-5 col-md-6">
		<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
			<h2 class="text-headline text-white">Enough of the story right?</h2>
			<h4 class="text-body text-mpblue-500">Let's jump right into it</h4>
			<div class="end-of-story-button mt-20px">
				<a href="/polls" class="py-3 br-10px px-4 bg-msblue-600  text-caps">start off</a>
			</div>
		</div>
	</div>
		
	
	
	
</section>
@endsection