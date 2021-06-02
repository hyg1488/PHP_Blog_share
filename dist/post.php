<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "imports/head.php";
         ?>

         <style>
             @media (max-width:1000px){
                .dateClass{
                    display:none;
                }
            }

         </style>
    </head>

<?php

    $sql = "select * from post order by id desc";
    $rs = mysqli_query($myConn, $sql);
    $articles = [];
    while($article = mysqli_fetch_assoc($rs)){
        $articles[] = $article;
    }
?>
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
                            <h1>Post</h1>
                            <span class="subheading">Here is Yungi's Study post.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
<main class="mb-4">
            <!-- <div class="container px-4 px-lg-5"> -->
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-10">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">No</th>
                                    <th style="text-align:center;">Title</th>
                                    <th style="text-align:center;">Writer</th>
                                    <th style="text-align:center;" ><div class="dateClass">Date</div></th>
                                    <th style="text-align:center;">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($articles as $article){ 
                                $id = $article['id'];
                                $title = $article['title'];?>
                                <tr>
                                    <td style="text-align:center;"><?=$article['id']?></td>
                                    <td style="text-align:center;"><a href="detailPost.php?id=<?=$article['id']?>">
                                    <?=substr("$title",0,35);?>
                                    <?php if(strlen("$title")>=35){?>
                                    ...
                                    <?php }  $sql = "SELECT COUNT(*) as count FROM reply WHERE relId = $id and reltypeCode = 'post'";
                                            $rs = mysqli_query($myConn, $sql);
                                            $count = mysqli_fetch_assoc($rs); 
                                    if($count['count'] != 0){?>
                                    <div style="display: inline-block; color:red;">&nbsp;[<?=$count['count']?>]</div>
                                    <?php } ?>
                                    </a>
                                    </td>
                                    <td style="text-align:center;"><?=$article['nickname']?></td>
                                    <td style="text-align:center;"><div class="dateClass"><?=substr($article['regDate'],0,10)?></div></td>
                                    <td style="text-align:center;"><?=$article['views']?></td>
                                    
                                </tr>
                                <?php   } ?>
                            </tbody>
                            
                        </table>
                         <hr/>
                         <div style="text-align:right;"><button type="button"  onclick = "location.href = 'writePost.php' " class="btn btn-secondary" style="border-radius: 30px;">Writing</button></div>

                        <!-- <nav class="text-center">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                            </ul>
                        </nav> -->

                    </div>
                </div>
            <!-- </div> -->
        </main>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>
    </body>
</html>
