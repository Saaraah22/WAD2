<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">


<style type="text/css"> 
body {  
  background: #517fa4; 
  background: -webkit-linear-gradient(to left, #517fa4 , #243949); 
  background: linear-gradient(to left, #517fa4 , #243949); 
}

#content{
  height: 100%;
  background-color: white;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 30px;
  padding-top: 15px;
  margin-top: 60px;
  margin-left: 200px;
  margin-right: 200px;
  color:black;
  border-radius: 3px;
}
</style>
</head>
<body>

<div id="content">
<h1>REGISTER</h1>

<form method="POST" action="/registration">

{{ csrf_field() }} 

 

  <div class="text"> 
      <label for="name">Full Name:</label>
      <input type="text" name="full_name" class="form-control" id="name">
    </div>

    <div class="text">
      <label for="ID Number">Student No:</label>
      <input type="number" name="student_number" class="form-control" id="number">
    </div> 

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
      <td> 
          <div class="col-xs-4">
            <input class="form-control" name="CL1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="CL2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> PE4 </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="PE1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="PE2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> Business Mngtm </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="BM1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="BM2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> System </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="System1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="System2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> Pagbasa </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Pagbasa1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Pagbasa2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> IT Infra </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="IT1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="IT2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> Statistics </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Stat1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Stat2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> Web Application </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Web1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Web2" id="ex1" type="text">
      </div>
      </td>

    </tr>

    <tr>
      <td> Soc Scie </td>
      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Soc1" id="ex1" type="text">
      </div>
      </td>

      <td> 
          <div class="col-xs-2">
            <input class="form-control" name="Soc2" id="ex1" type="text">
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



