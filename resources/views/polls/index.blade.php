@extends('layouts.app')

@section ('content')

  <div class="container">
        <div class="row justify-content-center">
		     <div class="mx-auto my-5 col-md-6">
		     	@foreach ($polls as $poll)
				<div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
					<h2 class="text-headline text-white">{{ $poll->title }}</h2>
					<h4 class="text-body text-mpblue-500">{{ $poll->description }}</h4>
					<div class="end-of-story-button mt-20px">
						<a href = "{{ $poll->poll_link }} " class="py-3 br-10px px-4 bg-msblue-600  text-caps">Elect!</a>
					</div>
				</div>
				@endforeach
			</div>
        </div>
    </div>
  
@endsection