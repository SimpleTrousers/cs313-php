<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Michael's Monkeys</title>

    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <form action="POST">
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
                    The yellow baboon is one of the most successful primates and it can eat
                    pretty much any type of food that it comes across. They usually live 20-30 years.
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
            </tr>
            <tr>
                <td>
                    <img src="howler.jpg" />
                </td>
            </tr>
            <tr>
                <td>
                    <img src="marmoset.jpg" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>