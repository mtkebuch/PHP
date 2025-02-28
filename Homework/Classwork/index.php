<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        .container{
            margin-left:200px;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="GET">
            <input type="text" name="name" placeholder="Enter your name" required>
            <br><br>
            <input type="text" name="surname" placeholder="Enter your surname" required>
            <br><br>
            <input type="text" name="position" placeholder="Enter your position" required>
            <br><br>
            <input type="text" name="income" placeholder="Enter your income" required>
            <br><br>
            <input type="text" name="tax" placeholder="Enter tax % (default 20%)">
            <br><br>
            <button>Submit</button>
        </form>
    </div>
    <table border="1">
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>position</th>
            <th>income</th>
            <th>busy_income</th>
            <th>net_income</th>
        </tr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
            $name = $_GET['name'];
            $surname = $_GET['surname'];
            $position = $_GET['position'];
            $income = (float)$_GET['income'];
            $tax = isset($_GET['tax']) && $_GET['tax'] != '' ? (float)$_GET['tax'] : 20;

            $busy_income = ($income * $tax) / 100;
            $net_income = $income - $busy_income;
            ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $surname ?></td>
                <td><?= $position ?></td>
                <td><?= $income ?></td>
                <td><?= $busy_income ?></td>
                <td><?= $net_income ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
