<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "imports/head.php";
            
            if($_GET['id'] == null){
                ?>
                <script>window.location.href = 'myPage.php?cnt=0'; </script>
                <?php
            }else{
                $id = $_GET['id'];
                
                $sql = "update post set views = views+1  WHERE id = $id";
                $rs = mysqli_query($myConn, $sql);
                $sql = "SELECT * FROM post WHERE id = $id ORDER BY id DESC";
                $rs = mysqli_query($myConn, $sql);
                $article = mysqli_fetch_assoc($rs);
            }
         ?>

         <style>
             @media (max-width:1000px){
                .dateClass{
                    display:none;
                }
            }

         </style>
    </head>

    <body>
        <!-- Navigation-->
        <?php
            include "imports/navigation.php";
         ?>
        <!-- Page Header-->
        <header class="masthead" style=" height: 400px; background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7"> 
                        <div class="site-heading">
                        <h2><?=$article['title']?></h2>
                        
                            <span class="subheading">-  <?=$article['nickname']?> - </span>
                            <br>
                            <span class="subheading"> <?=$article['regDate']?></span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
<main class="mb-4">
            <!-- <div class="container px-4 px-lg-5"> -->
                <div class="row gx-4 gx-lg-5 justify-content-center" >
                    <div class="col-md-10 col-lg-8 col-xl-6" style="border: 1px solid #dcdcdc;">
                        <table class="table table-striped">
                            <br>
                            <?php $contents = str_replace("\n", "<br>", $article['contents']) ?>
                            <div style="width: 100%; margin-bottom:100px"><?=$contents?></div>
                            
                        </table>
                        <span class="subheading"> update :  <?=$article['updateDate']?></span><br>
                        <?php if(isset($_SESSION['user'])){ 
                            if($_SESSION['user']['nickname'] == $article['nickname']){ ?>         
                        <input type ="button" style ="font-size:14px;border-radius: 30px; margin-left:74%;" size="10" value="Modify" >
                        <input type ="button" style ="font-size:14px;border-radius: 30px; margin-left:1px" value="Delete" >
                        <?php } } ?> <br><br>                      

                    <div class="card mb-2">
                    <?php $sql = "SELECT COUNT(*) as count FROM reply WHERE relId = $id and reltypeCode = 'post'";
                                $rs = mysqli_query($myConn, $sql);
                                $count = mysqli_fetch_assoc($rs); ?>
                    <div class="card-header bg-light" style="font-size:15px">
                        <i class="fa fa-comment fa"></i> Reply &nbsp;<nav style="color:red; display: inline-block;"><?=$count['count']?></nav>
                    </div>
                    <div class="card-body">
                            <ul class="list-group list-group-flush">

                            <?php $sql = "select * from reply where relId = $id and reltypeCode = 'post'";
                                $rs = mysqli_query($myConn, $sql);
                                $replys = [];
                                while($reply = mysqli_fetch_assoc($rs)){
                                    $replys[] = $reply;
                                }
                            foreach($replys as $reply){ ?>
                            <li class="list-group-item">
                        <div class="form-inline mb-2" style="font-size:15px">
                                    &nbsp;<?=$reply['nickname']?> &nbsp;&nbsp;&nbsp;&nbsp; <div style="display:inline-block;font-size:12px; color:gray">&nbsp;  <?=$reply['regDate']?></div>
                                    <!-- <input type="text" class="form-control ml-2" placeholder="Admin" id="replyId" readonly>  -->
                                </div>
                                <div style="margin-left:6px;  width: 90%; margin-bottom:20px; color:gray; font-size:15px"><?=$reply['contents']?></div>                                
                                </li>
                                <?php }?>

                                <form action="doReply.php" method="get">
                                <li class="list-group-item">
                        <div class="form-inline mb-2" style="margin-top:20px;">
                        <?php if(!isset($_SESSION['user'])) {?>
                            <div style="font-size: 14px;color:red;">* You can enter comments after login.</div>
                        <?php }else{ ?>
                                    &nbsp; <?=$_SESSION['user']['nickname']?>
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="hidden" name="relTypeCode" value="post">
                                    
                                    <!-- <input type="text" class="form-control ml-2" placeholder="Admin" id="replyId" readonly>  -->
                                </div>
                                <textarea class="form-control"style="height: 100px;" id="exampleFormControlTextarea1" rows="3" required name="contents"></textarea>
                                <button type="submit" class="mt-3 "style=" background-color:black; color: white;WIDTH: 60pt; HEIGHT: 30pt; font-size: 10pt;" onClick="javascript:addReply();">post reply</button>
                        <?php } ?>        
                                </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                         <hr/>

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
