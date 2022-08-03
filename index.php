<?php
include('connection.php');
if(isset($_POST['btninsert']))
{
    $name = $_POST['uname'];
    $gmail = $_POST['umail'];
    $phone = $_POST['unumber'];
    $message = $_POST['umessage'];
    $query = mysqli_query($con,"insert into pf_users(name,email,phone,message)values('$name','$gmail','$phone','$message')");
    if($query)
    {
        echo '<script>alert("Data be inserted")</script>';
    }
    else
    {
        echo '<script>alert("Data can not be inserted")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shahan Ahmed Qureshi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon -->


<body>
    <!-- preloader -->
    <section>
        
<div id="preloader">
<iframe width="560" height="315" src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/yJg-Y5byMMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</section>
   <!-- preloader -->
   
  
        <input type="checkbox" id="check">
    <label for="check" class="checkbtn sticky-top">
        <i class="fa fa-bars fixed-top" style="width: 0%;font-size: 30px; margin: 20px; color: #eee;"></i>
    </label>
    <nav>
        <div class="sidebar" style="justify-content: space-between;">
            <img src="shahan1.jpg" alt="" style="background-position: center; background-size: cover; align-items: center;">
            <h1 style="color: white; font-size: 30px; background-color:  #3a3737; text-align: center;font-weight: bold;">Shahan Ahmed Qureshi</h1>
            <h3 style="color: white; font-size: 20px; background-color:  #3a3737; text-align: center; margin-bottom: 20px;font-weight: bold;">Front End Developer</h3>
            <a href="#home">Home</a>
            <a href="#About">About</a>
            <a href="#education">Education</a>
            <a href="#services">Services</a>
            <a href="#Contact">Contact Us</a>
        
            </div>
    </nav>
      <button type="button" class="btn"  id="btn-back-to-top">
    <i class="fa fa-arrow-up" style="background-color: rgb(196, 148, 17);font-size: 30px;"></i>
    </button>
   
 

    
    <div class="content">
        <section id="home">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="home" style="justify-content: center; margin-right:10px; height: 100vh; justify-content: space-between; padding-left: 50px;padding-top: 250px;">
                <h3 style="color: white; font-size: 30px;"> <span class="element "></span></h3>
                <h1 style="color: white; font-size: 30px;">I'm <span style="color: rgb(196, 148, 17)";>Shahan Ahmed Qureshi</span></h1>
                <p style="color:#eee; font-size: 15px; margin-right: 50px;">Am a certified front-end developer looking forward to showing my technical ad leadership skills to achieve my ad my team's dreams come true with core dedication and hard work.</p>
                <button class="About btn1"> <a href="#About" style="text-decoration: none; background-color: rgb(58, 56, 56); color: white;"> About Me</a></button>
               
        
             </div>
        </div>
        </div>
        </div>
         
        </section>
         <div class="container" id="About" style="overflow-y: hidden;">
            <div class="row" style="margin-top: 20px; margin-left: 20px;">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2> About <span style="color: rgb(196, 148, 17);"> us</span></h2>
                       
                    </div>
                </div>
            </div>
          <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4" style="align-items: center;">
                      <div class="row">
                        <div class="col-lg-6 col-sm-12"><h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Name: </h2></div>
                        <div class="col-lg-6 col-sm-12 profil" style="padding-top: 20px;"><span style="color: white; font-size: 20px; margin-left: -40px; ;">Shahan Ahmed Qureshi</span></div>
                        <div class="col-lg-6 col-sm-12"><h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Father Name: </h2></div>
                        <div class="col-lg-6 col-sm-12 profil"  style="padding-top: 20px;"><span style="color: white; font-size: 20px; margin-left: -40px;">Jamil Ahmed Qureshi</span></div>
                        <div class="col-lg-6 col-sm-12"><h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Date of Brith:</h2></div>
                        <div class="col-lg-6 col-sm-12 profil"  style="padding-top: 20px;"><span style="color: white; font-size: 20px; margin-left: -40px;">22-12-2002</span></div>
                        <h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Nationality: <span style="color: white; font-size: 20px; margin-left: 30px;">Pakistan</span></h2>
                        <h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Religion: <span style="color: white; font-size: 20px; margin-left: 70px;">Islam</span></h2>
                        <h2 style="color: rgb(196, 148, 17); font-size: 20px; margin-top: 20px; margin-left: 20px;">Languages: <span style="color: white; font-size: 20px; margin-left: 50px;">Urdu</span></h2>    
                    </div>
                      <div style="align-items: center;">
                        <button class="About btn2"> <a href="#Contact" style="text-decoration: none; background-color: rgb(58, 56, 56); color: white;"> Contact Me</a></button>
                        <button class="About btn2" style="margin-top: 50px;"> <a href="cv.pdf" style="text-decoration: none; background-color: rgb(58, 56, 56); color: white;"> Download Cv</a></button>
                      
                      </div>  
                     <div class="mb-3" style="margin-top: 30px;">
                           
                        </div>


                       </div>
                <div class="col-lg-6 col-sm-6 mb-4" style="padding-bottom: 0px;">


                    <div class="mb-3">
                        <label class="title">Responsiv Website Designing</label>
                        <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="95" data-aos="fade-right"
                        aria-valuemin="0" aria-valuemax="100" style="width:95%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                        95%
                        </div>
                        
                      </div>    
                    </div>


                           
                            <div class="mb-3">
                                <label class="title">HTML5</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="90" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                90%
                                </div>
                                
                              </div>    
                            </div>

                            
                            <div class="mb-3">
                                <label class="title">CSS3</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="85" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                85%
                                </div>
                                
                              </div>    
                            </div>

                            
                            


                            
                            <div class="mb-3">
                                <label class="title">BOOTSTRAP 5</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="80" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                80%
                                </div>
                                
                              </div>    
                            </div>


                            
                            <div class="mb-3">
                                <label class="title">MS-Office</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="80" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                80%
                                </div>
                                
                              </div>    
                            </div>




                            
                            <div class="mb-3">
                                <label class="title">SEO</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="40" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:40%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                30%
                                </div>
                                
                              </div>    
                            </div>


 
                             
                            <div class="mb-3">
                                <label class="title">UI/UX</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="60" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:60%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                60%
                                </div>
                                
                              </div>    
                            </div>                         



                            
                            
                            <div class="mb-3">
                                <label class="title">Java Script</label>
                                <div class="progress bar-percent" style="height: 40px; font-size: large; align-items: right;">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated bar-inner" role="progressbar" aria-valuenow="40" data-aos="fade-right"
                                aria-valuemin="0" aria-valuemax="100" style="width:40%; font-size: large; background-color: rgb(196, 148, 17); height: 40px">
                                40%
                                </div>
                                
                              </div>    
                            </div>


                            

                          <!--  -->
                </div>
                <!-- Education start -->
                <section class="section gray-bg  resume" id="education">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h2> Education</h2>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 m-15px-tb">
                                <div class="resume-box">
                                    <ul>
                                        <li>
                                        <div class="icon">
                                          <img src="man graduate.png" alt="" style="width: 30px; height: 30px;">
                                        </div>
                                        <span class="time">2022 - Present</span>
                                        <h5>	Aptech Garden Center</h5>
                                        <p style="margin-left: 30px; color: rgb(196, 148, 17);">		IT (currently in 2st semester) (studying 2022)</p>   
                                    </li>
                                    
                                        <li>
                                            <div class="icon">
                                                <img src="man graduate.png" alt="" style="width: 30px; height: 30px;">
                                            </div>
                                            <span class="time">2021 -</span>
                                            <h5>	Govt. Commerce Collage</h5>
                                            <p style="margin-left: 30px; color: rgb(196, 148, 17);">	1 Year (Continue) (studying 2022)</p>
                                        </li>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 m-15px-tb">
                                <div class="resume-box">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="man graduate.png" alt="" style="width: 30px; height: 30px;">
                                            </div>
                                            <span class="time">2020 - </span>
                                            <h5>	Garden English Grammar School</h5>
                                            <p style="margin-left: 30px; color: rgb(196, 148, 17);">	Matric (2020)</p>   
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="man graduate.png" alt="" style="width: 30px; height: 30px;">
                                            </div>
                                            <span class="time">2018 - </span>
                                            <h5>Madrasa Arabia Tajweed ul Quran Huffaz Boys School</h5>
                                            <p style="margin-left: 30px; color: rgb(196, 148, 17);">	 Quran Hafiz (in 2018)</p> 
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              <!-- Education End -->
                        
         <!-- sterd -->

         <section class="section services-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="services-title">
                            <h2>Our <span style="color: rgb(196, 148, 17);">services</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Unique design</h5>
                                <p>I will try to create a customized design as per your requirement using my creativity</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Project Management</h5>
                                <p>I have a good knowledge of handling a project and completing the work on the given deadline.</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-comment"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Leadership</h5>
                                <p>I know how to lead my team for the successful submission of the project. But wait...there's more?</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Responsiveness</h5>
                                <p>I design and develop websites for customers that would run on almost all screen sizes.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Testing for Perfection</h5>
                                <p>I can test the website once it's done so that it matches your given criteria. </p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Advanced Office</h5>
                                <p>I have a very good knowledge of MS-Office which is undoubtedly the need of every organization.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
       
         <!-- end -->





         <!-- contact stard -->
         <section id="Contact">
            <div class="services-title" style="align-items: center; margin-top: 30px;margin-left: 20px;">
                <h2>Contact <span style="color: rgb(196, 148, 17);">us</span> </h2>
            </div>
            <div class="container">
                <div class="conatiner">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-left: 10;">
                            <h2> Let's<span style="color: rgb(196, 148, 17);"> get in touch</span></h2>
                            <p style="color:#eee;">Contact us with the following details. and fillup the form with the details.</p>
                           
                            <div class="info" style="padding-top: 10px;">
                                <div class="social-information"> <i class="fa fa-map-marker"></i>
                                    <p>  <a href="https://www.google.com/maps/place/Aptech+Computer+Education+Garden+Center/@24.867175,67.022047,17z/data=!3m1!4b1!4m5!3m4!1s0x3eb33e6b1566c46f:0x65318f4eb62c7aa8!8m2!3d24.867175!4d67.024241" style="text-decoration: none; color: rgb(147, 147, 147)">Aptech Garden Center</a></p>
                                </div>
                                <div class="social-information"> <i class="fa fa-envelope-o"></i>
                                    <p>  <a href="mailto:shahan2109a@aptechgdn.net" style="text-decoration: none; color: rgb(147, 147, 147)">shahan2109a@aptechgdn.net</a></p>
                                </div>
                                <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                                  <p>  <a href="tel:+92 3322073671" style="text-decoration: none; color: rgb(147, 147, 147)">+92 3322073671</a></p>
                                </div>
                            </div>
                            <div class="social-media">
                                <p>Connect with us :</p>
                                <div class="social-links mt-3"> <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"><i class="bx bxl-twitter"></i></a> <a href="https://www.facebook.com/shahanjamil.qureshi/" class=" fa fa-facebook"><i class="bx bxl-facebook"></i></a> <a href="https://www.instagram.com/shahanjamil/" class="fa fa-instagram"><i class="bx bxl-instagram"></i></a> <a href="https://www.linkedin.com/jobs/?originalSubdomain=pk" class="fa fa-linkedin"><i class="bx bxl-linkedin"></i></a> </div>            
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <h3 class="c-name">Contact us</h3>
                                <div class="social-input-containers"> <input type="text"  name="uname"class="input" placeholder="Name" required> </div>
                                <div class="social-input-containers"> <input type="email" name="umail" class="input" placeholder="Email"> </div>
                                <div class="social-input-containers"> <input type="number" name="unumber" class="input" placeholder="Phone" required> </div>
                                <div class="social-input-containers textarea"> <textarea name="umessage" class="input" placeholder="Message" required></textarea> </div> <input type="submit" value="Send" class="btn2"  value="Insert data" name="btninsert" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         
          <!-- contact end -->
          <div style="background-color:#3a3737; width: 100%; height: 50px;">
           <center> <p style="color: rgb(160, 158, 158); background-color: #3a3737;font-weight: bold;padding-top: 15px;font-size: large;"> © 2021 Copyright: <span style="background-color: #3a3737;color: rgb(196, 148, 17);">Shahan Ahmed Qureshi</span></p></center>
        </div>
            </div>
           
         
          </div>
         
        
    
    
    
     





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
     <script>
        var typed = new Typed('.element', {
        strings: ["HI THERE! ", "Asalam u Alaikum ",],
        typeSpeed: 120,
        loop:true,
        fadeOutDelay: 1000,

        });
     </script>
     <script>
      $(".bar").each(function(){
  $(this).find(".bar-inner").animate({
    width: $(this).attr("data-width")
  },2000)
});

let mybutton = document.getElementById("btn-back-to-top");

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
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

     </script>
     <script>
        var loader=document.getElementById("preloader");
    
        window.addEventListener("load",function(){
            loader.style.display = "none";
        })


       
    </script>
     <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
</body>
</html>
