<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <form action="" method="post">
 <div>
        <?php
        
        //1
        function sum($a, $b, $c) {
            return $a + $b + $c;
        } 
        function checkData($d){
            if(empty($d)) return 0;
            else return $d;
        }

        if (isset($_POST['sum'])) {
            echo "<h3>Sum = " . sum(checkData($_POST['n1']),             
                                   (checkData($_POST['n2'])),
                                   (checkData($_POST['n3']))) . "</h3>";
        }
        //2
        function product($a, $b, $c) {
            return $a * $b * $c;
        };

        function checkData1($d){
            if(empty($d)) return 1;
            else return $d;
        }
        if (isset($_POST['product'])) {
            echo "<h3>Product = " . product(checkData1($_POST['n1']),
                                            checkData1($_POST['n2']),
                                            checkData1($_POST['n3'])).
                                            "</h3>";
        }

        ?>
    </div>

  <div class="text-style">  

    <input type="number" name="n1" placeholder="number1">
    <br>

    <input type="number" name="n2" placeholder="number2">
    <br>

    <input type="number" name="n3" placeholder="number3">
    <br>

    <button name="sum">Sum</button>
    <br>

    <button name="product">Product</button>
    <br>

  </div>

</form>

</body>
</html>