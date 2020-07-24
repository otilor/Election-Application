@extends ('layouts.app')
@section ('content')
<div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
          <h2 class="text-headline text-white">Polls</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/admin/polls-sessions-links/polls" class="py-3 br-10px px-4 bg-msblue-600  text-caps">Check out!</a>
          </div>
        </div>
      </div>
        </div>
    </div>
<div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-success">
          <h2 class="text-headline text-white">Sessions</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/admin/polls-sessions-links/sessions" class="py-3 br-10px px-4 bg-light text-dark text-caps">Check out!</a>
          </div>
        </div>
      </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-dark">
          <h2 class="text-headline text-white">Links</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/admin/polls-sessions-links/links" class="py-3 br-10px px-4 bg-light text-dark text-caps">Check out!</a>
          </div>
        </div>
      </div>
        </div>
    </div>
    @endsection