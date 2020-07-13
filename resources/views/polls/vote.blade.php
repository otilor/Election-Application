@extends ('layouts.app')


@section ('content')
<p class = "text-semibold pt-3 text-center text-headline">Vote</p>
<div class = "text-semibold mx-3 alert alert-info">{{ count($all_details["contestants"]) }} contestant vying for this position</div>

{{-- List all the section --}}
<section class = "mx-3">
	<p>{{ json_encode($all_details["contestants"]) }}</p>	
</section>

@endsection