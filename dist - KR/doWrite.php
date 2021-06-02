<?php
    include "imports/head.php";
    if(!empty($_Post['title'])){
        echo "yes";
    }else{
        echo "no";
    }
    exit();
    if($_Post['title'] == null or $_Post['contents'] == null){ ?>
    <script>
    alert("Please, Check title !")
    window.location.href = 'write.php';</script>
    <?php } else{

        $title = $_Post['title'];
        $contents = str_replace("<br>", "\n", $_Post['contents']);
        $nickname = $_SESSION['user']['nickname'];

        $sql = "insert into article title = '$title', contents='$contents', nickname='$nickname'";
        $rs  = mysqli_query($myConn,$sql);
        $user = mysqli_fetch_assoc($rs);
    }
?>


<script>
    alert("Post writing success !")
    window.location.href = 'post.php';</script>
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
        <header class="masthead" style="background-image: url('assets/img/moon.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Login succeed</h1>
                            <h2 class="subheading">Welcome, <div style="color:#C6FF70;display:inline-block;"><?=$_SESSION['user']['nickname']?></div> !</h2>
                            Have a nice day ! Always good luck !
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

                   
    </body>
</html>
