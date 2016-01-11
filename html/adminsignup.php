<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-voting</title>
    <link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <script src="../js/popup.js"></script>
</head>
<body>
<div class="contaier-fluid main">
    <?php include ('banner.php')?>
        <div class="row home">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="electoralform">
                    <fieldset>
                        <form action="responder.php" method="post">
                            <legend style="color:#265a88;border-bottom:solid 1px #265a88">Fill in your details below...</legend>
                            <div class="adminsignupinput">
                                <input type="text"  name="fname"/>
                                <label>First Name</label>
                            </div>
                            <div class="adminsignupinput">
                                <input type="text"  name="lname"/>
                                <label>Last Name</label>
                            </div>
                            <div class="adminsignupinput">
                                <input type="text"  name="username"/>
                                <label>Username</label>
                            </div>
                            <div class="adminsignupinput">
                                <input type="password"  name="password1"/>
                                <label>Create admin password</label>
                            </div>
                            <div class="adminsignupinput">

                                <input type="password"  name="password2"/>
                                <label>Confirm your password</label>
                            </div>
                            <div class="adminsignupinput">
                                <div id="password">
                                    <input type="email"  name="email"/>
                                    <label>Email address</label>
                                </div>
                            </div>
                            <div class="adminsignupinput">
                                <input type="number"  name="phone"/>
                                <label>Phone number</label>
                            </div>
                            <div class="gender">
                                <b><input type="radio" value="male" name="sex" required>Male
                                    <input type="radio" value="female" name="sex" style="margin-left: 50px" required>Female</b>
                            </div>
                            <button class="btn btn-lg btn-primary" type="submit">Create</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    <?php include ('footer.php') ?>
</div>
    <script src="../bootstrap-3.3.5-dist/jquery/jquery.min.js"></script>
    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>