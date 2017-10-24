<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Monkey Checkout</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>

    <h1>Checkout!</h1>
    <form action="confirm.php" method="post">
        <?php
        echo $_POST["capuchin"];
        ?>
        <input class="submit" type="submit" value="Confirm!">
    </form>
    <form action="cart.php">
        <input class="submit" type="submit" value="Return to Cart">
    </form>
</body>
</html>