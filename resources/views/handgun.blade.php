<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- css file -->
<link rel="stylesheet" href="style.css">
<!-- css end -->
<!-- icon -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ordercss.css">
    <!-- table start -->
    <!-- links of data table -->
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <style>
     .btnchange{
    background-color: rgb(76, 87, 97);
    font-weight: bold;
 
}
.btnchange:hover{
    background-color: rgb(76, 87, 67);

}

.lc{
    background-image: url('l3.jpg');
    height: 500px;
}

/* team */

/*
flip card
*/
.card-flip > div {
    backface-visibility: hidden;
    transition: transform 300ms;
    transition-timing-function: linear;
    width: 100%;
    height: 100%;
    margin: 0;
    display: flex;
  }
 .aa{
    border:2px solid #cccccc; 
     border-radius:24px;
 }
  .card-front {
    transform: rotateY(0deg);
  }
  
  .card-back {
    transform: rotateY(180deg);
    position: absolute;
    top: 0;
  }
  
  .card-flip:hover .card-front {
    transform: rotateY(-180deg);
  }
    
  .card-flip:hover .card-back {
    transform: rotateY(0deg);
  }
/* team end */
/* sign up styling */
#signup{
    color:#000;
    border:2px solid red;
    border-radius:10px;
    padding:20px;
}
/* sign in styling */
#signin{
    color:#000;
    border:2px solid red;
    border-radius:10px;
    padding:20px;
}

/* main page styling */

.btncon{
    margin-top:20%;
    
}
.btncon2{
    margin-top:5px;
}
.btn{
    background-color: rgb(76, 87, 97);
    color:white;
}


    </style>
</head>
<body>





<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class=" offset-sm-1 col-sm-3">
     <a class="navbar-brand" href="{{url('/home')}}"> <img class="card-img-top" src="images/logoo.png" alt="Card image cap" style="height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     </div>
   
      <div class="offset-sm-1 col-sm-7">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
             
             <!-- dropdown -->
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Guns
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/shotgun')}}">Shot Guns</a>
                <a class="dropdown-item" href="{{url('/handgun')}}">Hand Guns</a>
                <a class="dropdown-item" href="{{url('/womengun')}}">Women's Guns</a>
                <div class="dropdown-divider"></div>
               
              </div>
             <!-- dropdown end -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ammo
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/shotammo')}}">Shot Gun Ammo</a>
                <a class="dropdown-item" href="{{url('/handammo')}}">Hand Gun Ammo</a>
                <div class="dropdown-divider"></div>
               
              </div>
            </li>
            <!-- parts  -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Parts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('/handpart')}}">Hand Guns Parts</a>
                  <a class="dropdown-item" href="{{url('/shotgunpart')}}">Shot Guns Parts</a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
           <!-- parts end -->
          </ul>
      
        </div>
</div>
      </nav>
    <!-- navbar end -->
<!-- second header -->
<div class="container-fluid bg-dark text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <p> <i class="fas fa-truck-moving" style="color: white;"></i>&nbsp;&nbsp;Free Shipping on Selected Items</p>
                   
                   
            </div>
            <div class="col-md-4">
                    <p> <i class="fas fa-award" style="color: white;"></i>&nbsp;&nbsp;Limited Life Time Warrenty on all new Guns</p>
            </div>
            <div class="col-md-4">
                    <p><i class="fas fa-dollar-sign" style="color: white;"></i>&nbsp;&nbsp;No Hidden Fees</p>
            </div>
        </div>
    </div>

</div>
<!-- header end -->






<!-- img  start-->

<div class="container">
                    <img src="images/g.jpg" style="height: 500px; width: 1110px;">
                  </div>

    <!-- img end -->

    <!-- hand guns start-->
                    <!--first  row start  -->
    <div class="container-fluid section-1 bg-gray mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g1.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$169</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Taurus G2C 9mm Semi-Auto Pistol.</p>
      <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
    
          <!-- second -->
          <div class="col-md-4">
            <div class="con mt-4">
                       <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g2.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$229</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Beretta 81BB Handgun.</p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
            </div>
          </div>
          <!-- end second -->
    
          
          <!-- third start -->
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g3.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$229</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Ruger Security-9.</p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
          <!-- end third  -->
        </div>
      </div>
    </div>

    <!-- first row end -->

    <!-- second row start -->
    <div class="container-fluid section-1 bg-gray mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g5.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$250</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Beretta PX4 Storm Handgun.</p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
    
          <!-- second -->
          <div class="col-md-4">
            <div class="con mt-4">
                       <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g7.jpeg" alt="Card image cap" style="width: 348px; height: 239px;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$300</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">American Tactical Imports M1911 HGA Ad-Ops Handgun.</p>
        <center> <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
            </div>
          </div>
          <!-- end second -->
    
          
          <!-- third start -->
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g8.jpeg" alt="Card image cap" style="height: 255px;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$288</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Beretta 92S Handgun, 9mm .</p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
          <!-- end third  -->
        </div>
      </div>
    </div>


    <!-- second row end -->

    <!-- third row start -->

    <div class="container-fluid section-1 bg-gray mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g9.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$899</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">SIG Sauer P365 Handgun. </p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
    
          <!-- second -->
          <div class="col-md-4">
            <div class="con mt-4">
                       <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g10.jpeg" alt="Card image cap">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$1000</h4>
        <hr>
        <!-- Text -->
        <p class="card-text">Kimber Ultra Crimson Carry II Handgun </p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
            </div>
          </div>
          <!-- end second -->
    
          
          <!-- third start -->
          <div class="col-md-4">
            <div class="con mt-4">
              <!-- Card -->
    <div class="card bg-dark text-white">
      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top" src="images/g11.jpeg" alt="Card image cap" style="height: 233px;">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    
      
    
      <!-- Card content -->
      <div class="card-body">
    
        <!-- Title -->
        <h4 class="card-title">$222</h4>
        <hr>
        <!-- Text -->
        <p class="card-text"> Beretta Model M1951 Handgun, 9 x 19mm </p>
        <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
    
      </div>
    </div>
    <!-- Card -->
            </div>
          </div>
          <!-- end third  -->
        </div>
      </div>
    </div>
    <!-- third row end -->

            <!-- fourth row start -->
            <div class="container-fluid section-1 bg-gray mb-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="con mt-4">
                      <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g12.jpeg" alt="Card image cap">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$225</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Smith & Wesson Model 10-5 Revolver, .38 Special </p>
                <center>   <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
            <!-- Card -->
                    </div>
                  </div>
            
                  <!-- second -->
                  <div class="col-md-4">
                    <div class="con mt-4">
                               <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g13.jpeg" alt="Card image cap" style="height: 253px;">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$500</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Ruger EC9s Handgun  </p>
                <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
                    </div>
                  </div>
                  <!-- end second -->
            
                  
                  <!-- third start -->
                  <div class="col-md-4">
                    <div class="con mt-4">
                      <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g14.jpeg" alt="Card image cap" style="height: 250px;">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$300</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Glock 19 Gen5 Handgun </p>
                <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
            <!-- Card -->
                    </div>
                  </div>
                  <!-- end third  -->
                </div>
              </div>
            </div>
            <!-- fourth row end -->

            <!-- fifth row start -->

            <div class="container-fluid section-1 bg-gray mb-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="con mt-4">
                      <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g14.jpeg" alt="Card image cap" style="height: 250px;">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$699</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Glock 19 Gen5 Handgun </p>
                <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
            <!-- Card -->
                    </div>
                  </div>
            
                  <!-- second -->
                  <div class="col-md-4">
                    <div class="con mt-4">
                               <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g15.jpeg" alt="Card image cap" style="height: 250px;">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$499</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Smith & Wesson Model 686 Plus Handgun </p>
                <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
                    </div>
                  </div>
                  <!-- end second -->
            
                  
                  <!-- third start -->
                  <div class="col-md-4">
                    <div class="con mt-4">
                      <!-- Card -->
            <div class="card bg-dark text-white">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="images/g16.jpeg" alt="Card image cap" style="height: 230px;">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            
              
            
              <!-- Card content -->
              <div class="card-body">
            
                <!-- Title -->
                <h4 class="card-title">$244</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">American Tactical Imports GSG FireFly Handgun </p>
                <center>  <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
            
              </div>
            </div>
            <!-- Card -->
                    </div>
                  </div>
                  <!-- end third  -->
                </div>
              </div>
            </div>
            <!-- fifth row end -->

    <!-- hand guns end -->




<!-- template -->

<div class="container-fluid section-1 bg-gray mb-5">
                    <div class="container">
                      <div class="row">
                      @foreach($hand as $s)
                        <div class="col-md-4">
                          <div class="con mt-4">
                            <!-- Card -->
                  <div class="card bg-dark text-white">
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top" src="{{$s->image}}" alt="Card image cap">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                  
                    
                  
                    <!-- Card content -->
                    <div class="card-body">
                  
                      <!-- Title -->
                      <h4 class="card-title">{{$s->price}}</h4>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">s->name</p>
                     <!-- <center> <button href="/buyform"class="btn btnchange btn-rounded btn-md">BUY</button></center> -->
                     <center><a href="/buyform" class="btn btnchange btn-rounded btn-md">Buy</a></center>
                  
                    </div>
                  </div>
                  <!-- Card -->
                          </div>
                        </div>
                        @endforeach

                  

<!-- template end -->

















<br>
<!-- footer -->
<footer class="page-footer font-small bg-dark text-white pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
          <p>Our company description.</p>
        </div>
        <!-- Grid column -->
  
        <hr class="w-100 clearfix d-md-none">
  
      
  
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> Rawalpindi , .... , Pakistan</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> Haiderpasha84@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> 0320 5586329</p>
          <p>
            <i class="fas fa-print mr-3"></i> Rohail's number</p>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Footer links -->
  
      <hr>
  
      <!-- Grid row -->
      <div class="row d-flex align-items-center">
  
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">
  
          <!--Copyright-->
          <p class="text-center text-md-left">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" style="color: white">
              <strong> companyname.com</strong>
            </a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">
  
          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  </footer>          

<!-- end footer -->



</body>
</html>
