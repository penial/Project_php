<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>simple Calculator</h1>
    <form action="calculator.php" method="post">
        <div>
            <label>Enter the first number: </label><br>
            <input type="text" name="first">
        </div>
        <div>
            <label>Enter the second number</label><br>
            <input type="text" name="second">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    <?php
    $total=(int)$_POST["first"] + (int)$_POST["second"];
    $conversion_Total=(int)$total;
    echo "{$conversion_Total}";
    ?>
</body>
</html>