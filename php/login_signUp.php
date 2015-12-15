
<?php
//check if user is trying to signUp
if($_POST['submit']=='signUp'){
    if(empty($_POST['surname'])){
        //surname field cant be empty
    }elseif(empty($_POST['lastName'])){
        //lastName field can not be empty
    }elseif(empty($_POST['matric_number'])){
        //matric_number field cant be empty
    }elseif(empty($_POST['level'])){
        //level field cant be empty
    }elseif(empty($_POST['username'])){
        //username field cant be empty
    }elseif(empty($_POST['password1'])){
        //password field cant be empty
    }elseif(empty($_POST['password2'])){
        //print 'Please confirm your password first';
    }else{
        if($_POST['password1']!=$_POST['password2']){
            //print 'Guy,check your password again.';
        }else{
            //check if a row with surname, matric_number and level exists
            if($exists){
                //successful registration,create account for the person
            }else{
                //print 'We currently do not have your studentship details in our database.Contact the administrator.';
            }
        }
    }

//    $msg= 'success';
}
//check if user is trying to signIn
elseif($_POST['submit']='signIn'){
    if(empty($_POST['username'])){
        //username field must not be empty
    }elseif(empty($_POST['password'])){
        //password field must not be empty
    }else{
        //check if a pair of username and password exists in the database
        if($exists){
            //grant user access to his or her home page
        }else{
            //print 'username or password is incorrect';
        }
    }

}
//confront users neither doing signIn nor signUp but trying to do his/her shits.
else{
    print 'What the hell did you just do right now?. You are a bad person';
}




?>
<html>
<head>
    <title></title>
</head>
<body>
<?php
//print $msg;
?>
</body>
</html>