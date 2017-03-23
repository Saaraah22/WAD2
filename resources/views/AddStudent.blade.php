<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">


<style type="text/css"> 
 html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
            }

#content{
  padding-left: 60px;
  padding-right: 20px;
  padding-bottom: 30px;
  padding-top: 15px;
  
}
table{
  color: black;
}
thead{
  background-color: #787878;
  color: white;
}
th{
  width: 20px;
  height: 30px;
}
</style>
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
<form class="form-horizontal" method="POST" action="/StudentRegistered">

{{ csrf_field() }} 
 

  <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label">Full Name:</label>

      <div class="col-md-6">
      <input type="text" name="full_name" class="form-control" id="name" required>
       @if ($errors->has('full_name'))
           <span class="help-block">
              <strong>{{ $errors->first('full_name') }}</strong>
           </span>
       @endif
    </div>
  </div>

    <div class="form-group{{ $errors->has('student_number') ? ' has-error' : '' }}">
      <label for="ID Number" class="col-md-4 control-label">Student No:</label>

      <div class="col-md-6">
      <input type="number" name="student_number" class="form-control" id="number" required>
       @if ($errors->has('student_name'))
           <span class="help-block">
              <strong>{{ $errors->first('student_name') }}</strong>
           </span>
       @endif
    </div> 
  </div>
  <div id="content">

    <table class="table table-striped">

  <thead>
    
    <tr>

    <th> Subject </th>
    <th> First Semester </th>
    <th> Second Semester </th>

    </tr>
    

  </thead>

  <tbody>
    <tr>
      <td> Christian Living  </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="CL1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="CL2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Physical Education </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="PE1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="PE2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Business Management </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="BM1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="BM2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> System Design </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="System1" id="ex1" type="text" required>
      </div>
      </td>

      <td>
          <div class="col-xs-5">
            <input class="form-control" name="System2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Pagbasa at Pagsulat </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Pagbasa1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Pagbasa2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> IT Infrastructure </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="IT1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="IT2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Probability & Statistics </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Stat1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Stat2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Web Application </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Web1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Web2" id="ex1" type="text" required>
      </div>
      </td>

    </tr>

    <tr>
      <td> Society & Culture </td>
      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Soc1" id="ex1" type="text" required>
      </div>
      </td>

      <td> 
          <div class="col-xs-5">
            <input class="form-control" name="Soc2" id="ex1" type="text" required>
      </div>
      </td>
    </tr>
  </tbody>
</table>

<div class="text">
      <br>
      <button type="submit" value="register" class="btn btn-success">Submit</button>
    </div>
</form>
</div>

</body>
</html>
@endsection



