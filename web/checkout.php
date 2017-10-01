<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Monkey Checkout</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>

    <h1>Checkout!</h1>
    <form action="checkout.php" method="post">
        <table>
        <?php
        function baboon() {
            if ($_POST["baboonChk"] != "") {
                echo "<tr><td>Baboon!</td></tr>";
            }
        }

        function marmoset() {
            if ($_POST["marmosetChk"] != "") {
                echo "<tr><td>Marmoset!</td></tr>";
            }
        }

        function howler() {
            if ($_POST["howlerChk"] != "") {
                echo "<tr><td>Howler!</td></tr>";
            }
        }

        function capuchin() {
            if ($_POST["capuchinChk"] != "") {
                echo "<tr><td>Capuchin!</td></tr>";
                $_POST["capuchin"] = "capuchin";
            }
        }

        baboon();
        capuchin();
        howler();
        marmoset();
        ?>
        </table>
        <input class="submit" type="submit" value="Checkout!">
    </form>
    <form action="cart.php">
        <input class="submit" type="submit" value="Return to Cart">
    </form>
</body>
</html>