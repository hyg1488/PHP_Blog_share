
<?php
    include "imports/head.php";
    
    if ( $_SESSION['user'] ) {
        session_destroy();
        ?>
        <script>
            window.location.href = 'index.php';
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = 'index.php';
        </script>
        <?php
       
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
