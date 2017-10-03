<?php
    session_start();
    include("includes/db.php");

    $user_email=($_SESSION['email_id']);
    $q="select student_id from students where email_id='$user_email' ";
    $query=mysql_query($q);
    $num=mysql_fetch_array($query);
    $user_id=$num['student_id'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student-LMS</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
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
                <li><a href="student1.php">Home</a></li>
                <li><a href="#templatemo_services">Services</a></li>
                <li><a href="#templatemo_portfolio">Books</a></li>
                <li><a href="#templatemo_about">Team</a></li>
                <li><a href="#templatemo_contact">Contact</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout<br> user_id:<?php echo $user_id; ?></span> </a></li>  
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
      <div>
            <table width="1000" align="center" style="border-collapse:separate;border-spacing:10px;color:#512E5F; background-color:#FEF5E7;">
                <center><h3>Issued books:</h3></center>
                <tr align="center">
                    <th>
                    </th>
                    <th>BOOK_ID</th>
                
                    <th>BOOK NAME</th>

                    <th>AUTHOR</th>
    
                    <th>EDITION</th>
                    
                    <th>SUBJECT</th>
                
                    <th>RETURN DATE</th>
                </tr>
        
                <?php
                    global $db;
                    $get_c="select book_1,due_date1 from students where student_id=$user_id";
                    $run_c=mysql_query($get_c);
                    $row_c=mysql_fetch_array($run_c);
                    $b1_id=$row_c['book_1'];//get book1 id here
                    $return_date1=$row_c['due_date1'];// get due date 1 here

                    $get_d1=mysql_query("select book_name,author,edition,subject from books where book_id=$b1_id");
                    $row_d1=@mysql_fetch_array($get_d1);
    
                ?>        
                <tr >
                    <td>BOOK_1</td>
                    <td><?php echo $b1_id; ?></td>
                    <td><?php echo $row_d1['book_name']; ?></td>
                    <td><?php echo $row_d1['author']; ?></td>
                    <td><?php echo $row_d1['edition']; ?></td>
                    <td><?php echo $row_d1['subject']; ?></td>
                    <td><?php echo $return_date1; ?></td>
    
                </tr>
                <?php
                    global $db;
                    $get_c2="select book_2,due_date2 from students where student_id=$user_id";
                    $run_c2=mysql_query($get_c2);
                    $row_c2=mysql_fetch_array($run_c2);
                    $b2_id=$row_c2['book_2'];//get book1 id here
                    $return_date2=$row_c2['due_date2'];// get due date 1 here
                    $get_d2=mysql_query("select book_name,author,edition,subject from books where book_id=$b2_id");
                    $row_d2=@mysql_fetch_array($get_d2);
    
                ?>        
                <tr >
                    <td>BOOK_2</td>
                    <td><?php echo $b2_id; ?></td>
                    <td><?php echo $row_d2['book_name']; ?></td>
                    <td><?php echo $row_d2['author']; ?></td>
                    <td><?php echo $row_d2['edition']; ?></td>
                    <td><?php echo $row_d2['subject']; ?></td>
                    <td><?php echo $return_date2; ?></td>
    
                </tr>        
        
                <?php
                    global $db;
                    $get_c3="select book_3,due_date3 from students where student_id=$user_id";
                    $run_c3=mysql_query($get_c3);
                    $row_c3=mysql_fetch_array($run_c3);
                    $b3_id=$row_c3['book_3'];//get book1 id here
                    $return_date3=$row_c3['due_date3'];// get due date 1 here

                    $get_d3=mysql_query("select book_name,author,edition,subject from books where book_id=$b3_id");
                    $row_d3=@mysql_fetch_array($get_d3);
    
                ?>        
                <tr >
                    <td>BOOK_3</td>
                    <td><?php echo $b3_id; ?></td>
                    <td><?php echo $row_d3['book_name']; ?></td>
                    <td><?php echo $row_d3['author']; ?></td>
                    <td><?php echo $row_d3['edition']; ?></td>
                    <td><?php echo $row_d3['subject']; ?></td>
                    <td><?php echo $return_date3; ?></td>
    
                </tr>        
        
                </table>
    	</div>
    <div id="templatemo_services" class="section1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Servies Available for Students</h1>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                  <div class="hexagon-a">
                      <a class="hlinktop"  onclick="document.getElementById('id01').style.display='block'" style="height:100px;width:100px">
                      <div class="hexa-a" >
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
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="blok text-center">
                  <div class="hexagon-a">
                    <a class="hlinktop" onclick="document.getElementById('id02').style.display='block'" >
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
                    <a class="hlinkbott">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>Return books</h4>
                  <p><small>you should return your books with in 45 days.<br><br><br><br></small></p>
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
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <form role="form">
              <div class="form-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="30">
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="30">
              </div>
              <div class="form-group">
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject" maxlength="40">
              </div>
              <div><button type="button" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="txtarea">
              <textarea name="message" rows="10" class="form-control" id="message"></textarea>
            </div>
          </div>
          <div class="col-md-3">
            <div class="addr">
              <p>you can catch us here.</p>
              <ul>
                <li><i class="fa fa-map-marker"></i>Golapbag(north),Burdwan,West Bengal-713104.(INDIA)<br></li>
                  <li><br></li>
                <li><i class="fa fa-mobile-phone"></i>+91 8609653304</li>
                <li><i class="fa fa-envelope"></i>library.@uit.buruniv.ac.in</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> 
<!--end section5-->
<!--footer and last section-->  

      <div class="bfWrap text-center"style="background-color:#EBE6E0">
        <div class="templatemo_footer" >Copyright@ 21,20,01</div>
      </div>
<!--end of footer-->
<!--js and jquery starts-->      
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
<div id="id01" class="modal" style="z-index: 3000;">
  
                        <form class="modal-content animate" action="" method="GET" style="background-color:yellow;font-family:cursive;" >
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <h2>Borrow Some Hardcopies</h2>
                            </div>

                            <div class="container1" style="background-color:darkslateblue;color:yellow;">
                                <label><b>Book ID</b></label>
                                <input type="text" placeholder="Enter Bookid" name="bid" >
      
                                <label><b>Book Name</b></label>
                                <input type="text" placeholder="Enter Bookname" name="bname" required>

                                <label><b>Subject</b></label><br>
                                <select name="bsub" style="width:100%;height:45px;">
                                    <option value="CSE&IT">CSE & IT</option>
    
                                    <option value="ECE">ECE</option>
    
                                    <option value="EE">EE</option>

                                    <option value="CE">CE</option>
    
                                    <option value="AEIE">AEIE</option>

                                </select><br>
        
                                <label><b>Author</b></label>
                                <input type="text" placeholder="Enter Author Name" name="bauthor" required>
        
                                <label><b>Edition</b></label>
                                <input type="text" placeholder="Enter Edition" name="bedition">
              
                                
                            </div>

                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><button type="submit" class="cancelbtn" name="submit" style="float:right;background-color:green;">Add</button>
                        </form>
                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById('id01');

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) 
                        {
                            if (event.target == modal) 
                            {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                           <?php
                $user=$_SESSION['email_id'];
                $u="select * from students where email_id='$user'";
                $ru=mysql_query($u);
                $row_name=mysql_fetch_array($ru);
                $s_id=$row_name['student_id'];
                if(isset($_GET['submit']))
                {
                    $bid=$_GET['bid'];
                    $bname=$_GET['bname'];
                    $bsub=$_GET['bsub'];
                    $bauthor=$_GET['bauthor'];;
                    $bedition=$_GET['bedition'];
                    $insert_product="insert into request(book_id,student_id,book_name,author,edition,subject)values('$bid','$s_id','$bname','$bauthor','$bedition','$bsub')";
                    $check=mysql_query("select book_1,book_2,book_3 from students where student_id=$s_id");
                    $check_row=mysql_fetch_array($check);
                    if($check_row['book_1']=='' || $check_row['book_2']=='' || $check_row['book_3']=='')    
                    {
                        $run_product=mysql_query($insert_product);
                        if($run_product)
                        {
                           
                                echo "<script type='text/javascript'>alert('borrow request inserted')</script>";
                                echo "<script type='text/javascript'>window.open('student1.php', '_self')</script>";  
                                    
                        }    
                    }
                    else
                    {
                        echo "<script>alert('You have already borrowed 3 books')</script>"; 
    
                    }
                }
            ?>
      <div id="id02" class="modal" style="z-index:3000" align="center">
  
                    <form class="modal-content animate" action="" method="GET" style="width:1002px;font-family:cursive;">
                    <div class="imgcontainer" style="width:600px;">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h2>Return Books</h2>
                    </div>

                    <div class="container1" style="width:1000px;">
                        <table width="800px" align="center"  style="display: table; border-collapse: separate;border-spacing: 10px;">

                            <h2>YOUR ISSUED BOOKS</h2>
                            <tr align="center" bgcolor="skyblue">
                                <th>ISSUE_ID</th>

                                <th>BOOK_ID</th>

                                <th>BOOK NAME</th>

                                <th>ISSED DATE</th>
                            </tr>
                            <?php
                                global $db;
                                echo "user id :".$user_id;
                                $get_c="select issue_id,book_id,book_name,issue_date from issue where student_id=$user_id";
                                $run_c=mysql_query($get_c);
                                $i=0;
                                while($row_c=mysql_fetch_array($run_c))
                                {
                                    $b_id[$i]=$row_c['book_id'];
                                    $b_name[$i]=$row_c['book_name'];
                                    $b_date[$i]=$row_c['issue_date'];
                                    $b_issue[$i]=$row_c['issue_id'];
                                    $i++;   
                                }
                            ?>

                        <?php
                            for($j=0;$j<$i;$j++)
                            {
                        ?>
                            <tr align='center'>
                                <td><?php echo $b_issue[$j]; ?></td>
                                <td><?php echo $b_id[$j]; ?></td>
                                <td><?php echo $b_name[$j]; ?></td>
                                <td><?php echo $b_date[$j]; ?></td>

                                <td> 
                                    <?php 
                                        echo "<form method='GET' action=''>";
                                        $iss='return'.$j;
                                        echo "<button type='submit' name='$iss'>RETURN</button>";
                                        echo "</form>"; 
                                    ?>
                                </td>
                            </tr>
                            <?php
                                if(isset($_GET[$iss]))
                                {
                                    $query_iss="insert into ret_req (issue_id,student_id,book_id,issue_date) values('$b_issue[$j]','$user_id','$b_id[$j]','$b_date[$j];')";
                                    $run_s=mysql_query($query_iss);
                                    if($run_s)
                                    {
                                        echo "<script type='text/javascript'>alert('Return request sucessful')</script>";
                                        echo "<script type='text/javascript'>window.open('student1.php', '_self')</script>";  
                                    }
                                    
                                }
                            }        
                            ?>
                            <?php 
                            ?>
       
                        </table>
                    </div>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                </form>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) 
                {
                    if (event.target == modal)
                    {
                        modal.style.display = "none";
                    }
                }
            </script>
</body>
</html>