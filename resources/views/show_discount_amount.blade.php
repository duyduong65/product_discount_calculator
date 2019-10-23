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
<form >
    <table>
        <th><h1>Product Discount Calculator</h1></th>
        <tr>
            <td>Product Description:</td>
            <td>
                <span>{{$productDescription}}</span>
            </td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td>
                <span>{{$listPrice}}</span>
            </td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td>
                <span>{{$discountPercent}}</span>(%)
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <span>{{$discountAmount}}</span>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
