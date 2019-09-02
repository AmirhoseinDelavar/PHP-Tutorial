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
ini_set('display_errors', 'on');
error_reporting(-1);
$num0 = (int)"123ali";// 123
$num1 = (int)"ali123";// 0

is_numeric($num0);
is_int($num0);
gettype($num0);

//        if (isset($_GET['btn-submit']))
//            $a = $_GET['fn'];
//        print $a;
$u = isset($_POST['un']) ? $_POST['un'] : '';
$p = isset($_POST['pass']) ? $_POST['pass'] : '';
$isShow = true;
if (isset($_POST['btn-submit'])) {
    if ($_POST['un'] == '')
        print "enter u";
    elseif ($_POST['pass'] == '')
        print "enter pass";
    else{
        $u = $_POST['un'];
        $p = $_POST['pass'];
        if (($u == 'ali' && $p == '123') || ($u == 'reza' && $p == '321'))
            $isShow = false;
        else
            print 'check pass and username';

    }
}

?>
<?php
    if ($isShow) {
        ?>
        <form action="" method="post">
            <div>
                <label for="un">un:</label>
                <input type="text" name="un" value="<?php
                print $u;
                ?>">
                <label for="Pass">Pass:</label>
                <input type="text" name="pass" value="<?php
                print $p;
                ?>">
            </div>
            <div>
                <input type="submit" name="btn-submit" value="send">
            </div>
        </form>
        <?php
    }
?>
</body>
</html>