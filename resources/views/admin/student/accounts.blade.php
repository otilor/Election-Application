@extends ('layouts.app')

@section ('content')
<div class="container pt-3">
	<h4 class="text-center">Accounts</h4>

	<table class="table profile-table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email address</th>
    </tr>
  </thead>
  <tbody>
  	@for ($i = 1; $i <= count($users); $i++)
    <tr onclick="window.location = '{{ $i }}'">
      <th scope="row">{{ $i  }}</th>
      <td>{{ $users[$i-1]->name }}</td>
      <td>{{ $users[$i-1]->email }}</td>
  	</tr>
  	@endfor
  </tbody>
</table>
</div>

@endsection