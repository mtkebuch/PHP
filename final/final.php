<?php
$products=[
    "laptop"=>2500,
    "smartphone"=>1200,
    "headphones"=>300,
    "monitor"=>800,
    "keyboard"=>150
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <form action="" method="post">
    <table border="1">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Check</th>
        </tr>
        <tr>
            <th>Laptop</th>
            <th>2500</th>
            <th><input type="checkbox" name="products[]" value="laptop"></th>
        </tr>

         <tr>
            <th>Smartphone</th>
            <th>1200</th>
            <th><input type="checkbox" name="products[]" value="smartphone"></th>
        </tr>

         <tr>
            <th>Headphones</th>
            <th>300</th>
            <th><input type="checkbox" name="products[]" value="headphones"></th>
        </tr>

         <tr>
            <th>Monitor</th>
            <th>800</th>
            <th><input type="checkbox" name="products[]" value="monitor"></th>
        </tr>

         <tr>
            <th>Keyboard</th>
            <th>150</th>
            <th><input type="checkbox" name="products[]" value="keyboard"></th>
        </tr>
    </table>
    <br>
    <button name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if(isset($_POST['products'])){
        if(count($_POST['products'])>3){
            echo "You can only choose 3 products";
        }
        else {
            $sum=0;
            foreach ($_POST['products'] as $price) {
                $sum+=$products[$price];
            }
        if($sum>3000){
            echo "Product have to be upon 3000";
        }
        else{
            echo "You have chosen products with total price of $sum";
        }
        }
    }
}
?>