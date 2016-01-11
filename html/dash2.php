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
    <script>
        function myfunction(){
            var text = "";
            var text2="";
            text = document.getElementById('number_of_posts').value;
            if(text>20|| text<1){
                document.getElementById('dem').innerHTML = 'Enter a value between 1 and 20';
                document.getElementById('dem1').innerHTML = '';
            }else{
                document.getElementById('dem').innerHTML = 'Post(s)<br>';
                document.getElementById('dem1').innerHTML = 'Pin(s)<br>';


                for(var i=1; i<=text; i++) {
                    var currentPost='post'+i;
                    var currentPin='pin'+i;
//                    text2 += "<input type='text'><br>";
                    document.getElementById('dem').innerHTML  += "<input type='text' name="+currentPost+"><br>";
                    document.getElementById('dem1').innerHTML  += "<input type='text' name="+currentPin+"><br>";
                }

            }
        }
    </script>
</head>
<body>
<div class="contaier-fluid main">
    <?php include ('banner.php')?>
    <div class="row home" style="background-color: transparent">
        <div class="col-lg-12" style="background-color: #265a88;text-align: center;border: solid 1px #265a88;padding: 0">
            <div class="container" style="margin-bottom: 20px">
                <div class="navbar " style="background-color: #265a88;margin-bottom: -5px;border: none;border-radius:0px;">
                    <ul class="nav nav-tabs nav-justified" style="margin-bottom: 0;margin-top:10px;border-bottom: none">
                        <li><a href="dash1.php" style="color: white;opacity: 0.7">Step1&nbsp<span class="glyphicon glyphicon-info-sign"></span></a></li>
                        <li class="active" style="color: white"><a href="#">Step 2&nbsp<span class="glyphicon glyphicon-unchecked"></span></a></li>
                        <li style="color: white">Step 3&nbsp<span class="glyphicon glyphicon-unchecked"></span></li>
                    </ul>
                </div>
                <fieldset class="dash" style="background-color: white;margin-top: 0;padding: 10px 10px">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3"  style="background-color: rgba(0,0,0,0.1);padding: 5px;border: solid 1px #265a88">
                        <p style="border-bottom: solid 2px #265a88"><label>Welcome to i-vote election creation page, please fill in appropriately, details of the election you want to
                            create in the fields provided below.</label></p>
                        Note: All fields are compulsory to complete the registration of your election.<br><br>
                            <fieldset>
                    <form action="dash3.php" method="post">

                        <div class="form-group">
                            <label for="exampleInputNameOfElection1">Name of Election</label>
                            <input type="text" class="form-control" id="name_of_election" name="name_of_election" placeholder="Name of Election" >
                        </div><br>
                        <div class="form-group">
                            <label for="exampleInputDateOfElection1">Date of Election</label>
                            <input type="date" class="form-control" id="date_of_election" name="date_of_election" placeholder="DD-MM-YYYY" >
                        </div><br>
                        <div class="form-group">
                            <label for="exampleInputTimeOfElection1">Time of Election</label>
                            <input type="time" class="form-control" id="time_of_election" name="time_of_election" placeholder="HH-MM" >
                        </div><br>
                        <div class="form-group">
                            <label for="exampleInputNoOfPosts1">Number of Posts</label>
                            <input type="number" class="form-control" id="number_of_posts" name="number_of_posts" min="1" max="20" oninput="myfunction()" placeholder="No of Posts" >

                            <div class = "demon">
                                <div class="row">
                                    <div class="col-lg-6"><div id="dem"></div></div>
                                    <div class="col-lg-6"><div id="dem1"></div></div>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group" style="text-align: center">
                            <label for="">CSV File Input</label>
                            <input type="file" id="" >
                        </div><br>
                        <div class="checkbox">
                            <label>

                            </label>
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit">Next Step&nbsp<span class="glyphicon glyphicon-forward"></span></button>
                    </form>
                            </fieldset>
                            </div>
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