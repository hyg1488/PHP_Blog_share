<?php
    if(!isset($_GET['chk'])){
        $_GET['chk'] = 0;
    }
    $chk = $_GET['chk'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "imports/head.php";
         ?>
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
                            <h1>Login</h1>
                            <h2 class="subheading">Please join if you want to talk with me.</h2>
                            <span class="meta">
                                <form action="doLogin.php" method="post">
                                <!-- <form action="doLoginSecSql.php" method="post"> -->

                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><div style="margin-left:4px;margin-right:4px;">ID</div> </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id" required>
                                    </div>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">PW</span>
                                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pw" required>
                                    </div>
                                    <?php if($chk == 1 ){ ?> 
                                    <div style="display:inline-block; color:#FF0000;">Login Failed - user is not authenticated.</div>
                                    <?php } ?>
                                    <div style="text-align:right;"><button type="submit" class="btn btn-secondary">login</button></div>
                                </form>
                                <a href="signUp.php?cnt=0" class="join_me">If you don't have an ID, sign up</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>
