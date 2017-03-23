<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<style type="text/css">	
body {background: #517fa4; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #517fa4 , #243949); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #517fa4 , #243949); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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


<h1>Student is Registered Completely!</h1>
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
