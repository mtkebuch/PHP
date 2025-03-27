<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tableDesign.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="m" placeholder="M">
        <br>
        <input type="text" name="n" placeholder="N">
        <br>
        <input type="text" name="a" placeholder="a">
        <br>
        <input type="text" name="b" placeholder="b">
        <br>
        <button name="button">Click</button>
    </form>

    <?php
        if(isset($_POST['button'])){
            $m = $_POST["m"] ;
            $n = $_POST["n"] ;
            $a = $_POST["a"] ;
            $b = $_POST["b"] ;
            
            if($m <= 0 || $n <= 0 || $a > $b){
                echo "<h1>Invalid input!</h1>";
            } else {
                $sum_col = array_fill(0, $n, 0);

                echo "<table>";
                for ($i = 0; $i < $m; $i++) {
                    $sum_row = 0;

                    echo "<tr>";
                    for ($j = 0; $j < $n; $j++) {
                        $random_num = rand($a, $b);
                        echo "<td>".$random_num."</td>";
                        
                        $sum_col[$j] += $random_num;
                        $sum_row += $random_num; 
                    }
                    
                    echo "<td>".$sum_row."</td>";
                    echo "</tr>";
                }

                echo "<tr>";
                foreach ($sum_col as $numbers) {
                    echo "<td>".$numbers."</td>";
                }
                echo "</tr>";

                echo "</table>";
            }
        }
    ?>
</body>
</html>
