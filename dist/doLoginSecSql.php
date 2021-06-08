<?php
    include "imports/head.php";

    if(!isset($_POST['id'])){ ?>
    <script>
    alert("Please, Check you'r ID !")
    window.location.href = 'index.php';</script>
    <?php } 
    if(!isset($_POST['pw'])){ ?>
    <script>
    alert("Please, Check you'r PW !")
    window.location.href = 'index.php';</script>
    <?php } 

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    // $myConn = mysqli_Connect("localhost", "hyg", "1234", "PHP_blog") or die("Connect ERROR");
    // $sql = "SELECT * FROM user_info WHERE id ='$id' AND passwd='$pw'";
    // $rs  = mysqli_query($myConn,$sql);
    // $user = mysqli_fetch_assoc($rs);
    global $dbConn;
    
    $sql = "SELECT * FROM user_info WHERE id =? AND passwd=?";
    $stmt -> $dbConn->prepare($sql);
    $stmt -> bind_param('ss', $id,$pw);
    $stmt -> $stmt->execut();
    $result = $stmt -> get_result();
    $user = $result -> fetch_assoc();

    if($user == null){?>
        <script>window.location.href = 'login.php?chk=1';</script>
    <?php }else{
        $_SESSION['user'] = $user;
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
