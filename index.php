<?php
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $human = $_POST['human'];
  $from = $_POST['email'];
  $to = 'kafil.ahmedtd@gmail.com, imranshaikh818@gmail.com';
  $subject = 'New order request' ;
  $body = "Hi $name \n";
  $body .=  "My contact no: $contact \n";
  $body .= "My Order is :" ;
  $error_msg = "";
  $error = "";
  if($_POST['submit'] && $human == '4'){
    if(mail($to, $subject, $body, $from)){
      $error = 1;
    }else{
      $error = 2;
    }
  }

?>
<!Doctype html>
<html>
  <head>
    <title>Macchiwala</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Delivering fresh fishes at your doorsteps" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <noscript>
      <link rel="stylesheet" href="css/skel-noscript.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-desktop.css" />
      <link rel="stylesheet" href="css/style-noscript.css" />
      <link rel="stylesheet" href="css/style-noscript.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
  </head>
  <body class="homepage">
    
    <!-- Modal box -->
    <!-- Button trigger modal -->
    <center style="padding:5px">
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Order Now!
      </button>
    </center>
    <div class="error">
      <?php 
        if($error == 1){
      ?>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thank you!</strong> your order has been sent.
          </div> 
      <?php
        }elseif($error == 2){
      ?>
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Sorry!</strong> something went wrong, please <a href="" data-toggle="modal" data-target="#myModal">order</a> again. 
          </div> 
      <?php    
        }
      ?>  
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">What do you like to have?</h4>
          </div>
            <div class="modal-body">
              <form role="form" method="POST" action="index.php" >
                <table>
                  <tr>
                    <td>Name</td>
                    <td>
                      <div class="input-append">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required />  
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Contact No</td>
                    <td>
                      <div class="input-append">
                        <input type="text" name="contact" class="form-control" placeholder="Enter your contact no" required />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                      <div class="input-append">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>*What is 2+2? (Anti-spam)</td>
                    <td>
                      <div class="input-append">
                        <input type="text" name="human" class="form-control" placeholder="Type here" required />
                      </div>
                    </td>
                  </tr>
                </table>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" name="submit" class="btn btn-primary" value="Send" />
                </div>
              </form>  
            </div>
        </div>
      </div>
    </div>
    
    <!-- Banner -->
    <div id="banner">
      <h2>We love the fish not the fish market</h2>
      <span class="byline">
        We provide 100% customization of fresh seafood to our consumers. Your seafood can be cut, cleaned, piled, filleted, sliced, chopped as per your requirement.
      </span>
    </div>

    <!-- Carousel -->
    <div class="carousel">
      <div class="reel">

        <article>
          <a href="#" class="image featured"><img src="images/kingfish.jpg" alt="" /></a>
          <header>
            <h3><a href="#">King Fish (Surmai)</a></h3><br/>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/rawas.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Salmon Fish (Rawas)</a></h3>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/pomfret.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Pomfret</a></h3><br/>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/black_pomfret.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Black Pomfret (Halwa)</a></h3>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/chinese_pomfret.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Chinese Pomfret (Kafree)</a></h3>
          </header>
        </article>

        <article>
          <a href="#" class="image featured"><img src="images/prawns.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Prawns</a></h3><br/>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/bombay_duck.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Bombay Duck (Bombil)</a></h3>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/baby_shark.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Baby Shark (Musi)</a></h3><br/>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/bangada.jpg" alt="" /></a>
          <header>
            <h3><a href="#">Mackerel (Bangada)</a></h3><br/>
          </header>
        </article>
      
        <article>
          <a href="#" class="image featured"><img src="images/basa.jpg" alt="" /></a>
          <header>
                <h3><a href="#">Basa (Kajura)</a></h3><br/>
          </header>
        </article>

        <article>
          <a href="#" class="image featured"><img src="images/grunter.jpg" alt="" /></a>
          <header>
                <h3><a href="#">Grunter (Karkara)</a></h3><br/>
          </header>
        </article>

        <article>
          <a href="#" class="image featured"><img src="images/ghol.jpg" alt="" /></a>
          <header>
                <h3><a href="#">Ghol</a></h3><br/>
          </header>
        </article>
      </div>
    </div>
    <!-- Footer -->
      <div id="footer">
        <div class="container">
          <!--  <div class="row">-->
            
            <!-- Tweets -->
            <!--
              <section class="4u">
                <header>
                  <h2 class="fa fa-twitter circled solo"><span>Tweets</span></h2>
                </header>
                <ul class="divided">
                  <li>
                    <article class="tweet">
                      Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                      <span class="timestamp">5 minutes ago</span>
                    </article>
                  </li>
                  <li>
                    <article class="tweet">
                      Hendrerit rutrum quisque.
                      <span class="timestamp">30 minutes ago</span>
                    </article>
                  </li>
                  <li>
                    <article class="tweet">
                      Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                      <span class="timestamp">3 hours ago</span>
                    </article>
                  </li>
                  <li>
                    <article class="tweet">
                      Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                      <span class="timestamp">5 hours ago</span>
                    </article>
                  </li>
                </ul>
              </section>
              -->
            <!-- Posts -->
             <!--
              <section class="4u">
                <header>
                  <h2 class="fa fa-file circled solo"><span>Posts</span></h2>
                </header>
                <ul class="divided">
                  <li>
                    <article class="post stub">
                      <header>
                        <h3><a href="#">Nisl fermentum integer</a></h3>
                      </header>
                      <span class="timestamp">3 hours ago</span>
                    </article>
                  </li>
                  <li>
                    <article class="post stub">
                      <header>
                        <h3><a href="#">Phasellus portitor lorem</a></h3>
                      </header>
                      <span class="timestamp">6 hours ago</span>
                    </article>
                  </li>
                  <li>
                    <article class="post stub">
                      <header>
                        <h3><a href="#">Magna tempus consequat</a></h3>
                      </header>
                      <span class="timestamp">Yesterday</span>
                    </article>
                  </li>
                  <li>
                    <article class="post stub">
                      <header>
                        <h3><a href="#">Feugiat lorem ipsum</a></h3>
                      </header>
                      <span class="timestamp">2 days ago</span>
                    </article>
                  </li>
                </ul>
              </section>
            -->  
            <!-- Photos -->
            <!--
              <section class="4u">
                <header>
                  <h2 class="fa fa-camera circled solo"><span>Photos</span></h2>
                </header>
                <div class="row quarter no-collapse">
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Air-Lounge-385212062" class="image full"><img src="images/pic10.jpg" alt="" /></a>
                  </div>
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Paris-City-Streets-II-382623606" class="image full"><img src="images/pic11.jpg" alt="" /></a>
                  </div>
                </div>
                <div class="row quarter no-collapse">
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Trainride-Visions-383309985" class="image full"><img src="images/pic12.jpg" alt="" /></a>
                  </div>
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Paris-Metro-382623851" class="image full"><img src="images/pic13.jpg" alt="" /></a>
                  </div>
                </div>
                <div class="row quarter no-collapse">
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Cliffs-of-Coogee-II-366961860" class="image full"><img src="images/pic14.jpg" alt="" /></a>
                  </div>
                  <div class="6u">
                    <a href="http://mdomaradzki.deviantart.com/art/Stormy-Coast-VII-366561367" class="image full"><img src="images/pic15.jpg" alt="" /></a>
                  </div>
                </div>
              </section>

          </div>
          <hr />
          -->
          <div class="row">
            <div class="12u">
              
              <!-- Contact -->
                <section class="contact">
                <!--  <header>
                    <h3>Fresh fishes available</h3>
                    </header> -->
                  <p>Free home delivery and order need to be placed before 24 hours. </p>
                  <!-- <ul class="icons">
                    <li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
                    <li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
                    <li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li>
                    <li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
                    <li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
                    <li><a href="#" class="fa fa-linkedin solo"><span>Linkedin</span></a></li>
                  </ul> -->
                </section>
              
              <!-- Copyright -->
                <div class="copyright">
                  <ul class="menu">
                    <li>&copy; macchiwala. All rights reserved.</li>
                  </ul>
                </div>
              
            </div>
          
          </div>
        </div>
      </div>

  </body>
</html>
