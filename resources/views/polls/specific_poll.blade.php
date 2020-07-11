@extends('layouts.app')


@section('content')

<p class="bg-deepblue text-center py-3 text-caps text-white">There are currently {{ count($positions) }} open positions for this poll</p>
@forelse ($positions as $position)
				
			


        <div class="row justify-content-center">
		     <div class="mx-auto my-3 col-md-6">
				<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-skorange">
					<h2 class="text-headline text-white">{{ $position->title }}</h2>

					<div class="end-of-story-button mt-20px">
						<a href = "/" class="py-3 br-10px text-dark px-4 bg-white  text-caps">Continue!</a>
					</div>
				</div>
			</div>
        </div>

    @empty
		<h1 class="text-center text-danger text-headline">No vacant positions!</h1>
  @endforelse
@endsection