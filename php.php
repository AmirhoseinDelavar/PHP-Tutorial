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

//        if (isset($_GET['btn-submit']))
//            $a = $_GET['fn'];
//        print $a;
if (isset($_POST['btn-submit'])) {
    if ($_POST['un'] == '')
        print "enter u";
    elseif ($_POST['pass'] == '')
        print "enter pass";
    elseif ($_POST['un'] == 'ali') {
        if ($_POST['pass'] == '123')
            print 'hi ali';
        else
            print 'pass not correct';
    } elseif ($_POST['un'] == 'reza') {
        if ($_POST['pass'] == '321')
            print 'hi reza';
        else
            print 'pass not correct';
    }


}

?>
<form action="" method="post">
    <div>
        <label for="un">un:</label>
        <input type="text" name="un">
        <label for="Pass">Pass:</label>
        <input type="text" name="pass">
    </div>
    <div>
        <input type="submit" name="btn-submit" value="send">
    </div>
</form>
</body>
</html>