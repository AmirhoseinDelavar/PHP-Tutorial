<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/template.css">
    <title>Title</title>
</head>
<body class="main">
<div class="container">
    <?php
    $validated = false;
    if (isset($_POST['sbm'])) {
        $fn = isset($_POST['fn']) ? $_POST['fn'] : '';
        $ln = isset($_POST['ln']) ? $_POST['ln'] : '';
        $em = isset($_POST['em']) ? $_POST['em'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
        $add = isset($_POST['add']) ? $_POST['add'] : '';
        $gnum = isset($_POST['g']) ? $_POST['g'] : '';
        $gn = $gnum == 1 ? 'female' : 'male';
        $colornum = isset($_POST['color']) ? $_POST['color'] : '';
        $color = '';
        switch ($colornum) {
            case 0:
                $color = 'fab';
                break;
            case 1:
                $color = 'red';
                break;
            case 2:
                $color = 'blue';
                break;
            case 3:
                $color = 'green';
                break;
            default :
                $color = 'not chosen';
        }

        $city = isset($_POST['cty']) ? $_POST['cty'] : '';
        $validated = true;
    }
    ?>
    <?php
    if (!$validated) {
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="fn">First Name</label>
                <input type="text" class="form-control" id="fn" name="fn">
            </div>
            <div class="form-group">
                <label for="ln">Last Name</label>
                <input type="text" class="form-control" id="ln" name="ln">
            </div>
            <div class="form-group">
                <label for="em">Email Address</label>
                <input type="email" class="form-control" id="em" name="em">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="form-group">
                <label for="add">Address</label>
                <textarea class="form-control" id="add" name="add" rows="10"></textarea>
            </div>
            <label>Gender</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" value="0" name="g" checked>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" value="1" name="g">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>


            <!--            GENDER : MALE<input type="radio" name="g" value="0" checked>FEMALE<input type="radio" name="g"-->
            <!--                                                                                     value="1"><br>-->
            <div class="form-group">
                <label for="color">Color</label>
                <select name="color" id="color" class="form-control">
                    <option value="0" selected>fab</option>
                    <option value="1">red</option>
                    <option value="2">blue</option>
                    <option value="3">green</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input name="cty" id="city" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="sbm">Submit</button>
        </form>
    <?php } else { ?>
        <table class="table table-bordered table-hover">
            <tr>
                <td>FirstName</td>
                <td><b><?php print $fn ?></b></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><b><?php print $ln ?></b></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><b><?php print $em ?></b></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><b><?php print $pass ?></b></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><b><?php print $add ?></b></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><b><?php print $gn ?></b></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><b><?php print $color ?></b></td>
            </tr>
            <tr>
                <td>City</td>
                <td><b><?php print $city ?></b></td>
            </tr>

        </table>
    <?php } ?>
</div>
</body>
</html>