@extends('layout/navbar')
@section('managerlist')
<body>
<div class="container">
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">
        <div>
        <a href="{{route('admin.home.home')}}">Home</a>
        </div>
        <h3>Manager List</h3>
        </div>

	<br>
	<table class="table table-bordered yajra-datatable">
	<div>
		<a href="{{route('admin.home.mpdf')}}" padding="right">Download List</a>
    </div>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>User Name</td>
			<td>Email</td>
			<td>Contact Number</td>
			<td>NID</td>
			<td>Gender</td>
			<td>Type</td>
			<td>Address</td>
			<td>Action</td>

		</tr>
	</thead>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['name']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['email']}}</td>
			<td>{{$users[$i]['contactno']}}</td>
			<td>{{$users[$i]['nid']}}</td>
			<td>{{$users[$i]['gender']}}</td>
			<td>{{$users[$i]['usertype']}}</td>
			<td>{{$users[$i]['address']}}</td>
			<td>
				<a href="{{route('admin.home.edit', $users[$i]['id'])}}">Edit</a> |
				<a href="{{route('admin.home.delete', $users[$i]['id'])}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>



</body>
@endsection