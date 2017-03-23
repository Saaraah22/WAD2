<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<style type="text/css">
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
#content{
	
    padding-left: 25px;
    padding-right: 25px;
	padding-bottom: 30px;
	padding-top: 20px;
	margin-top: 10px;
	margin-bottom: 40px;
	
	

}
table{
	border-collapse: collapse;
	width: 100%;
	color: black;
}
thead{
	background-color:#787878;
	color: white;
}
td{
	height: 30px;
}
</style>
</head>
@extends('layouts.app')

@section('content')
<body>



<div id="content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Students</div>
                <div class="panel-body">
@if(Session::has('flash_message'))
 <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 {{Session::get('flash_message')}} 
 </div>
@endif
	<table class="table table-striped">
		<thead>
			<tr>
				<th hidden> ID </th>
				<th> Full Name </th>
				<th> Student Number </th>
				<th> Options </th>

				
			</tr>
			
		</thead>

		<tbody>
			@foreach ($users as $user)
			<div class="btn-group">
			<tr>
				<td hidden>{{ $user->id }} </td>
				<td> {{ $user->full_name }} </td>
				<td> {{ $user->student_number }} </td>

				
				<td> <a href="/view/{{ $user->id }}">
						<button type="button" class="btn btn-info btn-xs">View</button>
						</a> 
					 <a href="/delete/{{ $user->id }}">
						<button type="button" class="btn btn-danger btn-xs">Delete</button>
					</a> </td>
				</div>
			
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/AddStudent"><button class="btn btn-success btn-md" type="submit">Add Student</button></a><br><br>
</div>
@endsection
</body>
</html>