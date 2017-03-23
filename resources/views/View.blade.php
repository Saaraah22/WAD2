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
  height: 100%;
    background-color: white;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 30px;
  padding-top: 15px;
  margin-top: 30px;
  margin-left: 400px;
  margin-right: 400px;
  color:black;
  border-radius: 3px;
}
thead{
  background-color: #787878;
  color: white;
}
</style>
</head>
@extends('layouts.app')

@section('content')
<body>


<div id="content">
@if(Session::has('flash'))
 <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 {{Session::get('flash')}} 
 </div>
@endif
<h1>{{$student->full_name}}</h1>
<h3>{{$student->student_number}}</h3>

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
      <td> CL4 </td>
      <td> {{ $student->CL1 }} </td>
      <td> {{ $student->CL2 }} </td>
    </tr>

    <tr>
      <td> PE4 </td>
      <td> {{ $student->PE1 }} </td>
      <td> {{ $student->PE2 }} </td>
    </tr>

    <tr>
      <td> Business Mngtm </td>
      <td> {{ $student->BM1 }} </td>
      <td> {{ $student->BM2 }} </td>
    </tr>

    <tr>
      <td> System </td>
      <td> {{ $student->System1 }} </td>
      <td> {{ $student->System2 }} </td>
    </tr>

    <tr>
      <td> Pagbasa </td>
      <td> {{ $student->Pagbasa1 }} </td>
      <td> {{ $student->Pagbasa2 }} </td>
    </tr>

    <tr>
      <td> IT Infra </td>
      <td> {{ $student->IT1 }} </td>
      <td> {{ $student->IT2 }} </td>
    </tr>

    <tr>
      <td> Statistics </td>
      <td> {{ $student->Stat1 }} </td>
      <td> {{ $student->Stat2 }} </td>
    </tr>

    <tr>
      <td> Web Application </td>
      <td> {{ $student->Web1 }} </td>
      <td> {{ $student->Web2 }} </td>
    </tr>

    <tr>
      <td> Soc Scie </td>
      <td> {{ $student->Soc1 }} </td>
      <td> {{ $student->Soc2 }} </td>
    </tr>
  </tbody>
</table>

<div class="text">
      <a href="/edit/{{ $student->id }}"><button type="submit" value="register" class="btn btn-success">Edit</button>
      </a>
    </div>
</form>
</div>
@endsection
</body>
</html>
