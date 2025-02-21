<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <style>
        .container{
            margin-left:200px;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="get">
            <input type="text" name="name" placeholder="Enter your name">
            <br><br>
            <input type="text" name="surname" placeholder="Enter your surname">
            <br><br>
            <input type="text" name="position" placeholder="Enter your position">
            <br><br>
            <input type="text" name="income" placeholder="Enter your income">
            <br><br>
            <input type="text" name="busy_income" placeholder="Busy income">
            <br><br>
            <button>Sign in</button>
        </form>
    </div>
    <table border="1">
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>position</th>
            <th>income</th>
            <th>busy_income</th>
        </tr>
        <tr>
            <th><?=$_GET['name']?></th>
            <th><?=$_GET['surname']?></th>
            <th><?=$_GET['position']?></th>
            <th><?=$_GET['income']?></th>
            <th><?=$_GET['busy_income']?></th>
        </tr>
    </table>
</body>
</html>
