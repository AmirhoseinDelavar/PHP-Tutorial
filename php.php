<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $num0 = (int)"123ali";// 123
        $num1 = (int)"ali123";// 0

        is_numeric($num0);
        is_int($num0);
        gettype($num0);

        if (isset($_GET['btn-submit']))
            $a = $_GET['fn'];
        print $a;
    ?>
    <form action="" method="get">
        <div>
            <label for="fn">Fn:</label>
            <input type="text" name="fn">
        </div>
        <div>
            <input type="submit" name="btn-submit" value="send">
        </div>
    </form>
</body>
</html>