
<?php
    include "imports/head.php";
     if(!isset( $_POST['id']) or !isset( $_POST['pw']) or !isset( $_POST['email01']) or !isset( $_POST['email02']) 
    or !isset( $_POST['confirmPw']) or !isset( $_POST['nickname'])){ ?>
        <script> window.location.href = 'signUp.php?cnt=1';</script>
    <?php }else{

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $email01 = $_POST['email01'];
    $email02 = $_POST['email02'];
    $confirmPw = $_POST['confirmPw'];
    $nickname = $_POST['nickname'];


    if($pw != $confirmPw){ ?>
        <script>window.location.href = 'signUp.php?cnt=2';</script>
    <?php }
        $sql = "INSERT INTO user_info SET id = '$id', passwd ='$pw', email ='$email01@$email02', nickname ='$nickname'";
        $rs = mysqli_query($myConn, $sql);
 
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <!-- Navigation-->
        <?php
            include "imports/navigation.php";
         ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/sky.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <form action="DoSignUp.php">
                            <h1>Congratulations !</h1>
                            <h2 class="subheading"> You have successfully signed up.</h2>
                            <span class="meta">
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>
