<?php
$firstNumber = rand(10, 99);
$secondNumber = rand(10, 99);
$operation = rand(0, 1) ? '+' : '-';
$result = ($operation == '+') ? $firstNumber + $secondNumber : $firstNumber - $secondNumber;

if (!empty($_POST['result'])) {
    $userResult = $_POST['result'];
    if ($userResult == $result) {
        $message = "Correct!";
    } else {
        $message = "Incorrect. The correct answer is: " . $result;
    }
}
?>

<form method="post">
    <label><?php echo $firstNumber . " " . $operation . " " . $secondNumber; ?> = </label>
    <input type="text" name="result" required>
    <button type="submit">Submit</button>
</form>

<?php
if (isset($message)) {
    echo $message;
}
?>
