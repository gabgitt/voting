<?php
if(isset($_POST['submit'])){
    $name_of_election=$_POST['name_of_election'];
    $date_of_election=$_POST['date_of_election'];
    $time_of_election=$_POST['time_of_election'];
    $number_of_posts= $_POST['number_of_posts'];
    echo($_POST['name_of_election']);
    $posts = array();
    for($i=1;$i<=$number_of_posts;$i++){
        $currentPost='post'.$i;
        $currentPin ='pin' .$i;
        $posts[$_POST[$currentPin]]=$_POST[$currentPost];
    }
//    print_r($posts);


}
?>
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
</head>
<body>
<div class="contaier-fluid main">
    <?php include ('banner.php')?>
    <div class="row home" style="background-color: transparent">
        <div id="blanket" style="display: none;">

        </div>
        <div id="popUpDiv" style="display: none;height: 250px;font-size: 50px;text-align:
        center">
            Election created <span class="glyphicon glyphicon-ok"></span><br>
            <a href="#" onclick="popup('popUpDiv')">
            <button class="btn btn-lg btn-success" style="font-size: 30px">
                Continue
            </button></a>
        </div>
        <div class="col-lg-12" style="background-color: #265a88;text-align: center;border: solid 1px #265a88;padding: 0">

            <div class="container" style="margin-bottom: 20px">
                <div class="navbar " style="background-color: #265a88;margin-bottom: -5px;border: none;border-radius:0px;">
                    <ul class="nav nav-tabs nav-justified" style="margin-bottom: 0;margin-top:10px;border-bottom: none">
                        <li ><a href="dash1.php" style="color: white">Step1&nbsp<span class="glyphicon glyphicon-info-sign" style="font-size: 18px"></span></a></li>
                        <li><a href="dash2.php"style="color: white">Step 2&nbsp<span class="glyphicon glyphicon-check" style="font-size: 18px"></span></a></li>
                        <li class="active"><a href="#">Step 3&nbsp<span class="glyphicon glyphicon-unchecked" style="font-size: 18px"></span></a></li>
                    </ul>
                </div>
                <fieldset class="dash" style="background-color: white;margin-top: 0;padding: 10px;">
                    <div id="field">
                        <form action="#" onsubmit="popup('popUpDiv')">
                            <input type="checkbox" required/> I agree to the terms and conditions of this application<br>
                            <button type="submit" class="btn btn-default">Create</button>
                        </form>
                    </div>
                </fieldset>

            </div>
        </div>

    </div>
    <?php include ('footer.php')?>
</div>
<script src="../bootstrap-3.3.5-dist/jquery/jquery.min.js"></script>
<script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!--   script for pop screen-->
<script type="text/javascript" src="../js/popup.js"></script>

</body>
</html>