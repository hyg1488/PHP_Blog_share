<?php   
    if(!isset($_GET['cnt'])){
        $_GET['cnt'] = 0;
    }
    $cnt = $_GET['cnt'];
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
        <header class="masthead" style="background-image: url('assets/img/sky.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <form action="doSignUp.php" method="post">
                            <h1>Sign Up</h1>
                            <h2 class="subheading">Please join if you want to talk with me.</h2>
                            <span class="meta">
                            ID
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's userID" aria-label="Recipient's username" aria-describedby="button-addon2" name="id">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="color:white;">ID Check</button>
                            </div>
                            E-Mail
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name = "email01">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server.com" aria-label="Server" name = "email02">
                            </div>
                            Password
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">password</span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name = "pw">
                            </div>
                            Confirm Password
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">password</span>
                            <input type="password" class="form-control" placeholder="confirm password" aria-label="Username" aria-describedby="basic-addon1" name = "confirmPw">
                            </div>
                            Nickname
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="user nickname" aria-label="Recipient's username" aria-describedby="button-addon2" name="nickname">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="color:white;">Nickname Check</button>
                            </div>
                            <?php if($cnt == 1){ ?>
                                <div style="display:inline-block; color:#CD0000	;"> Check the information you entered again.</div>
                            <?php } ?>
                            <?php if($cnt == 2){ ?>
                                <div style="display:inline-block; color:#CD0000	;"> Check your password and confirm password.</div>
                            <?php } ?>
                            <div style="text-align:right;"><input type="submit" class="btn btn-light" style="border-radius: 30px;" value="Sign up"></input>
                            </span>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>
