@extends ('layouts.app')
@section ('content')
<div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-mpblue">
          <h2 class="text-headline text-white">View all accounts</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/admin/student" class="py-3 br-10px px-4 bg-msblue-600  text-caps">View -></a>
          </div>
        </div>
      </div>
        </div>
    </div>
<div class="container">
        <div class="row justify-content-center">
         <div class="mx-auto my-3 col-md-6">
        <div class="flex-grow story-ended p-5 br-20px m-1 col-md-12 bg-success">
          <h2 class="text-headline text-white">Create an account</h2>
          <div class="end-of-story-button mt-20px">
            <a href = "/" class="py-3 br-10px px-4 bg-light text-success text-caps">Create</a>
          </div>
        </div>
      </div>
        </div>
    </div>
<!-- <h3 class="text-center text-semibold text-caps p-3">Current users</h3>
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
</table> -->
@endsection