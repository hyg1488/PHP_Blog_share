

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "imports/head.php";
            if(!isset($_SESSION['user'])){
                ?>
                
                <script>
                alert("Please, login first !");
                window.location.href = 'post.php';</script>

                <?php
            }
         ?>
    </head>
    <body>
        <!-- Navigation-->
        <?php
            include "imports/navigation.php";
         ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                        <h1>Write Post</h1>
                        
                            <span class="subheading"> Write new post</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
<main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 ">
                            <form action="doWrite.php" method="post">
                            <div style="margin-left: 80px;">
                            Title<br>
                            <div class="input-group mb-3 ">
                            <input type="text" name="title" size=45></div><br>
                            Contents<br>
                            <textarea name="contents" id="" cols="45" rows="10"></textarea>
                             </div>
                            <div style="text-align:right;"><button type="submit" class="btn btn-secondary" style="border-radius: 30px;">Writing</button></div>
                            </form>
                        </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>
