<?php
    include "imports/head.php";
    
    if($_GET['contents'] == null or $_GET['id'] == null or $_GET['relTypeCode']== null){ ?>
    <script>
    alert("! ERROR !");
    window.location.href = 'community.php';</script>
    <?php } else{

        $id = $_GET['id'];
        $contents = $_GET['contents'];
        $nickname = $_SESSION['user']['nickname'];
        $relTypeCode = $_GET['relTypeCode'];

        $sql = "INSERT INTO reply SET contents = '$contents', relId = $id, nickname = '$nickname', relTypeCode='$relTypeCode'";
        $rs  = mysqli_query($myConn,$sql);
    }
    if($relTypeCode == 'article'){
?>
<script>
    window.location.href = 'detail.php?id=<?=$id?>';</script>

<?php
    }else if ($relTypeCode == 'post'){
?>
<script>
    window.location.href = 'detailPost.php?id=<?=$id?>';</script>

<?php } ?>
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
