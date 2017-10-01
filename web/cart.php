<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Monkey Cart</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <h1>Your Cart!</h1>
    <?php echo $_POST["marmosetChk"];
    echo $_POST["howlerChk"];
    echo $_POST["baboonChk"];
    echo $_POST["capuchinChk"]; ?>

    <<button class="submit">Checkout!</button>
</body>
</html>