
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-voting</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
        function option(){

        }
    </script>
</head>
<body>
<div class = "header">
</div>
<div class = "Sign-In">
    <div class="clear">

    </div>
    <div class = "opt">
    <div id = "admin">
        Electoral chairman
        </div>
    <div id = "voter">
        Voters
    </div>
    </div>

</div>
<?php include ('footer.php') ?>
<form>
    <fieldset>
    <legend>Registration</legend>
        <label>Username</label>
        <input type="text" name="username"/><br><br>
        <label>E-mail</label>
        <input type="email" name="email"/><br><br>
        <label>Password</label>
        <input type="password" name="password"/><br><br>
        <label>Confirm Password</label>
        <input type="password" name="conpassword"/><br><br>
        <button>Submit</button>

        </fieldset>
</form>
</body>
</html>