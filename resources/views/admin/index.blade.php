@extends ('layouts.app')
@section ('content')
<h3 class="text-center text-semibold text-caps p-3">Current users</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 1; $i < count($users); $i++)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $users[$i]->name }}</td>
      <td>{{ $users[$i]->email }}</td>
    </tr>
  @endfor
  </tbody>
</table>
@endsection