@extends ('layouts.app')

@section ('content')
<div class="container pt-3">
	<h4 class="text-center">All polls</h4>

	<table class="table profile-table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  	@for ($i = 1; $i <= count($polls); $i++)
    <tr onclick="window.location = '{{ $i }}'">
      <th scope="row">{{ $i  }}</th>
      <td>{{ $polls[$i-1]->title }}</td>
      <td>{{ $polls[$i-1]->description }}</td>
  	</tr>
  	@endfor
  </tbody>
</table>
</div>

@endsection