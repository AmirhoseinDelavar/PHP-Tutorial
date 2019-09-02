<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $validated = false;
    if (isset($_POST['sbm'])){
        $fn = isset($_POST['un'])? $_POST['un']:'';
        $ln = isset($_POST['ln'])? $_POST['ln']:'';
        $em = isset($_POST['em'])? $_POST['em']:'';
        $pass = isset($_POST['pass'])? $_POST['pass']:'';
        $add = isset($_POST['add'])? $_POST['add']:'';
        $gnum = isset($_POST['g'])? $_POST['g']:'';
        $gn = $gnum == 1 ? 'female' : 'male';
        $colornum = isset($_POST['color'])? $_POST['color']:'';
        $color = '';
        switch ($colornum){
            case 0: $color = 'fab';break;
            case 1: $color = 'red';break;
            case 2: $color = 'blue';break;
            case 3: $color = 'green';break;
            default : $color = 'not chosen';
        }

        $city = isset($_POST['cty'])? $_POST['cty']:'';
        $validated = true;
    }
?>
<?php
    if (!$validated){
?>
    <form action="" method="post">
        FN : <input name="un"><br>
        LN : <input name="ln"><br>
        EMAIL : <input name="em"><br>
        PASS : <input type="password" name="pass"><br>
        ADDRESS : <textarea name="add"></textarea><br>
        GENDER : MALE<input type="radio" name="g" value="0" checked>FEMALE<input type="radio" name="g" value="1"><br>
        COLOR : <select name="color">
        <option value="0">fab</option>
        <option value="1">red</option>
        <option value="2">blue</option>
        <option value="3">green</option>
                </select><br>
        CITY : <input name="cty"><br>
        <button type="submit" name="sbm">set</button>
    </form>
<?php }else {?>
    <table>
        <tr>
            <td>FN :</td>
            <td><?php print $fn ?></td>
        </tr>
        <tr>
            <td>LN :</td>
            <td><?php print $ln ?></td>
        </tr>
        <tr>
            <td>EMAIL :</td>
            <td><?php print $em ?></td>
        </tr>
        <tr>
            <td>pass :</td>
            <td><?php print $pass ?></td>
        </tr>
        <tr>
            <td>address :</td>
            <td><?php print $add ?></td>
        </tr>
        <tr>
            <td>Gender :</td>
            <td><?php print $gn ?></td>
        </tr>
        <tr>
            <td>Color :</td>
            <td><?php print $color?></td>
        </tr>
        <tr>
            <td>City :</td>
            <td><?php print $city?></td>
        </tr>

    </table>
<?php } ?>
</body>
</html>