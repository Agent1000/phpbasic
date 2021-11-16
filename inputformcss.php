<?php
error_reporting(0);
$no1 = $_POST['number1'];
$no2 = $_POST['number2'];
$no3 = $_POST['number3'];
$no4 = $_POST['number4'];
$no5 = $_POST['number5'];
?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link  rel=""href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello</title>
    </header>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>

<form action="inputformcss.php" method="POST">
 <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 1</span>
    </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"name="number1">

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 2</span>
    </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"name="number2">
    
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 3</span>
    </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"name="number3">

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 4</span>
    </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"name="number4">

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 5</span>
    </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"name="number5">
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">reset</button>
        </form>

        
</body>
</html>