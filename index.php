<?php
include("includes/db.php");
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>LMS</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!-- 
    Powerful Template 
    http://www.templatemo.com/tm-390-powerful
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="mWrapper" style="background-color:#EBE6E0;">
      <div class="container" >
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="index.php"><img src="images/book.png" alt="Library Management System" style="height:50px;width:50px"><span style="Color:red;font-family:forte;font-size:25px">Library Management System</span></a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#templatemo_top">Home</a></li>
                <li><a href="#templatemo_services">Services</a></li>
                <li><a href="#templatemo_portfolio">Books</a></li>
                <li><a href="#templatemo_about">Team</a></li>
                <li><a href="#templatemo_contact">Contact</a></li>
                <li onclick="document.getElementById('id01').style.display='block'"><i class="glyphicon glyphicon-log-in" style="color:#00ACE9;font-size:20px;">&nbsp;login</i></li>
                  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>STUDENT LOGIN</h2>
    </div>

    <div class="container1">
      <label><b>USER ID</b></label>
      <input type="text" placeholder="Enter user id" name="email" required>

      <label><b>PASSWORD</b></label>
      <input type="text" placeholder="Enter password" name="pass" required>
        
        <button type="submit" name="login" >login</button>
    </div>
<?php
if(isset($_POST['login']))
{
$s_email=$_POST['email'];
$s_pass=$_POST['pass'];
$sel_c="select * from students where password='$s_pass' AND email_id='$s_email'";
$_SESSION['email_id']=$s_email;
$run_c=mysql_query($sel_c);
$check_customer=mysql_num_rows($run_c);
if($check_customer==0)
{
echo "nyu";
echo "<script type='text/javascript'>alert('password or email is incorrect, try again!')</script>";
exit();
}
if($check_customer>0 )
{

echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('student1.php', '_self')</script>";
}

}
?>


      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span style="float:right;color:brown;font-size:20px;"><a href="student_register.php"><u>Student Registration</u></a></span>
  </form>
</div>
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
      <div id="slider" class="nivoSlider" style="height:400px;">
            <a href="#"><img src="images/slider/img_1.jpg" alt="slide 1" /></a>
            <a href="#"><img src="images/slider/img_2.jpg" alt="slide 2" /></a>
            <a href="#"><img src="images/slider/img_3.jpg" alt="slide 3" /></a>
    	</div>
    <div id="templatemo_services" class="section1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Servies Available for Students</h1>
                <p class="text-center"><small>we provide many number of servies to students like Borrow Hardcopy, provide E-book, faculty chat room and Doubt corners extra. <a rel="nofollow" href="http://dev7studios.com/plugins/nivo-slider/" target="_parent"></a></small></p>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                  <div class="hexagon-a">
                    <a class="hlinktop" href="#">
                      <div class="hexa-a">
                        <div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-book"></i></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>  
                  <div class="hexagon">
                    <a class="hlinkbott" href="#">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>Borrow Book</h4>
                  <p><small>You can borrow Hardcopy but you can only keep it for 3 weeks after you should have to return, on failing to do so, you may be fined as per fine regulations.</small></p>
                  <a class="btn btn-primary" href="#">Go for It</a>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                  <div class="hexagon-a">
                    <a class="hlinktop" href="#">
                      <div class="hexa-a">
                        <div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-address-book"></i></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>  
                  <div class="hexagon">
                    <a class="hlinkbott" href="#">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>Faculty Details</h4>
                  <p><small>you can get the faculty details<br><br><br><br></small></p>
                  <a class="btn btn-primary" href="#">Go for it</a>
                </div>
              </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="blok text-center">
                
                <div class="hexagon-a">
                  <a class="hlinktop" href="">
                    <div class="hexa-a">
                      <div class="hcontainer-a">
                        <div class="vertical-align-a">
                          <span class="texts-a"><i class="fa fa-file-pdf-o"></i></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>  
                <div class="hexagon">
                  <a class="hlinkbott" href="#">
                    <div class="hexa">
                      <div class="hcontainer">
                        <div class="vertical-align">
                          <span class="texts"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <h4>Download e-book</h4>
                <p><small>you can download e-book but for getting this service you must be a member of LMS.<br><br><br></small></p>
                <a class="btn btn-primary" href="#">Go for it</a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="blok text-center">
                
                <div class="hexagon-a">
                  <a class="hlinktop" href="">
                    <div class="hexa-a">
                      <div class="hcontainer-a">
                        <div class="vertical-align-a">
                          <span class="texts-a"><i class="fa fa-comments"></i></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>  
                <div class="hexagon">
                  <a class="hlinkbott" href="#">
                    <div class="hexa">
                      <div class="hcontainer">
                        <div class="vertical-align">
                          <span class="texts"></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <h4>Doubt Corner</h4>
                <p><small>you can post your Doubt and problems regarding any topic but for this service you must be a member of LMS<br><br></small></p>
                <a class="btn btn-primary" href="#">Go for it</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div> <!-- e/o section1 -->

    <div id="templatemo_portfolio" class="section2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Books</h1>
            </div>
            <div class="glView">
              <div class="switcher">
                <ul>
                  <li id="grid" class="grid"><i class="fa fa-th-large"></i></li>
                  <li id="list" class="list"><i class="fa fa-align-justify"></i></li>
                </ul>
              </div>
              <div class="menuSwitch">
                <ul>
                    <li class="cat-active" category="allbook">All</li>
                    <li class="" category="CSE&IT">CSE & IT</li>
                    <li class="" category="EE">EE</li>
                    <li class="" category="CE">CE</li>
                    <li class="" category="ECE">ECE</li>
                    <li class="" category="AEIE">AEIE</li>
                </ul>
              </div>
<!-- Search and display books of departsments-->
              <div class="imgSwitch">
                <div class="row">
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook EE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Blue Gate" src="images/grids/img1.jpg"></div>
                        <div class="itemInfo">
                          <h4>The Blue Gate</h4>
                          <h6>Graphic</h6>
                          <p>Etiam faucibus id orci et mollis. Donec at ultricies erat. Sed sodales dapibus felis vehicula tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam id eros ac elit blandit vestibulum sed non erat.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook CSE&IT">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Womens Stone" src="images/grids/img2.jpg"></div>
                        <div class="itemInfo">
                          <h4>Women's Stone</h4>
                          <h6>Webdesign</h6>
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam suscipit ipsum eget est commodo, quis pellentesque nisi blandit. Proin vitae felis ac est viverra faucibus vel eu nisl.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook ECE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Elves Past" src="images/grids/img3.jpg"></div>
                        <div class="itemInfo">
                          <h4>Elves of Past</h4>
                          <h6>Creative</h6>
                          <p>Cras et adipiscing nulla, ut pulvinar lectus. Duis facilisis vulputate sapien sed pretium. Vivamus imperdiet purus nec vestibulum venenatis. Maecenas ultricies velit eget dui viverra, vitae iaculis lorem dignissim.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook CE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Silken Wife" src="images/grids/img4.jpg"></div>
                        <div class="itemInfo">
                          <h4>The Silken Wife</h4>
                          <h6>Inspiration</h6>
                          <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pharetra lorem non libero eleifend varius. Ut vel augue purus. Sed auctor accumsan nulla, eget imperdiet sapien tincidunt quis.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook CSE&IT">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Some Vision" src="images/grids/img5.jpg"></div>
                        <div class="itemInfo">
                          <h4>Some Vision</h4>
                          <h6>Webdesign</h6>
                          <p>Donec rutrum, magna a aliquam suscipit, nisl urna vehicula neque, vel feugiat nunc mi non velit. Vivamus id varius turpis. Nam vitae tortor vitae magna malesuada congue. </p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook CE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Snow Woman" src="images/grids/img6.jpg"></div>
                        <div class="itemInfo">
                          <h4>Snow of Woman</h4>
                          <h6>Inspiration</h6>
                          <p>Vivamus justo nisi, ornare id lobortis non, cursus in enim. Quisque semper dui vitae tempor dictum. Duis nec luctus est, eget dictum ipsum. Pellentesque ultrices posuere metus sit amet volutpat.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook EE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Mist Witches" src="images/grids/img7.jpg"></div>
                        <div class="itemInfo">
                          <h4>Mist Witches</h4>
                          <h6>Graphic</h6>
                          <p>Nulla sagittis mi ante. Mauris a nunc id sapien iaculis sodales vel a turpis. Proin a velit fermentum, rutrum enim sed, venenatis diam. Nunc commodo lorem quis sagittis luctus. Praesent faucibus fermentum eros at lacinia.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 dbox allbook ECE">
                    <div class="itemCont">
                      <a href="#">
                        <div class="thumb"><img class="img-responsive center-block" alt="Wind of Worlds" src="images/grids/img8.jpg"></div>
                        <div class="itemInfo">
                          <h4>Wind of Worlds</h4>
                          <h6>Creative</h6>
                          <p>Sed tellus risus, mollis sit amet ultrices vel, fermentum porttitor felis. Morbi porta placerat facilisis. Ut pretium, nunc et luctus bibendum, nulla ipsum malesuada justo, sit amet adipiscing nunc nulla et magna.</p>
                        </div>
                      </a>
                      <button type="button" class="btn btn-primary goto">view</button>
                    </div>
                  </div>
                </div>
                <div class="loadit"><button type="button" class="btn btn-primary">Load More</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- e/o section2 -->
<!--book over-->
    <div id="templatemo_about" class="section3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Our Team</h1>
            </div>
            <div class="infoTxt">
              <p class="text-center"><small>This is a <a href="index.html">online Library web appliction</a> for only those who are registered. This application is developed by a team of three persons, from IT dept of University Institute Of Technology under guidance of DR. Shibkali Gupta. this application is developed by using HTML,CSS,BOOTSTRAP,JavaScript,php.</small></p>
            </div>
            <div class="teamInfo" style="margin-left:100px;">
              <ul>
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><img class="img-responsive" alt="" src="images/team/pema.jpg"></div>
                    <div class="tInfo">
                      <h4 class="text-center" style="font-family:cursive;color:Blue;">Pema Dukpa</h4>
                        <h6 class="text-center">20143001</h6>
                      <h6 class="text-center">Designer</h6>
                    </div>
                      <div class="socials sbot">
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  </ul>
                </div> 
                  </div>
                </li> 
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><img class="img-responsive" alt="Mary" src="images/team/alisha.jpg"></div>
                    <div class="tInfo">
                      <h4 class="text-center"style="font-family:cursive;color:Blue;">Alisha Sharan</h4>
                        <h6 class="text-center">20143020</h6>
                      <h6 class="text-center">Developer</h6>
                    </div>
                      <div class="socials sbot">
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  </ul>
                </div> 
                  </div>
                </li> 
                <li>
                  <div class="teamBox">
                    <div class="imgWrp"><img class="img-responsive" alt="Nancy" src="images/team/jay_pro.jpg"></div>
                    <div class="tInfo">
                      <h4 class="text-center"style="font-family:cursive;color:Blue;">Jaishish Ranjan</h4>
                        <h6 class="text-center">20143021</h6>
                      <h6 class="text-center">Team Leader & Developer</h6>
                    </div>
                     <div class="socials sbot">
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  </ul>
                </div> 
                  </div>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- e/o section3 -->

    <div id="templatemo_contact" class="section5">
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Contact</h1>
              <p class="text-center"><small>This library is under University Institute Of Technology and it is located in Golappag(north), west Bengal <a href="https://www.google.co.in/maps/place/University+Institute+of+Technology/@23.2572818,87.8468376,15z/data=!4m5!3m4!1s0x0:0x37a42f6b23df16cd!8m2!3d23.2572809!4d87.8468379" style="color:#0000FF;text-align:left">View Larger Map</a></small></p>
            </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3665.6098098429625!2d87.8468376!3d23.257281800000012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37a42f6b23df16cd!2sUniversity+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1492629917114" width="1150" height="450" frameborder="0" style="border: 10px light gray;border-radius: 12px;border-style: outset;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
           <div style="color:green;font-size:20px;" ><span onclick="document.getElementById('id02').style.display='block'"><u>Login librarian</u></span>
               <div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2></h2>
    </div>

    <div class="container1">
      <label><b>ENTER YOUR ID</b></label>
      <input type="text" placeholder="Enter your id" name="lemail" required>

      <label><b>ENTER PASSWORD</b></label>
      <input type="text" placeholder="Enter password" name="lpass" required>
        
        <button type="submit" name="liblogin">LOGIN</button>
    </div>

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
  </form>
</div>
<?php
global $db;
if(isset($_POST['liblogin']))
{
$l_email=$_POST['lemail'];
$l_pass=$_POST['lpass'];

if((strcmp($l_email,"uit")==0) AND (strcmp($l_pass,"uit")==0)  )
{
    $_SESSION['emailid']=$l_email;
echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('libr
.php', '_self')</script>";
}

}
?>
        <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        </div>
    </div> <!-- eo section 5 -->
   
      <div class="bfWrap text-center"style="background-color:#EBE6E0">
        <div class="templatemo_footer" >Copyright@ 21,20,01</div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script src="js/jquery.cookie.js"></script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.allbook').animate({opacity:0},function(){
                  $('.allbook').removeClass('dbox-list');
                  $('.allbook').addClass('dbox');
                  $('.allbook').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.allbook').animate({opacity:0},function(){
                  $('.allbook').removeClass('dbox');
                  $('.allbook').addClass('dbox-list');
                  $('.allbook').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.allbook').animate({opacity:0});
              $('.allbook').removeClass('dbox');
              $('.allbook').addClass('dbox-list');
              $('.allbook').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.allbook').animate({opacity:0});
                  $('.allbook').removeClass('dboxlist');
                  $('.allbook').addClass('dbox');
                  $('.allbook').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.allbook').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
</body>
</html>