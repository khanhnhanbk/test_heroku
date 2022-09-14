<html>

<head>
    <title>PHP GCD</title>
</head>

<body>
    <form action="GCD.php" method="post">

        <div class="form-group">
            <label for="num1">num1</label>
            <input type="number" class="form-control" name="num1" id="num1" aria-describedby="helpId" placeholder="input a number">
            <label for="num2">num2</label>
            <input type="number" class="form-control" name="num2" id="num2" aria-describedby="helpId" placeholder="input a number">
        </div>
        <button type="submit" class="btn btn-primary">Find GCD</button>
    </form>

    <?php
    function gcdOfTwonumber(int $num1, int $num2): int
    {
        while ($num2 != 0) {
            $tempt = $num1 % $num2;
            $num1 = $num2;
            $num2 = $tempt;
        }
        return $num1;
    }

    echo "GCD is " . gcdOfTwonumber($_POST["num1"], $_POST["num2"]);
    ?>

</html>