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
         <script src="http://madalla.kr/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#imgView").on('change', function(){
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                    $('#View').attr('src', e.target.result);
                }

              reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    </head>
    <style>
        textarea{
            height: 200px;
        }
        .userImage{
            width: 200px;
            height: 100px;
            background-color: white;
        }

        label {
        position: relative;
        }

        label:before {
        content: "";
        position: absolute;
        left: 10px;
        top: 0;
        bottom: 0;
        width: 50px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-gear' viewBox='0 0 16 16'><path d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z'/><path d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z'/></svg>")}
      

        .file_input_hidden
        {
    
            width:70px;
            height: 50px;
     
        font-size: 36px;
        position: absolute;
        right: 0px;
        top: 10px;
        opacity: 0;
        
        filter: alpha(opacity=0);
        -ms-filter: "alpha(opacity=0)";
        -khtml-opacity: 0;
        -moz-opacity: 0;
        }
    </style>
    <body>
        
        <!-- Navigation-->
        <?php
            include "imports/navigation.php";
         ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/my.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            
                        <?php if(!isset($_SESSION['user'])){ ?>
                            <script> alert('please, login first !');
                            window.location.href = 'login.php';</script>
                        <?php }else{ ?>
                            <h1>Hi, <?=$_SESSION['user']['nickname']?></h1>
                        <?php } ?>
                            <span class="subheading">My Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="doUserModify.php" method="post">
                <div class="input-group mb-3">     <form id="imgForm">
                <span class="input-group-text" id="basic-addon1" ><div class="userImage" style="background-color: #e9ecef;"><img id="View" src="assets/img/im.PNG" width="80px" height="80px" style="border-radius:30px; margin-top:10px;"  alt="image"  /></div>  &nbsp;&nbsp;&nbsp;&nbsp;  User ID &nbsp; &nbsp;
                <input type="text" class="form-control" placeholder="ID" aria-label="ID" aria-describedby="basic-addon1" value="<?=$_SESSION['user']['id']?>" name="id" readonly>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label> <input style="position: relative;" type="file" class="file_input_hidden"  id="imgView"> </form>
                        </label>
                </span>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Current Password</span>
                <input type="password" class="form-control" placeholder="Current Password" aria-label="Current Password" aria-describedby="basic-addon1" name="currentPw">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">password to change</span>
                <input type="password"  class="form-control" placeholder="password to change" aria-label="password to change" aria-describedby="basic-addon1" name="changePw">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                <input type="password"  class="form-control" placeholder="Confirm Password to change" aria-label="password to change" aria-describedby="basic-addon1" name="confirmPw">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nickname</span>
                <input type="text" class="form-control" value="<?=$_SESSION['user']['nickname']?>" placeholder="User Nickname" aria-label="Username" aria-describedby="basic-addon1" name="nickname">
                </div>

                

                <div class="input-group mb-3">
                <?php 
                $email = $pieces = explode("@", $_SESSION['user']['email']); 
                ?>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="email01" value="<?=$email[0]?>">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Server" aria-label="Server" name="email02" value="<?=$email[1]?>">
                </div>

                <div class="input-group">
                <span class="input-group-text">&nbsp; About Me &nbsp;</span>
                <textarea class="form-control" aria-label="With textarea" name="textArea"><?php if(isset($_SESSION['user']['aboutMe'])){?><?=$_SESSION['user']['aboutMe']?><?php }else{ ?><?php }?></textarea>
                </div>
                <br>
                <?php if($cnt == 1){ ?>
                    <div style=" color:#CD0000	;"> Please check the revision information.</div>
                <?php }else if($cnt == 2) { ?>
                    <div style=" color:#CD0000	;"> Check your confirm password !</div>
                <?php }else if($cnt == 3) { ?>
                    <div style=" color:#CD0000	;"> Please enter your confirm password !</div>
                <?php } ?>
                <div style="text-align:right;"><input type="submit"  onclick = "location.href = 'doUserModify.php' " class="btn btn-secondary" style="border-radius: 30px;" value="Modify"></div>
                <br>
            </div>
                </form>

            </div>
        </div>
        <!-- Footer-->
        <?php include "imports/footer.php" ?>

    </body>
</html>


