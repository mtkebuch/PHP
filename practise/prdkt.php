<?php
$products=[
    "laptop"=>500,
    "smartphone"=>300,
    "pc"=>400,
];

$chosenProduct=$_POST['products']??'';
$totalAmount=0;
if(isset($_POST['button'])) {
    if(!empty($chosenProduct)){
        if(count($chosenProduct)>2) {
            echo "You can choose only 2 products";
        }
    else {
       foreach ($chosenProduct as $product) {
        $totalAmount+=$products[$product];
        
       }
       if ($totalAmount>500) {
        echo "You can't buy more than 500$ of products";
       }
       else {
        echo "Total: $totalAmount$ ";
       }
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Product</td>
                <td>Price</td>
                <td>Choose</td>
            </tr>
            <tr>
                <td>Laptop</td>
                <td>500</td>
                <td><input type="checkbox" name="products[]" value="laptop"></td>
            </tr>
            <tr>
                <td>Smartphone</td>
                <td>300</td>
                <td><input type="checkbox" name="products[]" value="smartphone"></td>
            </tr>
            <tr>
                <td>PC</td>
                <td>400</td>
                <td><input type="checkbox" name="products[]" value="pc"></td>
            </tr>

        </table>
        <br>
        <button name="button">BUY!</button>
    </form>
</body>
</html>