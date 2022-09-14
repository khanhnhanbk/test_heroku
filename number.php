<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add method</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="number.php" method="post">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Apple" name="fruits[]">
            <label class="form-check-label" for="flexCheckDefault">
                Apple
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Banana" name="fruits[]">
            <label class="form-check-label" for="flexCheckDefault">
                Banana
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Orange" name="fruits[]">
            <label class="form-check-label" for="flexCheckDefault">
                Orange
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Grapes" name="fruits[]">
            <label class="form-check-label" for="flexCheckDefault">
                Grapes
            </label>
        </div>
        <!-- submit button -->
        <input name="submit" id="submit" class="btn btn-primary" type="submit" value="Submit">
    </form>


    <?php
    //check if the form is submitted
    if (isset($_POST['fruits'])) {
        //loop through the array of fruits that were selected
        foreach ($_POST['fruits'] as $fruit) {
            //print the value out onto the screen
            echo $fruit . "<br>";
        }
    }
    ?>
</body>

</html>