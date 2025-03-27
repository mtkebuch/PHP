<?php
$cities=[
    "paris"=>50,
    "london"=>100,
    "newyork"=>150
];

$cities_selected=$_POST['cities'] ?? [];
$days=$_POST['days'] ?? [];

$totalCost=0;

if (isset($_POST['button'])) {
    if(!empty($cities_selected)&& !empty($days)) {
        

      if (count($cities_selected)>2) {
            echo "You can't select more than 2 cities";

        }


      else {
            foreach ($cities_selected as $key => $value) {
                $totalCost+=$cities[$value]*(int)$days[$key];
            }
            if ($totalCost>500) {
                  echo "Price should be around 500. ";
        }

            else {
                echo "You have to pay:". $totalCost;
    }

     }

     

    } 
    

    else {
        echo "Please enter cities and days.";
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
        <table border='1'>
            <tr>
                <td>City</td>
                <td>Price</td>
                <td>Choose country</td>
                <td>Number of days</td>
            </tr>

            <tr>
                <td>Paris</td>
                <td>50</td>
                <td><input type="checkbox" name="cities[]" id="paris" value="paris"></td>
                <td><input type="number" name="days[]" id=""></td>
                
            </tr>

            <tr>
                <td>London</td>
                <td>100</td>   
                <td><input type="checkbox" name="cities[]" id="london" value="london"></td>
                <td><input type="number" name="days[]" id=""></td>
             
            </tr>

            <tr>
                <td>New York</td>
                <td>150</td>
                <td><input type="checkbox" name="cities[]" id="newyork" value="newyork"></td>
                <td><input type="number" name="days[]" id=""></td>
               
            </tr>
            

        </table>
        <br>
        <button name="button">Book</button>
    </form>
</body>
</html>