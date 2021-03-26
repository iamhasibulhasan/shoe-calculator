<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe size conversion</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="text-center">Shoe Calculator</h1>
<div class="container mt-5">
    <input type="text" class="form-control field" id="f-1" placeholder="Bata(5-11)"  onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-2" placeholder="Inch" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-3" placeholder="CM" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-4" placeholder="EU(38-45)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-5" placeholder="UK(5-11)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-6" placeholder="US(5.5-11.5)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="result" placeholder="Foot Length Result" onkeyup="myFunction()"><br>
</div>
<div>
    <input type="text" id="demo">
</div>

<!-- script -->
<script>
    document.getElementsByClassName("demo").value ="sasa";
function myFunction() {
  var x = document.getElementsByClassName("field");

    var f1 = document.getElementById("f-1").value;
    var f2 = document.getElementById("f-2").value;
    var f3 = document.getElementById("f-3").value;
    var f4 = document.getElementById("f-4").value;
    var f5 = document.getElementById("f-5").value;
    var f6 = document.getElementById("f-6").value;

if(f1 == null){
    document.getElementsByClassName("demo").value ="sasa";
}
// reset();
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].style.backgroundColor = "red";
  }
}

</script>
    <!--JS File  -->
    <script src="custom.js"></script>
</body>
</html>