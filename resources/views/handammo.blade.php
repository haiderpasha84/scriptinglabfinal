@extends('layouts.app')

@section('contenthammo')
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







 <!-- img  start-->

 <div class="container">
            <img src="images/a1.jpg" style="height: 500px; width: 1110px;">
          </div>

<!-- img end -->
<!-- ammo links start -->
                <!-- ammo row 1 start -->
                <div class="container-fluid section-1 bg-gray mb-5">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="con mt-4">
                                <!-- Card -->
                      <div class="card bg-dark text-white">
                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$69</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">Taurus G2C 9mm Semi-Auto Pistol.</p>
                         <center> <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
                      
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
                          <img class="card-img-top" src="images/a3.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$29</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">CCI Blazer Brass Ammo .38 Special 125 Grain Full Metal Jacket 50rd/Box</p>
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
                          <img class="card-img-top" src="images/a4.jpg" alt="Card image cap" style="height: 305px">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$29</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">CCI Blazer Brass Ammo .380 ACP 95gr, Full Metal Jacket, 250rd/Box</p>
                          <center> <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
                      
                        </div>
                      </div>
                      <!-- Card -->
                              </div>
                            </div>
                            <!-- end third  -->
                          </div>
                        </div>
                      </div>

                <!-- ammo row 1 end -->

                <!-- ammo row 2 start -->
                <div class="container-fluid section-1 bg-gray mb-5">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="con mt-4">
                                <!-- Card -->
                      <div class="card bg-dark text-white">
                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="images/a5.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$69</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">CCI Pistol 38 Special Shot Shell 100gr, 10rd/Box</p>
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
                          <img class="card-img-top" src="images/a6.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$29</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">Federal American Eagle 5.7x28mm 40 Grain Speer Full Metal Jacket 50 Per Box</p>
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
                          <img class="card-img-top" src="images/a7.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$84</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">Federal HST Personal Defense 9mm 124 Grain Jacketed Hollow Point 20rd/Box</p>
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

                <!-- ammo row 2 end -->

                <!-- ammo row 3 start -->
                <div class="container-fluid section-1 bg-gray mb-5">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="con mt-4">
                                <!-- Card -->
                      <div class="card bg-dark text-white">
                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="images/a8.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$35</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">G2 Research RIP .380 ACP 62gr, HP 20rd/Box</p>
                          <center> <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
                      
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
                          <img class="card-img-top" src="images/a9.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$14</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">Hornady American Gunner 9mm 115gr, XTP, 25rd/Box</p>
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
                          <img class="card-img-top" src="images/a10.jpg" alt="Card image cap" style="height: 305px;">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        
                      
                        <!-- Card content -->
                        <div class="card-body">
                      
                          <!-- Title -->
                          <h4 class="card-title">$45</h4>
                          <hr>
                          <!-- Text -->
                          <p class="card-text">Hornady Critical Duty 45 ACP 220gr, Flexlock, 20rd/Box</p>
                          <center> <button class="btn btnchange btn-rounded btn-md">BUY</button></center>
                      
                        </div>
                      </div>
                      <!-- Card -->
                              </div>
                            </div>
                            <!-- end third  -->
                          </div>
                        </div>
                      </div>

                <!-- ammo row 3 end -->
<!-- ammo links end -->





<!-- template -->

<div class="container-fluid section-1 bg-gray mb-5">
                    <div class="container">
                      <div class="row">
                      @foreach($hammo as $s)
                        <div class="col-md-4">
                          <div class="con mt-4">
                            <!-- Card -->
                  <div class="card bg-dark text-white" style="border: 2px solid red">
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top" src="{{$s->image}}" alt="Card image cap" style="width:345px;height:200px;">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                  
                    
                  
                    <!-- Card content -->
                    <div class="card-body" >
                  
                      <!-- Title -->
                      <h4 class="card-title">{{$s->price}}</h4>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">{{$s->name}}</p>
                     <!-- <center> <button href="/buyform"class="btn btnchange btn-rounded btn-md">BUY</button></center> -->
                     <center><a href="/buyform" class="btn btnchange btn-rounded btn-md">Buy</a></center>
                  
                    </div>
                  </div>
                  <!-- Card -->
                          </div>
                          </div>
                        @endforeach
                        </div> </div></div>


                        <br><br>

                  

<!-- template end -->









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
