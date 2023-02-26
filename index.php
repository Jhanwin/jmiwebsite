
<?php

$hostname = "sql308.epizy.com";
$db_user = "epiz_33528536";
$db_pass = "YNOPZ44BuOF";
$db_name = "epiz_33528536_visitor_counter";

$conn = mysqli_connect($hostname,$db_user,$db_pass,$db_name);


if(isset($_POST["send"])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $query = "INSERT INTO `messages`(`name`,`email`,`message`) VALUES('$name','$email','$message');";

    mysqli_query($conn,$query);

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>JMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Mono:wght@300&family=Roboto:wght@300&display=swap');
    *{
        transition:300ms;
        font-family: 'Montserrat', sans-serif;
        padding: 0px;
        margin: 0px;
        
        
    }

    .pillarss{
            /* The image used */
            width: 100%    !important;
            height: auto  !important;

    }
    
    html{
        scroll-behavior: smooth;
        
    }
    .icons{
        margin-right: 20px;
    }
    .icon-tr{
        margin-bottom:20px;
    }

    
    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }

    .map-container iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }

    .img-team:hover{
        transform: scale(1.15);
    }

    .no-border-img{
        border:none;
        background:none;
        border-radius:0px;
    }
    .icons-nav{
        margin-right:5px;
    }

    .btnExp{
        height: 50px;
        width: 20%;
        padding:10px;
    }

    .textworld{
        margin-left: 15%;
        margin-right: 15%;
    }

    .line{
        background-color: darkgray;
        width: 10%;
        height: 3px;
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .card-news{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border: none;
    }


    .logo{
        height: 15%;
        width: 15%;
    }
    #myVideo {
        width: 100%    !important;
        height: auto   !important;
    }
    #myVideo2 {
        margin-top:50px;
        width: 100%    !important;
        height: 700px   !important;
    }

    .heading{
        background:linear-gradient(to bottom, rgba(255,255,255,0.6) 0%,rgba(255,255,255,0.4) 100%);
        border-radius:5px;
    }

    .bgnav{
        background:white; 
    }

    .overjmi{
        background: rgb(121,9,21);
    background: linear-gradient(90deg, rgba(121,9,21,0.37307422969187676) 100%, rgba(0,212,255,1) 100%);
    height: 50%;
    width: 50%;
    }



    @media only screen and (max-width: 600px) {
        .btnExp{
        height: 50px;
        width: 50%;
    }

    }

    #preloader{
        background: url("images/loading.gif");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        position:fixed;
        z-index:1;
    }

    .carousel{
        height:600px;
    }

    

    .carousel-control-prev-icon, .carousel-control-next-icon {
    height: 50px;
    width: 50px;
    outline: black;
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
}

    .vicem{
        margin-top:80px;
    }


/*nav*/
        nav{
            background:white;
            height: 80px;
            widows: 100%;
        }


        .logo{
            color: black;
            font-size: 35px;
            line-height: 80px;
         
            padding:0 100px;
            font-weight: bold;
        }

        nav .ulnav{
            float: right;
            margin-right: 20px;
        }

        nav .ulnav .linav{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
            color:black;
        }

        nav .ulnav .linav a{

            color:red;
            font-size: 15px;
            text-transform: uppercase;
            text-decoration: none;

        }


        

        .checkbtn{
            font-size:30px;
            color:red;
            float:right;
            line-height: 80px;
            margin-right:40px;
            cursor: pointer;
            display:none;
        }

        #check{
            display:none;
        }

        @media(max-width:952px){
            .logo{
                font-size:30px;
                padding-top:1px;
                padding-left:50px;
            }
            nav .ulnav .linav a{
                font-size:16px;
                text-decoration: none;
            }
        }

        @media(max-width:1330px){
            .checkbtn{
                display:block;
            }
            #myVideo2 {
                margin-top: 80px;
                width: 100%    !important;
                height: auto   !important;
            }
            .ulnav{
                position:fixed;
                width:100%;
                height:100vh;
                background:white;
                top:80px;
                left:-100%;
                text-align: center;
                transition: all .5s;
            }
            nav .ulnav .linav{
                display: block;
                margin:50px 0;
                line-height: 20px;
            }
            nav .ulnav .linav a{
                font-size:15px;
            }
            a:hover{
                background: none;
           
            }
            #check:checked ~ ul{
                left:0
            }
        }

        .icons-nav{
        margin-right:5px;
    }

    #btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
}

.bggradient{
    margin-top:50px;
}




</style>
<body>

    <div id="preloader"></div>

    <button
    type="button"
    class="btn btn-danger btn-floating btn-lg"
    id="btn-back-to-top"
    >
    <i class="fas fa-arrow-up"></i>
    </button>

    <!--WITH ICON-->
    <nav id="navbar" class="">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo">
            <img src="images/wcbb.png" width="120" height="50" alt="">
        </label>
        <ul class="ulnav">
            <li class="linav"><a href="index.html"><i class="fa-solid fa-house icons-nav"></i>Home</a></li>
            <li class="linav"><a href="infrastructure.html"><i class="fa-solid fa-road-bridge icons-nav"></i>Infrastructure</a></li>
            <li class="linav"><a href="literacy.html"><i class="fa-solid fa-lightbulb icons-nav"></i>Literacy</a></li>
            <li class="linav"><a href="assistance.html"><i class="fa-solid fa-handshake-angle icons-nav"></i>Assistance</a></li>
            <li class="linav"><a href="globalization.html"><i class="fa-solid fa-globe icons-nav"></i>Globalization</a></li>
            <li class="linav"><a href="accessibility.html"><i class="fa-solid fa-eye icons-nav"></i>Accesibility</a></li>
            <li class="linav"><a href="networking.html"><i class="fa-solid fa-network-wired icons-nav"></i>Networking</a></li>
        </ul>
    </nav>


      <div class="pillars">
        <div class="video-container">
            <video autoplay muted loop id="myVideo2">
            <source src="images/6pillars.mp4" type="video/mp4">
            </video>
        </div>
      </div>

      <div class="main">
        <div class="video-container">
            <video autoplay muted loop id="myVideo">
            <source src="images/JMIVIDEO.mp4" type="video/mp4">
            </video>
        </div>
     </div>
     

      <div class="team bg-white" id="teamH">
        <div class="container d-flex justify-content-center">
            <div class="line" data-aos="fade-up"></div>
        </div>
        <div class="container" data-aos="fade-up"><h1 class="text-danger text-center"  data-aos="fade-up">ILAGAN</h1></div>
        <div class="text-center p-5">
            <h1 data-aos="fade-up" class="text-danger">6 Pillars of World Class Batangas</h1>
        </div>
        
        </div>
      

        <!--Carousel-->
      <div class="container">
        <div class="container"  data-aos="fade-up">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner p-2">
              <div class="carousel-item active justify-content-center">
                <div class="container d-block w-50 ">
                    <div class="d-flex justify-content-center">
                        <img src="images/infra.jpg" alt="" class="img-thumbnail no-border-img " height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">I</b>nfrastructure</h1>
                        <p>
Join My Initiatives in constructing world-class infrastructure where people around the world visit and discover Batangas, work that meets beyond global standards and choose to permanently live with peace, prosperity and harmony.</p>
                    </div>
                    
                </div>
              </div>
              <div class="carousel-item">
                <div class="container d-block w-50">
                    <div class="d-flex justify-content-center">
                        <img src="images/literacy.png" alt="" class="img-thumbnail no-border-img" height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">L</b>iteracy</h1>
                        <p>Join My Initiatives in transforming traditional education into world-class states where teachers are happy to teach, learners are learning with fun and school administrators enjoyably comply with the demand of paperworks.</p>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container d-block w-50">
                    <div class="d-flex justify-content-center">
                        <img src="images/assistance.jpeg" alt="" class="img-thumbnail no-border-img" height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">A</b>ssistance</h1>
                        <p>
Join My Initiatives in touching the lives of batangueños accessing diversified government assistance with streamlined processes during normal situation and even in time of crisis.</p>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container d-block w-50">
                    <div class="d-flex justify-content-center">
                        <img src="images/globali.jpg" alt="" class="img-thumbnail no-border-img" height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">G</b>lobalization</h1>
                        <p>Join My Initiatives forging international allience, in commerce and trade, and in replicating doable and feasible best practices around the globe that are environmentaly sustainable, climate change adapting, and resilient oriented.</p>
                    </div>
                    
                </div>
              </div>
              <div class="carousel-item">
                <div class="container d-block w-50">
                    <div class="d-flex justify-content-center">
                        <img src="images/access.png" alt="" class="img-thumbnail no-border-img" height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">A</b>ccesibility</h1>
                        <p>Join My Initiatives in pioneering people-centered and people-focused basic services that are bringing bounty-fresh and budget friendly foods, world-class hospital care and mass-transportation connecting the industrial hubs and residential corridor of the province.</p>
                    </div>
                    
                </div>
              </div>
              <div class="carousel-item">
                <div class="container d-block w-50">
                    <div class="d-flex justify-content-center">
                        <img src="images/network.jpg" alt="" class="img-thumbnail no-border-img" height="400" width="450">
                    </div>
                    <div class="text-center">
                        <h1><b class="text-danger">N</b>etworking</h1>
                        <p>Join My Initiatives in building digital infrastructure in world-class batangas to support ICT development and in enacting policies and legislations that would regulate and guaranty security controls.</p>
                    </div> 
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
     </div>
     </div>

     <!--ABOUT VICEMAYOR-->
      <div class="bggradient">
        <div class="container vicem">
            <div class="container d-flex justify-content-center mt-5">
                <div class="line" data-aos="fade-up"></div>
            </div>
            <div class="container mb-5"><h1 class="text-danger text-center" data-aos="fade-up">About Vice Mayor</h1></div>
            
            <div class="row">
                <div class="col-sm">
                    <p class="text-muted" data-aos="fade-up">VICE MAYOR</p>
                    <h1 data-aos="fade-up">Jay Manalo Ilagan,MPA,PhD,MPSA</h1>
                    <ul>
                        <li data-aos="fade-up">Vice Mayor, Municipality of Mataas na Kahoy, Batangas</li>
                         <li data-aos="fade-up">President, Vice Mayor' League of the Philippines, Batangas Chapter</li>
                          <li data-aos="fade-up">Member, National Executive Board - Boy Scouts of the Philippines</li>
                    </ul>
                    <p class="text-muted" data-aos="fade-up"></p>
                    <a href="" class="btn btn-danger" data-aos="fade-up">Learn more</a>
                </div>
                <div class="col-sm">
                    <img src="images/SI_JMI.PNG" alt="" class="img-thumbnail no-border-img" data-aos="fade-up">
                </div>
            </div>

        </div>
    </div>


    <div class="container" data-aos="fade-up">
        <div class="container d-flex justify-content-center mt-5">
                <div class="line" data-aos="fade-up"></div>
            </div>
            <div class="container mb-5"><h1 class="text-danger text-center" data-aos="fade-up">TATAK JMI</h1></div>
        <div class="d-flex justify-content-center mt-5 mb-5">
            <iframe src="https://drive.google.com/file/d/1KNu6EF5uapyrLlz3DnMBZDZ_YAsFumuY/preview" width="700" height="490" allow="autoplay"></iframe>
        </div>
    </div>

              
        
      


      <!--NEWS-->
      <div class="mt-5 bg-white">
        <div class="container mt-5">
            <div class="container mt-5">
                <div class="line" data-aos="fade-up"></div>
                <div class="container mb-5"><h1 class="text-danger" data-aos="fade-up">News & Updates</h1></div>
            </div>
            
            <div class="row">
                <div class="col-sm">
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/flagcem1.jpg" alt="" class="img-thumbnail no-border-img" >
                        <div class="card-body">
                          <h5 class="card-title">Traditional Monday Flag Raising, Awarding Ceremony, Blessing and Turn over of Newly Acquired PNP Equipment </h5>
                          <p class="text-muted" >- January 30 2023</p>
                          <p class="lead" >Maraming salamat po Batangas Police Provincial Office sa pangunguna ni PCOL PEDRO D SOLIBA, Provincial Director sa napaka-init po ninyong pagtanggap sa akin bilang Guest of Honor and Speaker (GOHAS) sa inyong isinagawang Traditional Monday Flag Raising, Awarding Ceremony, Blessing and Turn over of Newly Acquired PNP Equipment noong ika-30 ng Enero.</p>
                          
                        </div>
                      </div>
                      <br><br>
                </div>
                <br><br>
                <div class="col-sm" >
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/run1.jpg" alt="" class="img-thumbnail no-border-img"> 
                        <div class="card-body">
                          <h5 class="card-title">Bauan Technical Integrated High School</h5>
                          <p class="text-muted">- Happy 28th Foundation Day</p>
                          <p class="lead" >Maraming salamat sa mga mag-aaral, guro at magulang ng Bauan Technical Integrated High School sa napaka init po ninyong pagtanggap sa akin at ng aking mga kasamahan sa Team Jay Manalo Ilagan.
                            Salamat din po sa inyong paanyaya na ako ay maging bahagi ng inyong foundation day. Muli, Happy 28th Foundation Day!</p>
                          
                        </div>
                      </div>
                </div>
                <br><br>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm">
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/news1.jpg" alt="" class="img-thumbnail no-border-img" >
                        <div class="card-body">
                          <h5 class="card-title">27th National Convention and Election of National Officers ng Vice Mayors' League of the Philippines  </h5>
                          <p class="text-muted" >- January 30 2023</p>
                          <p class="lead" >Ngayon ay kasalukuyan po tayo na dumadalo sa 27th National Convention and Election of National Officers ng Vice Mayors' League of the Philippines kasama ang mga kapwa natin Vice Mayor na mula sa Lalawigan ng Batangas.</p>
                          
                        </div>
                      </div>
                      <br><br>
                </div>
                <div class="col-sm" >
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/news2.jpg" alt="" class="img-thumbnail no-border-img"> 
                        <div class="card-body">
                          <h5 class="card-title"> Asia's Modern Hero</h5>
                          <p class="text-muted">-  Asia's Modern Hero Award 2023</p>
                          <p class="lead" >Isang karangalan po para sa inyong abang lingkod, Vice Mayor Jay Manalo Ilagan na hirangin ng Asia's Modern Hero Awards 2023 bilang "Heroes' Remarkable Government Leader of the Year" bilang pagkilala sa ating mga nagawang proyekto at patuloy na ginagawa para sa ating mga kababayang Batangueño.</p>
                          
                        </div>
                      </div>
                </div>
            </div> 

            <div class="row mt-5">
                <div class="col-sm">
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/news3.jpg" alt="" class="img-thumbnail no-border-img" >
                        <div class="card-body">
                          <h5 class="card-title">Western Batangas 104 Lions Club</h5>
                          <p class="text-muted" >- February 19 2023</p>
                          <p class="lead" >Isang karangalan po para sa akin ang maging miyembro ng Western Batangas 104 Lions Club at maging Guest Speaker sa isinagawang pagdiriwang ng First Founding Anniversary at Second Induction Ceremony kahapon, ika-19 ng Pebrero 2023.</p>
                          
                        </div>
                      </div>
                      <br><br>
                </div>
                <div class="col-sm" >
                    <div class="card card-news" data-aos="fade-up">
                        <img src="images/news4.jpg" alt="" class="img-thumbnail no-border-img"> 
                        <div class="card-body">
                          <h5 class="card-title">Bloodletting Activity</h5>
                          <p class="text-muted">- Happy 28th Foundation Day</p>
                          <p class="lead" >Kayo po ang aming malugod na inaanyayahan ni Mayor Janet Magpantay Ilagan I sa aming Bayan, Mataasnakahoy Municipal Gymnasium para sa isasagawang Bloodletting Activity bukas sa ganap na ika-7 ng umaga.</p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-danger p-3 w-25 mt-4 mb-4" data-aos="fade-up">Read More</a>
            </div>

        </div>
      </div>


      <div class="container">
        <div class="container d-flex justify-content-center">
            <div class="line" data-aos="fade-up"></div>
        </div>
        <div class="container mb-5"><h1 class="text-danger text-center" data-aos="fade-up">JMI Application</h1></div>

        <div class="container">
            <div class="row">
                        <div class="col-sm">
                            <div class="container mt-5">
                                <h1 class="text-danger" style="font-size: 50px;" data-aos="fade-up">BATANGAS JMI APP</h1>
                                <h5 data-aos="fade-up">Download the app to get assistance and learn more,click the button below</h5>
                                <a href="https://drive.google.com/file/d/1_sJeue4YPvHJqCme5YgBTfBpZTouWnRb/view?usp=share_link" class="btn btn-danger" data-aos="fade-up">Download</a>
                            </div>
                        </div>
                        <div class="col-sm d-flex justify-content-center p-5">
                            <img src="images/app.jpg" class="img-thumbnail w-50 h-100 card-news" alt="" data-aos="fade-up">
                        </div> 
                    </div>
        </div>
    </div>
    <div class="container">
        <div class="container mb-5"><h2 class="text-danger text-center" data-aos="fade-up">Or</h2></div>
        <h4 class="text-center" data-aos="fade-up">Scan the qr code below</4>
    </div>
    <div class="pillars" data-aos="fade-up">
        <img src="images/eduk.png" class="pillarss" alt="">
    </div>

    <div class="container mt-5 mb-5">
        <div class="container d-flex justify-content-center">
            <div class="line" data-aos="fade-up"></div>
        </div>
        <div class="container mb-5"><h1 class="text-danger text-center" data-aos="fade-up">For Cash Assistance</h1></div>

        <div class="container">
            <p class="text-center" data-aos="fade-up">
                if you want financial help to meet your needs, just click the button below to be redirected to the form, just answer the questions and fill in the requested information.</p>
                <div class="d-flex justify-content-center">
                    <a href="https://forms.gle/9kjPVatZrmjNRAwSA" class="btn btn-danger" data-aos="fade-up">Get Cash Assistance</a>
                </div>   
        </div>
    </div>

      <!--GET IN TOUCH-->
      <div class="gradient-wave">
      <div class="container" style="margin-bottom: 30px;">
        <div class="container d-flex justify-content-center">
            <div class="line" data-aos="fade-up"></div>
        </div>
        <div class="container mb-5"><h1 class="text-danger text-center" data-aos="fade-up">Get in Touch</h1></div>
        <div class="container">


            <div class="row" style="margin-bottom: 30px;">
                <div class="col-sm mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td><h3><i class="fa-solid fa-message icons"></i></h3></td>
                                    <td><h3 class="card-title">Send Message to Us</h3></td>
                                </tr>
                            </table> 
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="" class="form-label">Your Name</label>
                                    <input type="text" name="name" id="" class="form-control" placeholder="Please Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Your Email</label>
                                    <input type="email" name="email" id="" class="form-control" placeholder="Please Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Messsage</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <input type="submit" value="Submit" name="send" class="btn btn-primary w-40">
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>

                <!--end-->
                <div class="col-sm mt-5">
                    <div class="card h-100" data-aos="fade-up">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td><h3><i class="fa-solid fa-location-dot icons"></i></h3></td>
                                <td><h3 class="card-title">Our Location</h3></td>
                            </tr>
                        </table> 
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61946.06553808876!2d121.1034858!3d13.9806693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6d76a09f45ef%3A0xe856fc4abab34554!2sMataas%20Na%20Kahoy%2C%20Batangas!5e0!3m2!1sen!2sph!4v1675569071013!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                </div>
                 <!--end-->
            </div>

            <div class="row">
                
            </div>

        </div>
      </div>
    </div>



    







      <!--FOOTER-->
      <footer class="footer">
        <div class="container p-3">
            <div class="row">
                <div class="col-sm">
                    <img src="images/jmi.PNG" alt="" class="img-thumbnail no-border-img rounded mx-auto d-block">
                </div>
                <div class="col-sm">
                    <h4 class="text-danger">About Us</h4>
                    <p class="text-muted">Lorem ipsum dolor sit.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati voluptate esse placeat nesciunt, sed labore minima soluta. Et, autem saepe maiores dicta earum magnam ipsum laudantium fugiat laborum ullam optio.</p>
                </div>
                <div class="col-sm">
                    <h4 class="text-danger">Contact Us</h4>
                    <table style="font-size:20px">
                        <tr class="icon-tr">
                            <td><i class="fa-solid fa-phone icons"></i></td>
                            <td>09123456789</td>
                        </tr>
                        <tr class="icon-tr">
                            <td><i class="fa-solid fa-envelope icons"></i></td>
                            <td>no_reply@example.com</td>
                        </tr>
                        <tr class="icon-tr">
                            <td><i class="fa-brands fa-facebook icons"></i></td>
                            <td>FB page</td>
                        </tr>
                        <tr class="icon-tr">
                            <td><i class="fa-solid fa-location-dot icons"></i></td>
                            <td>Mataas na Kahoy, Batangas</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <hr>
        </div>
        <div class="container">
            <p>Copyright 2023, All Rights Reserved.</p>
            <p >Mataas na Kahoy, Batangas</h4>
            <p>World Class Batangas</p>
        </div>
      </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    var preloader = document.getElementById("preloader");
    var nav = document.getElementById("navbar");

    addEventListener("load",()=>{
        preloader.style.display = "none";
        nav.classList.add("fixed-top")
    });

    let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
const navbar = document.getElementById("navbar");
navbar.classList.add("addnav1");

addEventListener("scroll",()=>{
    var scrollVal = window.scrollY;
    const navbar = document.getElementById("navbar");
    //100
    console.log(scrollVal);
    if(scrollVal>=100){
        navbar.classList.add("addnav2");
        navbar.classList.remove("addnav1");
    }else{
        navbar.classList.add("addnav1");
        navbar.classList.remove("addnav2");
    }
})

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>