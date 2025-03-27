<?php
$product=[
    "Laptop"=>2500,
    "Smartphone"=>1200,
    "Headphones"=>300,
    "Monitor"=>800,
    "Keyboard"=>150

];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table border="1">
        <tr>
            <td>პროდუქტი</td>
            <td>ფასი</td>
            <td>არჩევა</td>
            

        <tr>
            <td>ლეპტოპი</td>
            <td>2500</td>
            <td><input type="checkbox" name="product[]" value="Laptop"></td>
        </tr>

        <tr>
            <td>სმარტფონი</td>
            <td>1200</td>
            <td><input type="checkbox" name="product[]" value="Smartphone"></td>
        </tr>

        <tr>
            <td>ყურსასმენები</td>
            <td>300</td>
            <td><input type="checkbox" name="product[]" value="Headphones"></td>
        </tr>

        <tr>
            <td>მონიტორი</td>
            <td>800</td>
            <td><input type="checkbox" name="product[]" value="Monitor"></td>
        </tr>

        <tr>
            <td>კლავიატურა</td>
            <td>150</td>
            <td><input type="checkbox" name="product[]" value="Keyboard"></td>
        </tr>
        

       </table>
       <br>
       <button name="button">Click me please</button>
       
    </form>
<br>
<br>
    <?php
$sum=0;

if(!empty($_POST['product'])) {
    if (count($_POST['product'])>3){
        echo "3-ზე მეტი პროდუქტის არჩევა არ შეიძლება!";
    }
    else {
        foreach ($_POST['product'] as $p) {
            $sum+=$product[$p];
           
        }
    if ($sum>3000){
        echo "შენი შეკვეთა უნდა იყოს 3000 ლარზე ნაკლები";
    }
    else {
        echo "შენი შეკვეთა წარმატებით გაფორმდა!სულ:", $sum;
    }
    
        
    } 
    
}

    ?>
</body>
</html>