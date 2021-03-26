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
    <input type="text" class="form-control field" id="f-1" placeholder="Bata(5-11)"><br>
    <input type="text" class="form-control field" id="f-2" placeholder="Inch" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-3" placeholder="CM" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-4" placeholder="EU(38-45)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-5" placeholder="UK(5-11)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="f-6" placeholder="US(5.5-11.5)" onkeyup="myFunction()"><br>
    <input type="text" class="form-control field" id="result" placeholder="Foot Length Result" onkeyup="myFunction()"><br>
</div>

<!-- script -->
<script>
    document.getElementById("f-1").onkeyup = f1Field;
    document.getElementById("f-2").onkeyup = f2Field;
    
function f1Field() {
        var f1 = document.getElementById("f-1").value;
        var f2 = document.getElementById("f-2");
        var f3 = document.getElementById("f-3");
        var f4 = document.getElementById("f-4");
        var f5 = document.getElementById("f-5");
        var f6 = document.getElementById("f-6");
        if(f1 == ""){
                f2.value ="";
                f3.value ="";
                f4.value ="";
                f5.value ="";
                f6.value ="";
    }
        switch(f1){
            case "5":
                f2.value =10;
                f3.value =24.5;
                f4.value =38;
                f5.value =5;
                f6.value =5.5;
                break;
            case "6":
                f2.value = "10 1/4";
                f3.value =25.1;
                f4.value ="39/40";
                f5.value =6;
                f6.value =6.5;
                break;
            case "7":
                f2.value = "10 1/8";
                f3.value =25.7;
                f4.value =41;
                f5.value =7;
                f6.value =7.5;
                break;
            case "8":
                f2.value = 11;
                f3.value =26.3;
                f4.value =42;
                f5.value =8;
                f6.value =8.5;
                break;
            case "9":
                f2.value = "11 1/4";
                f3.value =26.9;
                f4.value =43;
                f5.value =9;
                f6.value =9.5;
                break;
            case "10":
                f2.value = "11 5/8";
                f3.value =27.5;
                f4.value =44;
                f5.value =10;
                f6.value =10.5;
                break;
            case "11":
                f2.value = 12;
                f3.value =28.1;
                f4.value =45;
                f5.value =11;
                f6.value =11.5;
                break;
        }
}
function f2Field() {
        var f1 = document.getElementById("f-1");
        var f2 = document.getElementById("f-2").value;
        var f3 = document.getElementById("f-3");
        var f4 = document.getElementById("f-4");
        var f5 = document.getElementById("f-5");
        var f6 = document.getElementById("f-6");
        if(f2 == ""){
                f1.value ="";
                f3.value ="";
                f4.value ="";
                f5.value ="";
                f6.value ="";
    }
        switch(f2){
            case "5":
                f1.value =10;
                f3.value =24.5;
                f4.value =38;
                f5.value =5;
                f6.value =5.5;
                break;
            case "6":
                f1.value = "10 1/4";
                f3.value =25.1;
                f4.value ="39/40";
                f5.value =6;
                f6.value =6.5;
                break;
            case "7":
                f1.value = "10 1/8";
                f3.value =25.7;
                f4.value =41;
                f5.value =7;
                f6.value =7.5;
                break;
            case "8":
                f1.value = 11;
                f3.value =26.3;
                f4.value =42;
                f5.value =8;
                f6.value =8.5;
                break;
            case "9":
                f1.value = "11 1/4";
                f3.value =26.9;
                f4.value =43;
                f5.value =9;
                f6.value =9.5;
                break;
            case "10":
                f1.value = "11 5/8";
                f3.value =27.5;
                f4.value =44;
                f5.value =10;
                f6.value =10.5;
                break;
            case "11":
                f1.value = 12;
                f3.value =28.1;
                f4.value =45;
                f5.value =11;
                f6.value =11.5;
                break;
        }
}


</body>
</html>