<?php

session_start();

function values()
{
    $_SESSION['numbers'][] = $_POST['values'];

    echo "All Values: ";
    
    foreach ($_SESSION['numbers'] as $values) {
        echo $values . " ";
    }

    echo "<br>" . "Min Value: " . min($_SESSION['numbers']) . "<br>" . "Max Value: " . max($_SESSION['numbers']);
}

function destroy()
{
    session_destroy();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Min - Max Values</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<form action="" method="post">
    <input type="text" name="values">
    <button name="send">Send</button>
    <button name="delete">Delete Values</button>
</form>

<?php

if (isset($_POST['delete'])) {
    echo destroy() . "<p style='color: green;'>Success</p>";
    die;
}

if (!empty($_POST['values']) && isset($_POST['send'])) {
    echo values();
} else {
    echo "<p style='color: tomato;'>Please Add Value !</p>";
}

?>

</body>
</html>
