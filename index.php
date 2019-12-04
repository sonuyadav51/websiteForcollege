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
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--====== HEADER START --============-->
    <!-- banner -->

    <div class="container-fluid" style="height:200px; background:cyan;">
        <div class="row">
            <h1 class="text-center text-capitalize mx-auto my-5 py-2" style="font-size:5rem;">| banner goes here |</h1>
            <!--
           <div class="col-2">
               <img src="img/logo_main.png" alt="" style="width:100%; height:180px; z-index:1;" class="mt-4 img-responsive">
           </div>
            <div class="col-8">
               -->
            <!--logo -->
            <!--
                <img src="img/another.png" alt="" style="width:100%; height:200px; z-index:-1" class="img-responsive" draggable="false">
               
            </div>
             -->
        </div>
    </div>
    <!--==============NAVBAR FOR MOBILE START ===============-->
    <div class="nav navbar d-md-none" style="background:#ff9933; border-top:1px solid red;">
        <div class="col-8 d-md-none"></div>
        <div class="col-2 d-md-none">
            <span class="togglerbtn text-right" title="open menu">
                <i class="fas fa-bars"></i>
            </span>
        </div>
    </div>
    <div class="toggle-content d-none d-md-none" id="toggle-content" style="width:100%; box-shadow:0px 10px 10px rgba(0,0,0,.2);">
        <ul class="main_nav" style="background:white;">
            <li><a href="#" class="act home" title="home">Home </a></li>
            <li><a href="#" class="about" title="about us">About Us &nbsp; <i class="fas fa-caret-down"></i></a>
                <ul class="submenu aboutmenu d-none">
                    <li><a href="#">Controal of examination</a></li>
                    <li><a href="#">About2</a></li>
                    <li><a href="#">About3</a></li>
                    <li><a href="#">About4</a></li>
                </ul>
            </li>
            <li><a href="#" style="" title="Admission">Admission &nbsp;<i class="fas fa-caret-down"></i></a></li>
            <li><a href="#" style="" title="Faculties">Faculties &nbsp;<i class="fas fa-caret-down"></i></a></li>
            <li><a href="#" style="" title="Result">Result &nbsp;<i class="fas fa-caret-down"></i></a></li>

            <li><a href="#" class="career" title="career">Career &nbsp;<i class="fas fa-caret-down"></i></a>
                <ul class="submenu careermenu d-none">
                    <li><a href="#">Career1</a></li>
                    <li><a href="#">Career2</a></li>
                    <li><a href="#">Career3</a></li>
                    <li><a href="#">Career4</a></li>
                </ul>
            </li>
            <li><a href="#" style="" title="Campus">Campus &nbsp;<i class="fas fa-caret-down"></i></a></li>
            <li><a href="#" style="" title="Galary">Galary &nbsp;<i class="fas fa-caret-down"></i></a></li>
            <li><a href="#" style="" title="contact us">Contact Us</a></li>
        </ul>
    </div>
    <!--==============NAVBAR FOR MOBILE END ===============-->
    <!--==============NAVBAR FOR DESKTOP VIEW START ===============-->

    <div class="container-fluid d-none d-md-block sticky-top" style="border-top:1px solid red;">
        <div class="row">
            <!--======MAIN MENU LIST====-->
            <ul class="large_main_nav px-5" style="background:#ff9933; width:100%;">
                <li><a href="#" class=" home" title="home">Home </a></li>
                <li><a href="#" class="about" title="about">About Us &nbsp;<i class="fas fa-caret-down"></i></a>
                    <!--======MAIN SUBMENU LIST====-->
                    <ul class="submenu aboutmenu">
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
        </div>
    </div>


    <!--==============NAVBAR FOR DESKTOP VIEW END ===============-->
    <!--====== HEADER END --============-->
    <!--============SLIDER START=============-->
    <div class="carousel slide" data-ride="carousel" data-interval="3000" id="slider" style="">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home-banner.jpg" alt="" width="100%" height="350px" class="img-responsive" draggable="false">
                <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                    <h4>Title1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/home-banner.jpg" alt="" width="100%" height="350px" class="img-responsive" draggable="false">
                <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                    <h4>Title2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="img/home-banner.jpg" alt="" width="100%" height="350px" class="img-responsive" draggable="false">
                <div class="carousel-caption d-none " style="background:black; opacity:.9; color:white; width:100%; left:0;">
                    <h4>Title3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <a href="#slider" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" style="width:40px; height:40px"></span>
            </a>
            <a href="#slider" class="carousel-control-prev" data-slide="prev">
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
    <div class="" style="background:lightyellow; opacity:.9;">
        <div class="container-fluid">
            <div class="row">
                <!--=======LEFT STUFF===============-->
                <div class="col-12 col-md-3 mx-md-auto my-2" style="background:lightyellow;">
                    <div class="notification-container" style="box-shadow:0px 10px 10px rgba(0,0,0,.2); background:white;">
                        <div class="noti-head p-2" style="background:#ff9933; ">
                            <h4 class="text-center text-capitalize">notice board</h4>
                        </div>
                        <div class="noti-body p-2" style="border:4px solid #ff9933; border-top:3px solid silver; height:400px; overflow-y:scroll;">
                            <marquee direction="up" width="100%" height="350px" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">
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
                            </marquee>
                        </div>
                        <div class="noti-footer" style="width:100%; background:#ff9933;">
                            <a href="#" class="p-2 text-capitalize">view all</a>
                        </div>
                    </div>
                </div>
                <!--=======LEFT STUFF END===============-->
                <!--=======MIDDLE STUFF ===============-->
                <div class="col-12 col-md-6 mx-auto my-2">
                    <div class="main-content p-3">
                        <div class="row text-capitalize">
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">
                                    <img src="img/addmission-form.png" alt="" width="50px" height="50px">
                                    Admission
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">
                                    <img src="img/exam.png" alt="" width="50px" height="50px">
                                    Examination
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">

                                    <img src="img/results.png" alt="" width="50px" height="50px"><br>
                                    Result
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">

                                    <img src="img/Student.png" alt="" width="50px" height="50px"><br>

                                    Student Corner
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">

                                    <img src="img/collage-list.png" alt="" width="50px" height="50px"><br>
                                    Important links
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">
                                    <img src="img/collage-login.png" alt="" width="50px" height="50px"><br>
                                    Logins

                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">

                                    <img src="img/Downloads.png" alt="" width="50px" height="50px"><br>
                                    Downloads
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="#" class="main_link py-2">

                                    <img src="img/department.png" alt="" width="50px" height="50px"><br>
                                    Recruitment
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!--=======MODDLE STUFF END===============-->
                <!--=======RIGHT STUFF===============-->
                <div class="col-12 col-md-3 mx-auto my-2 " style="background:lightyellow;">
                    <div class="impperson p-2" style="background:coral; height:500px;">
                        <div class="row my-2 pb-1" style="border-bottom:1px solid silver;">
                            <div class="col-4">
                                <img src="img/img.png" alt="" width="100px" height="100px" style="border-radius:200px; border:1px solid white;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-capitalize" style="color:white;">dr. jp pandey</h5>
                                <span class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span><br>
                                <a href="#" class="btn btn-info btn-sm">View Profile</a>
                            </div>
                        </div>
                        <div class="row my-2 pb-1" style="border-bottom:1px solid silver;">
                            <div class="col-4">
                                <img src="img/img.png" alt="" width="100px" height="100px" style="border-radius:200px; border:1px solid white;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-capitalize" style="color:white;">dr. jp pandey</h5>
                                <span class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span><br>
                                <a href="#" class="btn btn-info btn-sm">View Profile</a>
                            </div>
                        </div>
                        <div class="row my-2 pb-1" style="border-bottom:1px solid silver;">
                            <div class="col-4">
                                <img src="img/img.png" alt="" width="100px" height="100px" style="border-radius:200px; border:1px solid white;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-capitalize" style="color:white;">dr. jp pandey</h5>
                                <span class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span><br>
                                <a href="#" class="btn btn-info btn-sm">View Profile</a>
                            </div>
                        </div>
                        <div class="row my-2 pb-2" style="border-bottom:1px solid silver;">
                            <div class="col-4">
                                <img src="img/img.png" alt="" width="100px" height="100px" style="border-radius:200px; border:1px solid white;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-capitalize" style="color:white;">dr. jp pandey</h5>
                                <span class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span><br>
                                <a href="#" class="btn btn-info btn-sm">View Profile</a>
                            </div>
                        </div>

                    </div>

                </div>
                <!--=======RIGHT STUFF END===============-->
            </div>
        </div>
        <!--==============MAIN BODY END ============-->
        <!--=============ABOUT START==============-->
        <div class="contaienr-fluid" style="background:silver; opacity:.9;">
            <div class="row">
                <div class="col-12">
                    <p class="text-center p-3" style="color:black;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, rerum. Est quasi, natus, cum ipsum nulla minus distinctio? Aspernatur quia blanditiis, ipsam, tempora atque ipsa ab voluptas numquam doloremque error laudantium dolores, eius quibusdam expedita libero repellat commodi quis adipisci, in perspiciatis sint eum voluptates. Eum sequi quod reprehenderit sint mollitia eveniet debitis, autem doloremque, aspernatur soluta deleniti molestiae, rerum dolorem repellendus perspiciatis magni? Corrupti in, eligendi, quibusdam, quis harum repellat beatae cupiditate possimus laboriosam maiores veritatis atque autem nobis perferendis nam! Ipsum beatae, voluptate et, doloribus voluptatem rerum nihil unde rem, necessitatibus architecto quae repudiandae tempora ullam odit, eos voluptatum. Est optio perspiciatis quisquam omnis nihil recusandae. Eius, facere. Repudiandae, totam debitis molestiae exercitationem. Minima amet laboriosam quos minus nulla, quas assumenda, nam perspiciatis dolorem commodi molestias odit quod, voluptates possimus natus expedita! Eius impedit temporibus veniam incidunt. Reprehenderit delectus provident fugiat consectetur eius explicabo vel aliquid sapiente expedita similique impedit, pariatur quibusdam magni repellendus, excepturi architecto ipsam illum iure, rerum placeat maiores, velit reiciendis qui eligendi quia. Architecto, quae facilis illo similique neque hic ipsa sint fuga, odit eum aperiam porro ad modi repellat et officia. Blanditiis quisquam corporis est aut optio dolor, dolores delectus odit sed suscipit!
                    </p>
                </div>
            </div>
        </div>
        <!--=============ABOUT END==============-->
        <!--=============SUBFOOTER START==============-->
        
        <!--=============SUBFOOTER END==============-->
    </div>

    <script src="lib/js/jquery-3.3.1.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/all.js"></script>
    <script type="text/javascript" src="style.js"></script>
</body>

</html>
