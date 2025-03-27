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
        <?php
            
            $m=rand(1,100);
            $n=rand(1,200);
            

            echo "<tr>";
            for ($i=0; $i < $m ; $i++) { 
                for ($j=0; $j < $n; $j++) { 
                    echo "<td>".rand(1,100)."</td>";
                }
            echo "</tr>"; 
            }
        ?>
        </table>
    </form>
</body>
</html>