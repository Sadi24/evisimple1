<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!--   animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--   external css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Evisimple</title>
</head>
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

<section class="pricing py-5  animate__animated animate__fadeInLeft animate__delay-1s">
    <div class="container">
  <h1 class="text-center" style="margin-bottom: 
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