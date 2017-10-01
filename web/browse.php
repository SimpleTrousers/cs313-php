<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Mike's Monkeys</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <h1>Mike's Monkeys!</h1>
    <form action="cart.php" method="post">
        <table>
            <tr>
                <th>
                    Monkey Species
                </th>
                <th>
                    Description
                </th>
                <th>
                    Price
                </th>
                <th>
                    Purchase?
                </th>
            </tr>
            <tr>
                <td>
                    <img src="baboon.jpg" />
                </td>
                <td>
                    Using its ability to eat most of the food that it comes across and its adaptation skills to 
                    areas where humans have populated has allowed the yellow baboon to survive where some other
                    primates can't. They usually live 20-30 years.
                </td>
                <td>
                    $300.00
                </td>
                <td>
                    <input type="checkbox" name="baboonChk" value="baboon" <?php if(isset($_POST['baboonChk'])) echo "checked='checked'"; ?>  />
                </td>
            </tr>
            <tr>
                <td>
                    <img src="capuchin.jpg" />
                </td>
                <td>
                    Most people probably think of the white-headed capuchin when they think of monkeys. Many use
                    them as pets and they are able to eat a variety of foods. It has been seen using herbs as
                    medicine and other tools to help increase its odds. In a good home, it will probably
                    live more than 30 years.
                </td>
                <td>
                    $900.00
                </td>
                <td>
                    <input type="checkbox" name="capuchiniChk" value="capuchin" <?php if(isset($_POST['baboonChk'])) echo "checked='checked'"; ?>  />
                </td>
            </tr>
            <tr>
                <td>
                    <img src="howler.jpg" />
                </td>
                <td>
                    If you're into the whole, "Wake up to a roaring monkey" thing, but also into the, "Not so
                    active during the day" thing, the black howler is a good choice for you! They'll probably act as a
                    great alarm clock for about 20 years.
                </td>
                <td>
                    $250.00
                </td>
                <td>
                    <input type="checkbox" name="howlerChk" value="howler" <?php if(isset($_POST['baboonChk'])) echo "checked='checked'"; ?>  />
                </td>
            </tr>
            <tr>
                <td>
                    <img src="marmoset.jpg" />
                </td>
                <td>
                    Super cute, the pygmy marmoset is the smallest monkey in the world. They typically eat the gum and sap from
                    trees and they are also one of the more common pet monkeys. They live to be about 10-15 years.
                </td>
                <td>
                    $2001.07
                </td>
                <td>
                    <input type="checkbox" name="marmosetChk" value="marmoset" <?php if(isset($_POST['baboonChk'])) echo "checked='checked'"; ?>  />
                </td>
            </tr>
        </table>
        <input type="submit">
    </form>
</body>
</html>