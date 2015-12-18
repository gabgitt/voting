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
<?php include ('banner.php')?>
<div class = "Sign-In">
    <div id = "welcm">
        <p>Welcome</p>
    </div>
    <div class = "signinbutton">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="passkey" placeholder="Passkey"><br><br>
        <div id = "butt">
            <div id = "contentinbutt1">
<!--               for backend to work on-->
                <img src="../images/SIN.png" width="170px" height="50px">
            </div>
            <div id = "contentinbutt2">
              <a href="option.php"><img src="../images/REG.png" width="170px" height="50px"></a>
            </div>
        </div>
    </div>


</div>
<?php include ('footer.php') ?>

</body>
</html>