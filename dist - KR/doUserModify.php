

<?php

    include "imports/head.php";
    
     if($_POST['id'] == null or $_POST['email01'] == null or $_POST['email02']== null  
    or $_POST['nickname']== null  or $_POST['currentPw']== null  ){ ?>
        <script>
        window.location.href = 'myPage.php?cnt=1';</script>
    <?php }else{
        if($_POST['currentPw'] ==  $_SESSION['user']['passwd']){

            $id = $_POST['id'];
            $email01 = $_POST['email01'];
            $email02 = $_POST['email02'];
            $nickname = $_POST['nickname'];
            $textArea = str_replace("<br>", "\n", $_POST['textArea']);
            $regDate = $_SESSION['user']['regDate'];
            
            if($_POST['changePw'] == null){ ?> <script>
                alert('no'); <?php
                $sql = "update user_info SET id = '$id',  regDate='$regDate', updatedate = now(), email ='$email01@$email02', nickname ='$nickname', aboutMe='$textArea' where id = '$id'";
                $rs = mysqli_query($myConn, $sql);

                $sql = "SELECT * FROM user_info WHERE id ='$id'";
                $rs  = mysqli_query($myConn,$sql);
                $user = mysqli_fetch_assoc($rs);
            }else{
                if($_POST['confirmPw'] == null){
                    ?><script>
                    window.location.href = 'myPage.php?cnt=2';</script>
                <?php }else{
                        $pw = $_POST['changePw'];
                        $confirmPw = $_POST['confirmPw'];
                        if($pw != $confirmPw){ ?>
                            <script>window.location.href = 'myPage.php?cnt=2';</script>
                       <?php }else{
                            $sql = "update user_info SET passwd='$pw',  regDate='$regDate', updatedate = now(), email ='$email01@$email02', nickname ='$nickname', aboutMe='$textArea' where id = '$id'";
                            $rs = mysqli_query($myConn, $sql); 
                           
                            $sql = "SELECT * FROM user_info WHERE id ='$id'";
                            $rs  = mysqli_query($myConn,$sql);
                            $user = mysqli_fetch_assoc($rs);

                            $_SESSION['user'] = $user;
                           ?>
                                       <script> window.location.href = 'myPage.php?cnt=0';</script>
                           <?php
                       }
                     }
            ?>
            <script> window.location.href = 'myPage.php?cnt=0';</script>
            <?php
            }
        }else{ ?>
            <script> window.location.href = 'myPage.php?cnt=2';</script>
<?php
        }
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
