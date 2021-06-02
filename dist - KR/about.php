<?php
    
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
            <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>My Career</h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <!-- <div class="container px-4 px-lg-5"> -->
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">No</th>
                                    <th style="text-align:center;">Title</th>
                                    <th style="text-align:center;">Date</th>
                                    <th style="text-align:center;">Views</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td style="text-align:center;">01</td>
                                    <td style="text-align:center;"><a href="post.php">
                                    <?=substr("Study PHP - List, Login, LogOut, comments",0,35);?>
                                    <?php if(strlen("Study PHP - List, Login, LogOut, comments")>=35){?>
                                    ...
                                    <?php } ?>
                                    </a>
                                    </td>
                                    <td style="text-align:center;">2016.02.02</td>
                                    <td style="text-align:center;">24</td>
                                    
                                </tr>
                
                            </tbody>
                            
                        </table>
                         <hr/>
                        <nav class="text-center">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            <!-- </div> -->
        </main>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>

<di>
