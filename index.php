<?php include_once 'header.php';
session_start();
require_once("./includes/dbh.inc.php");
require_once("./includes/functions.inc.php");
updateCounter($conn);

?>

<style>

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);

}

.pricing hr {
  margin: 1.5rem 0;
}
.pricing  {
background-image: url(images/zz.png);
    background-repeat: no-repeat;
    background-size: contain
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
        color:white;
      background:#07848F;
  }
}
.pricing .card .btn {
       color:black;
/*      background:#07848F;*/
    border:2px solid #07848F;
  }
    
ul li i{
        color: #4BB543;
    }
.ribbon {
  width: 130px;
  height: 32px;
  font-size: 12px;
  text-align: center;
  color: #fff;
  font-weight: bold;
  box-shadow: 0px 2px 3px rgba(136, 136, 136, 0.25);
  background: #4dbe3b;
  transform: rotate(45deg);
  position: absolute;
  right: -10px;
  top: 30px;
  padding-top: 7px; 
}
.span{
        font-size: 16px;
        font-weight: bolder;
    }
    .card::after {
      position: absolute;
      z-index: -1;
      opacity: 0;
      -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
      transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card:hover {


      transform: scale(1.02, 1.02);
      -webkit-transform: scale(1.02, 1.02);
      backface-visibility: hidden; 
      will-change: transform;
      box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
    }

</style>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar fixed-top">
            <div class=" my-2 my-lg-0">

                <?php
                if (isset($_SESSION["username"])) {
                    echo '
                    <a class="btn btn-outline-success my-2 my-sm-0" href="includes/logout.inc.php" title="Sign Out">
                                        <i class="fas fa-sign-out-alt"></i>
                    </a>';
                } else {
                    echo '';
                }
                ?>
            </div>
            <a class="navbar-brand" href="index.php">EviSimple</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-toggle="collapse">
                <i class="fas fa-bars navbar-toggler-icon icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <?php
                    if ($_SESSION['user_type'] == 1) {

                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="users_index.php">Dashboard</a>
                        </li>
                    <?php

                    }
                    ?>

<li class="nav-item">
                        <a class="nav-link" href="#Services">Services<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#AboutUs">About</a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="#ContactUs">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button type="submit" onClick="parent.location='#Subscription Plans' " class="btn btn-outline-secondary a">Sign Up</button>
                    </li>
                </ul>

            </div>
        </nav>
    </div>




    </ul>
    </div>
    </nav>
    </div>

    <!-- end navbar-->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <?php
        if (isset($_SESSION["username"])) {
            echo '<b class="text-center">Hello there, ' . $_SESSION["username"] . '</b>';
        }
        ?>
        <div class="content text-center landing-text">
            <h1 class="text-white  animate__animated animate__slideInDown animate__fast">Research ... Innovate </h1>
            <a href="#Subscription Plans" class="btn btn-outline-secondary btn-xl btnn  animate__animated animate__flipInX">GET
                STARTED</a>
        </div>
    </div>

    <!--  section2-->
    <div class="padding">
        <div class="container">
            <div class="row text-center  animate__animated animate__fadeInLeft animate__delay-1s" id="Services">
                <div class="col-sm-4">
                    <img src="images/Group.png" alt="" class="img-responsive">
                    <h5>Online library</h5>
                    <small>A step by Step, inclusive and practical guide on how to start and ace a research project.</small>
                </div>


                <div class="col-sm-4">
                    <img src="images/Group2.png" alt="" class="img-responsive">
                    <h5>Certified skills</h5>
                    <small>You can get recognized for a certain or multiple skills,as academic writing or statistical analysis.</small>
                </div>

                <div class=" col-sm-4">
                    <img src="images/Group1.png" alt="" class="img-responsive">
                    <h5>Connect</h5>
                    <small>Get to know leading researchers and receive instructions and supervision as needed for your projects</small>
                </div>
            </div>
        </div>
    </div>

<!--section3   cards -->
<section class="pricing py-5  animate__animated animate__fadeInLeft animate__delay-1s"id="joinNow">
  <div class="container">
<h1 class="text-center" id="Subscription Plans" style="margin-bottom: 
 50px">Subscription Plans</h1>
  
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
              <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-clipboard" style="color:#007bff"></i></span><strong class="text-primary

"> Basic Package.</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Research paper anatomy
</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Critical Appraisal & Quality assessment </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Research Hypothesis Testing</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Research Proposal & Protocol.</li>
              <li class=""><span class="fa-li"><i class="fas fa-check"></i></span> Ethics in Research.</li>
              
          <br>
           <br>
           <br><br>
           <br>
           <br>    
            </ul>
            <a href="/signup free.php" class="btn btn-block  btn1"> <span class="span"> Sign Up</span></a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">

          <div class="card-body">
                       <div class="ribbon">Best Offer</div>
            <h6 class="card-title text-uppercase text-center">Plus</h6>
            <h6 class="card-price text-center"> $9<span class="period">/month</span></h6>
            <hr>
         
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check-circle"style="color:#007bff"></i></span><strong class="text-primary

"> All Features in BASIC.</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Searching Strategy and idea validation</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span> Study Designs &  Data Collection tools</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Analyzing Data & Softwares</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Manuscript Writing & Publishing</li>
             
              <li class=""><span class="fa-li"><i class="fas fa-check"></i></span> Systematic Reviews & Meta-analyses</li> 
         
                <br> 
                <li><span class="fa-li"><i class="fas fa-star" style="color: #DAA520"></i></span> Assessment & tracking tools</li> 
                <li><span class="fa-li"><i class="fas fa-star"style="color: #DAA520"></i></span>  Step by Step guide for each study design</li>
            </ul>
            <a href="/signup Plus.php" class="btn btn-block btn1"> <span class="span">Sign Up</span> </a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$59<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check-circle"style="color:#007bff"></i></span><strong class="text-primary"> All Features in PLUS.</strong></li>
              <br> 
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Advanced Research Methods</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Advanced Data Analysis</li>
               <li><span class="fa-li"><i class="fas fa-check"></i></span> Presenting to Conferences & Posters</li>  
              <br> <br> <br> <br><br>
              <li><span class="fa-li"><i class="fas fa-star"style="color: #DAA520" ></i></span >Mentor Guidance & Supervision</li>
              <li><span class="fa-li"><i class="fas fa-star"style="color: #DAA520"></i></span>Space to join projects based on your skills</li>

    
            </ul>
            <a href="/signup Pro.php" class="btn btn-block  btn1"> <span class="span">Reserve a Spot</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


   
    
   
    <!--   section31-->
    <div class="all">
        <div class="padding1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" id="AboutUs">



                        <h2 class="text-left animate__animated animate__fadeInLeft animate__delay-2s">Learn how to build a research project from scratch, Boost your skills,
                            and contribute to evidence by publishing your work. </h2>
                        <a href="#joinNow" class="btn btn-outline-secondary btn-large a">Join Now</a>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" src="images/Group%204.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--  start footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3" id="ContactUs">
                        <h5>Join Now</h5>
                        <ul class="list-unstyled three-columns">
                            <a href="#Subscription Plans">
                                <li>Sign Up</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled three-columns">
                            <li style="color: #eee">Email: info@evisimple.com </li>
                            <ul class="list-unstyled social-list">
<!-- <<<<<<< HEAD -->
                            
                            <a href="https://www.facebook.com/evisimple">   <li>Facebook: <i class="fab fa-facebook fa-lg"style="color:  #fff;" ></i></li></a> 
                             
<!-- ======= -->

                                <!-- <a href="https://www.facebook.com/evisimple">
                                    <li>Facebook: <i class="fab fa-facebook fa-lg"></i></li>
                                </a> -->

<!-- >>>>>>> 05b99feea0bb17ab36e8d84a123fadc7d1eb2c19 -->
                            </ul>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <ul class="list-unstyled three-columns">
                            <li style="color: #eee">If you want to get involved contact : </li>
                            <li style="color: #eee">E: info@evisimple.com </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright text-center">Evisimple © 2021. All Rights reserved
                </div>
            </div>

        </footer>
        <?php include_once 'footer.php';
        ?>