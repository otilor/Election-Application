@extends('layouts.app')

@section ('content')
  
	@forelse ($positions as $position)
 	<div class="container">
        <div class="row justify-content-center">
		     <div class="mx-auto my-3 col-md-6">
				<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
					<h2 class="text-headline text-white">{{ $position->title }}</h2>
					<h4 class="text-body text-mpblue-500">{{ $position->description }}</h4>
					<div class="end-of-story-button mt-20px">
						<a href = "/student/polls/{{ $position->poll_id }}/positions/{{ $position->id }} " class="py-3 br-10px px-4 bg-msblue-600  text-caps">Elect!</a>
					</div>
				</div>
			</div>
        </div>
    </div>
    @empty
		<h1 class="text-center text-danger text-headline">No positions!</h1>
		<div class="text-center">
			{{-- <a href="positions/create" class="text-center btn btn-lg btn-success text-semibold">Go home!</a> --}}
		</div>
  @endforelse
@endsection