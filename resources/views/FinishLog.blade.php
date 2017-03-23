<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	height: 100%;
    background-color: white;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 30px;
	padding-top: 15px;
	margin-top: 60px;
	margin-left: 400px;
	margin-right: 400px;
	color: black;
	border-radius: 3px;
}
/**button[type=submit]{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border-radius: 4px;
	cursor: pointer;
}*/

</style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div id="content">


<h1>You are Logged in!</h1>
<br><br>

	<table>
		<tbody>
			<th><a href="/AddStudent"><button class="btn btn-success" type="submit">Add Student</button></a> </th>
			<th><a href="/show"><button type="submit" value="register" class="btn btn-success">Show Students</button></a></th>
		</tbody>
	</table>
</div>
@endsection
</body>
</html>
