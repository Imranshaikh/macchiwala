<?php
  if($_POST['submit']){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $items = $_POST['items'];
    $enquiry = $_POST['enquiry'];
    $from = $_POST['email'];
    $to = 'kafil.ahmedtd@gmail.com, shahbaazmacchiwala@gmial.com';
    $subject = 'New order request' ;
    $body = "My Name: ". ucfirst($name) ."\n";
    $body .=  "My contact no: $contact \n";
    foreach($items as $item){
      $body .= "List of item: ". ucfirst($item)."\n";
    }
    if(!empty($enquiry)){
      $body .= "Enquiry: $enquiry \n";  
    }
    $error = "";
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
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    
    <script type="text/javascript" src="js/bootstrap-3.0.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.0.3.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-multiselect.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
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
    <center><img src="images/macchiwala_logo.png" /></center> 
    
    <!-- Banner -->
    <div id="banner">
      <h2>We love the fish not the fish market</h2>
      <span class="byline">
        We provide 100% customization of fresh seafood to our consumers. Your seafood can be cut, cleaned, piled, filleted, sliced, chopped as per your requirement.
      </span>
    </div>
        <!-- Modal box -->
    <!-- Button trigger modal -->
    <center style="padding:5px">
      <div class="container">
        <div class="span12">

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
        </div>
      </div>
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Order Now!
      </button>
      
    </center>
    
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
                    <td>
                      <label for="name">Name</label>
                    </td>
                    <td>
                      <div class="input-append">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required />  
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="contact">Contact No</label>
                    </td>
                    <td>
                      <div class="input-append">
                        <input type="text" name="contact" class="form-control" placeholder="Enter your contact no" required />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="email">Email</label>
                    </td>
                    <td>
                      <div class="input-append">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="items">Pick your choice</label>
                    </td>
                    <td>
                      
                      <select id="items" name="items[]" multiple="multiple">
                        <option value="pomfret">Pomfret</option>
                        <option value="kafree">Kafree</option>
                        <option value="prawns">Prawns</option>
                        <option value="Rawas">Rawas</option>
                        <option value="surmai">Surmai</option>
                        <option value="halwa">Halwa</option>
                        <option value="dara">Dara</option>
                        <option value="ghol">Ghol</option>
                        <option value="bombil">Bombil</option>
                        <option value="bangda">Bangda</option>
                        <option value="bass">Bass (Khajura)</option>
                        <option value="karkara">Karkara</option>
                        <option value="basa">Basa</option>
                        <option value="whiteprawns">Whiteprawns</option>
                        <option value="crabs">Crabs</option>
                        <option value="vakru">Vakru</option>
                        <option value="lobster">Lobster</option>
                      </select>
                    
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="enquiry"> Enquiry </label>
                    </td>
                    <td>
                      <div class="input-append">
                        <textarea class="form-control" rows="3" name="enquiry"></textarea>  
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
          <div class="row">
            <div class="12u">
              <!-- Contact -->
              <section class="contact">
                <p>Free home delivery and order need to be placed before 24 hours. </p>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#items').multiselect({
      enableCaseInsensitiveFiltering: true, 
      includeSelectAllOption: true,
      enableFiltering: true,
      maxHeight: 240
    });
  });
</script>
