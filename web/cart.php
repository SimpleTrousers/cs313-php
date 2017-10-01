<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Monkey Cart</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <?php
    $baboon = $_POST["baboonChk"];
    $howler = $_POST["howlerChk"];
    $capuchin = $_POST["capuchinChk"];
    $marmoset = $_POST["marmosetChk"];

    function baboon() {
        echo $baboon;
        if ($baboon == "baboon") {
            echo "POOOP";
        }
    }
    ?>

    <h1>Your Cart!</h1>
    <form action="checkout.php" method="post">
        <input class="submit" type="submit" value="Checkout!">
    </form>
    <?php echo $_POST["marmosetChk"];
    echo $_POST["howlerChk"];
    baboon();
    echo $_POST["capuchinChk"]; ?>
</body>
</html>