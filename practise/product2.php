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
                <td>TV</td>
                <td>Price</td>
                <td>Select Item</td>
            </tr>

            <tr>
                <td>PC</td>
                <td>2500</td>
                <td><input type="checkbox" name="product[]" value="pc"></td>
            </tr>

            <tr>
                <td>Laptop</td>
                <td>3500</td>
                <td><input type="checkbox" name="product[]" value="laptop"></td>
            </tr>

            <tr>
                <td>Ipad</td>
                <td>1500</td>
                <td><input type="checkbox" name="product[]" value="ipad"></td>
            </tr>
            

        </table>
        <br>
        <button name="button">Buy</button>

    </form>

    <?php
    $product=[
        "pc"=>2500,
        "laptop"=>3500,
        "ipad"=>1500,

    ];

  

    if(!empty($_POST['product'])) {
        if (count($_POST['product'])>2)
        {
            echo "მხოლოდ 2 ნივთის არჩევა შეგიძლია";

        }
        else { 
            $sum=0;
            foreach ($_POST['product'] as $p) {
                $sum+=$product[$p];
                
        }     
        
        
        if ($sum>4000) {
            echo "პროდუქცია 4000 ლარს არ უნდა აღემატებოდეს";
        }
        else {
           echo " წარმატებით მოხდა შეძენა, სულ:  " , $sum;
        }

            
        }
        
    
    }

    ?>
</body>
</html>