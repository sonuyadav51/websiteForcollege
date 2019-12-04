<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Saptrishi academy</title>
    <link rel="stylesheet" href="lib/css/all.min.css">
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="test.css">

</head>

<body>
<!--====== HEADER START --============-->
    <!-- banner -->
    <div class="container-fluid" style="height:200px; background:#ff9933;">
        <div class="row">
           <div class="col-2">
               <img src="img/logo_main.png" alt="" style="width:100%; height:180px; z-index:1;" class="mt-4 img-responsive">
           </div>
            <div class="col-8">
                <!--logo -->
                <img src="img/another.png" alt="" style="width:100%; height:200px; z-index:-1" class="img-responsive" draggable="false">
            </div>
        </div>
    </div>
   <!--============NAVBAR START================-->
    <nav class="navbar navbar-expand-lg">
           
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
            <span class="toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="navbar-nav text-capitalize large_main_nav  main_nav mx-auto">
                   <li><a href="#" class=" home" title="home">Home </a></li>
                    <li><a href="#" class="about dropdown" title="about">About Us <span class="caret"></span></a>
                        <!--======MAIN SUBMENU LIST====-->
                        <ul class="submenu aboutmenu d-none">
                            <li><a href="#">Controlar of Examination <span class="text-right" style="float:right;"><i class="fas fa-angle-right"></i></span></a>
                                <!--======MAIN SUBSUBMENU LIST====-->
                                <ul class="" style="margin-left:250px; position:absolute; margin-top:-38px;">
                                    <li><a href="#">SUBAbout2</a></li>
                                    <li><a href="#">SUBAbout3</a></li>
                                    <li><a href="#" style="border-bottom:none;">SUBAbout4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About2 <span class="text-right" style="float:right;"><i class="fas fa-angle-right"></i></span></a>

                                <ul class="" style="margin-left:250px; position:absolute; margin-top:-38px;">
                                    <li><a href="#">SUBAbout2</a></li>
                                    <li><a href="#">SUBAbout3</a></li>
                                    <li><a href="#" style="border-bottom:none;">SUBAbout4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About3</a></li>
                            <li><a href="#" style="border-bottom:none;">About4</a></li>
                        </ul>
                    </li>
                     <li><a href="#" style="" title="Admission">Admission &nbsp;<i class="fas fa-caret-down"></i></a></li>
                    <li><a href="#" style="" title="Faculties">Faculties &nbsp;<i class="fas fa-caret-down"></i></a></li>
                     <li><a href="#" style="" title="Result">Result &nbsp;<i class="fas fa-caret-down"></i></a></li>
                     <li><a href="#" class="career" title="career">Career <i class="fas fa-caret-down"></i></a>
                        <ul class="submenu careermenu ">
                            <li><a href="#">Career1 <span class="text-right" style="float:right;"><i class="fas fa-angle-right"></i></span></a>
                            
                             <ul class="" style="margin-left:250px; position:absolute; margin-top:-38px;">
                                    <li><a href="#">SUBAbout2</a></li>
                                    <li><a href="#">SUBAbout3</a></li>
                                    <li><a href="#" style="border-bottom:none;">SUBAbout4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Career2</a></li>
                            <li><a href="#">Career3</a></li>
                            <li><a href="#" style="border-bottom:none;">Career4</a></li>
                        </ul>
                    </li>
                    <li><a href="#" style="" title="Campus">Campus &nbsp;<i class="fas fa-caret-down"></i></a></li>
                     <li><a href="#" style="" title="Galary">Galary &nbsp;<i class="fas fa-caret-down"></i></a></li>
                    <li><a href="#" style="border-bottom:none;" title="contact">Contact</a></li>
               </ul>
               <div class="nav-info-items d-none d-lg-flex">
                    <!--single info-->
                  <div class="nav-info align-items-center d-lg-flex justify-content-between mx-lg-5">
                    <span class="info-icon mx-lg-3">
                         <i class="fas fa-phone"></i>
                    </span>
                   <p class="mb-0">+123 456 789</p>
                 </div>
                    <!--single info-->
               

              </div>
            </div>
        


        </nav>
   
   
   
   
   <!--============NAVBAR END================-->
<!--====== HEADER END --============-->
<!--============SLIDER START=============-->
<div class="carousel slide" data-ride="carousel" data-interval="3000" id="slider">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/home-banner.jpg" alt="" width="100%" height="450px" class="img-responsive" draggable="false">
            <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                <h4>Title1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/home-banner.jpg" alt="" width="100%" height="450px" class="img-responsive" draggable="false">
            <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                <h4>Title2</h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/home-banner.jpg" alt="" width="100%" height="450px" class="img-responsive" draggable="false">
            <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                <h4>Title3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <a href="#slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" style="width:40px; height:40px"></span>
        </a>
         <a href="#slider" class="carousel-control-prev" data-slide="prev" >
            <span class="carousel-control-prev-icon" style="width:40px; height:40px;"></span>
        </a>
        <ul class="carousel-indicators" style="padding-bottom:10px;">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ul>
    </div>
</div>
<!--============SLIDER END=============-->
<!--==============MAIN BODY START ============-->
<div class="container-fluid">
    <div class="row">
         <!--=======LEFT STUFF===============-->
        <div class="col-10 col-md-3 mx-auto my-2" style="">
        <div class="notification-container" style="box-shadow:0px 10px 10px rgba(0,0,0,.2);">
            <div class="noti-head p-2" style="background:#ff9933;">
              <h4 class="text-center text-capitalize">notice board</h4>
            </div>
            <div class="noti-body p-2" style="border:4px solid #ff9933; height:400px; overflow-y:scroll;">
                <ul>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""> hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                    <li class="py-3"><a href=""><i class="fas fa-bell"></i>&nbsp; hello this is new notification regarding your board exam 2019</a></li>
                </ul>
            </div>
            <div class="noti-footer">
                
            </div>
        </div>
    </div>
    <!--=======LEFT STUFF END===============-->
    <!--=======MIDDLE STUFF ===============-->
    <div class="col-10 col-md-6 mx-auto my-2" style="border:1px solid #ff9933;">
       <div class="main-content p-3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quo excepturi nesciunt et, ipsum veniam fuga harum iste, reiciendis dolores, facere non voluptatem mollitia amet. Quis dolores esse necessitatibus repudiandae soluta natus provident eligendi laboriosam deserunt quasi hic earum officia dolor nihil unde vitae distinctio a delectus, explicabo porro! Ut architecto officiis sint illum natus eum ipsa, deleniti quibusdam reiciendis doloremque molestias animi ea error repudiandae magnam aliquid! Perferendis blanditiis quaerat ullam error quae quis consectetur impedit cum velit autem quibusdam ea, voluptatibus praesentium, maxime dolorem rerum necessitatibus atque, laboriosam repudiandae consequuntur aspernatur accusamus, repellat eum! Neque eligendi nam eveniet quibusdam maxime quaerat odio delectus, eos aperiam, maiores vitae. Possimus est, facilis, obcaecati ratione eaque ex? Quidem enim eum totam quia, facilis aspernatur deleniti reiciendis libero eligendi mollitia, minus quis reprehenderit laudantium. Eveniet fugit esse culpa commodi dolores non itaque quaerat optio ab corporis sed qui tempora eum impedit deleniti quasi sit, perferendis facilis a. Dolorem atque, distinctio unde nobis id recusandae dicta similique fuga ad rerum hic tempore praesentium iste excepturi. Odio distinctio quaerat excepturi, similique deleniti, harum saepe itaque dicta deserunt minima. Eaque reprehenderit quia, praesentium, ratione modi esse quibusdam nam. Itaque omnis quos possimus, optio quas qui.
           
       </div>
        
    </div>
    <!--=======MODDLE STUFF END===============-->
    <!--=======RIGHT STUFF===============-->
     <div class="col-10 col-md-3 mx-auto my-2" style="">
             <div class="form-container" style="border:4px solid #ff9933;  ">
                <div class="suggestion-head p-2" style="background:#ff9933; border-bottom:1px solid yellow;">
                   <h4 class="text-center text-capitalize">suggestion</h4>
                </div>
                <div class="suggestion-body p-2" style="background:;">
                 <div class="form-content">
                  
                    <input type="text" name="name" class="  form-control mt-2 p-4" placeholder="Enter your name" style="">
                   
                    <input type="email" name="email" class="form-control mt-2" placeholder="Enter your email">
                  
                    <textarea name="suggestion" id="suggestion" cols="30" rows="5" class="form-control mt-2" placeholder="Write suggestion  here"></textarea>
                    <button class="btn btn-danger form-control  mt-2">Send</button>
                 </div>
                 </div>
             </div>
              
          </div>
    <!--=======RIGHT STUFF END===============-->
    </div>
</div>
   
    
    
    
    
<!--==============MAIN BODY END ============-->

    <script src="lib/js/jquery-3.3.1.js"></script>

    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/all.js"></script>
    <script type="text/javascript" src="style.js"></script>


</body>

</html>
