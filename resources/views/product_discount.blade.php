<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product discount</title>
    <style>

        table{
            border: blue solid 2px;
        }
    </style>
</head>
<body>
<form action="/product-discount" method="post">
    @csrf
    <table>
        <th><h1>Product Discount Calculator</h1></th>
        <tr>
            <td>Product Description:</td>
            <td>
                <input type="text" name="productDescription" placeholder="input product description">
            </td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td>
                <input type="text" name="listPrice" placeholder="input list price">
            </td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td>
                <input type="discountPercent" placeholder="input discount percent">(%)
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Calculate Discount">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
