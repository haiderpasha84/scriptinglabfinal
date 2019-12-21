@extends('layouts.app')

@section('content')
<style>
a:hover {
  background-color: red;
  border-radius:5px;
}
</style>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
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
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:red; ">
                <a class="dropdown-item" href="{{url('/shotgun')}}" >Shot Guns</a>
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
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:red;">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:red;">
                  <a class="dropdown-item" href="{{url('/handpart')}}">Hand Guns Parts</a>
                  <a class="dropdown-item" href="{{url('/shotgunpart')}}">Shot Guns Parts</a>
                  <div class="dropdown-divider"></div>
                 
                </div>
              </li>
           <!-- parts end -->
          </ul>

          <a href="{{url('/create')}}">DASHBOARD</a>
      
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







<!-- slider -->
<div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
              <img src="images/a.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4"><b>Assualt Riffle</b></h2>
              <p class="lead">Come and Take it.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
              <img src="images/women.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Women's Guns</h2>
              <p class="lead">You can buy guns for women.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
              <img src="images/men.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Shot Gun</h2>
              <p class="lead"><b>One Men with a gun can control 100 without one.</b></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
      
<!-- slider end -->
<!-- gun link -->
<div class="container-fluid section-1 bg-gray mb-5">
  <div class="container ">
    <div class="row ">
      <div class="col-md-4">
        <div class="con mt-4">
        <div class="card" style="border: 2px solid red; border-radius:5px 5px 5px 5px">
          <!-- Card -->
<div class="card bg-dark text-white">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="/images/hand.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Hand Guns</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Best handguns for home safety easy <br> to buy.</p>
  <!-- <center>  <button class="btn btnchange btn-rounded btn-md" href="{{url('/handgun')}}">Detail</button></center> -->
  <a style="color:black; background:white; " href="{{url('/handgun')}}">Details</a>

  </div>
</div>
</div>
<!-- Card -->
        </div>
      </div>

      <!-- second -->
      <div class="col-md-4">
        <div class="con mt-4">
        <div class="card" style="border: 2px solid red; border-radius:5px 5px 5px 5px">
                   <!-- Card -->
<div class="card bg-dark text-white">
  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="images/shot.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Shot Guns</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Best shotguns for shooting at short distance.</p>
  <!-- <center>  <button class="btn btnchange btn-rounded btn-md">Detail</button></center> -->
  <a style="color:black; background:white; " href="{{url('/shotgun')}}">Details</a>

  </div>
</div>
        </div>
      </div>
      </div>
      <!-- end second -->

      
      <!-- third start -->
      <div class="col-md-4">
        <div class="con mt-4">
          <!-- Card -->
          <div class="card" style="border: 2px solid red; border-radius:5px 5px 5px 5px">
<div class="card bg-dark text-white">
  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="images/womengun.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  

  <!-- Card content -->
  <div class="card-body" >

    <!-- Title -->
    <h4 class="card-title">Women's Guns</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Handguns for women which are easy to use.</p>
   <!-- <center> <button class="btn btnchange btn-rounded btn-md">Detail</button></center> -->
   <a style="color:black; background:white; " href="{{url('/womengun')}}">Details</a>

  </div>
</div>
<!-- Card -->
        </div>
      </div>
      <!-- end third  -->
    </div>
  </div>
</div>
</div>
<!-- gun link end -->


<!-- latest gun -->

<div class="container-fluid lc">
<div class="container text-white text-center " >
<img src="images/l3.jpg" class="aa" alt="" style="height:500px;border: 2px solid red; border-radius:25px 25px 25px 25px" >

 <h1><b>Steyr AUG. Assault Rifle</b></h1>
 
 <p>The AUG comes standard with four magazines, a muzzle cap, spare bolt for left-handed shooters,
    blank-firing adaptor, cleaning kit, sling and either an American M7 or German KCB-77 M1 bayonet.</p>
</div>
</div>
<!-- end latest gun -->
<br>
<br>
<br>
<br>

<!-- team title -->
                    <div class="container bg-gray text-center pt-5">
                      <h3><b>TEAM MEMBER's</b></h3>
                    </div>
<!-- end team title -->
<!-- team -->
<div id="ccc" class="container-fluid bg-gray pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="con mt-4 ">
            <div class="card card-flip h-100 aa bg-dark rounded-circle"  style="border: 2px solid red; ">
                <div class="card-front text-white ">
                    
                        
                       <img src="images/profile.jpeg" class="aa rounded-circle" alt="" >
                   
                </div>
                <div class="card-back bg-dark text-white aa rounded-circle"  style="border: 2px solid red; ">
                    <div class="card-body text-center mt-5">
                       <h3>Haider Hassan Pasha</h3>
                       <p>Front-end Developer</p>
                       
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- second member -->

      <div class="col-md-4">
          <div class="con mt-4">
              <div class="card card-flip h-100 aa bg-dark rounded-circle"  style="border: 2px solid red; ">
                  <div class="card-front text-white ">
                      
                          
                         <img src="images/profile.jpeg" class="aa rounded-circle" alt="">
                     
                  </div>
                  <div class="card-back bg-dark text-white aa rounded-circle"  style="border: 2px solid red; ">
                      <div class="card-body text-center mt-5">
                         <h3>ROHAIL ALI</h3>
                         <p>Backhand developer</p>
                          
                      </div>
                  </div>
              </div>
          </div>
        </div>

      <!-- end second member -->
      <!-- third member -->
      <div class="col-md-4">
          <div class="con mt-4">
              <div class="card card-flip h-100 aa bg-dark rounded-circle"  style="border: 2px solid red; ">
                  <div class="card-front text-white ">
                      
                          
                         <img src="images/profile.jpeg" class="aa rounded-circle" alt="">
                     
                  </div>
                  <div class="card-back bg-dark text-white aa rounded-circle"  style="border: 2px solid red; ">
                      <div class="card-body text-center mt-5">
                         <h3>JAWAD ARSHAD</h3>
                         <p>Developer</p>
                         <i class="fas-fa-facebook" style="color: white;"></i> 
                      </div>
                  </div>
              </div>
          </div>
        </div>
      <!-- end third member -->
    </div>
  </div>
</div>
<!-- end team -->




















<!-- footer -->
<footer class="page-footer font-small bg-dark text-white pt-4" >

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Weapon Masters</h6>
          <p>We deal with all sorts of weapons, ranging from low tier to high tier accessible to locals and big companies that hold a licence to guns, we also deal with women guns as for defence purposes. </p>
        </div>
        <!-- Grid column -->
  
        <hr class="w-100 clearfix d-md-none">
  
      
  
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> Rawalpindi, Pakistan</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> weaponsmaster@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> 0320 5586329</p>
          <p>
            <i class="fas fa-print mr-3"></i> 0312 5686446</p>
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
              <strong> weaponmaster.com</strong>
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



@endsection
