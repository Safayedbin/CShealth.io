@extends('Layouts.alltime')
@section('Content')
    <!-- BANNER STARTS -->
    <section id="banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner1.svg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <button type="button" class="btn btn-success">REGISTER NOW</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner1.svg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <button type="button" class="btn btn-success">REGISTER NOW</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner1.svg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <button type="button" class="btn btn-success">REGISTER NOW</button>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="clr"></div>
    </section>
    <!-- BANNER ENDS -->

    <!-- EVENTS AND CAMPAIGN STARTS -->

    <section id="events">
        <div class="container my-5">
            <h3>Recent Events and Camapagin</h3>
            <div class="row">
                <div class="col-6">
                    <div class="box">
                        <h6 class="my-4">EVENTS NAME</h6>
                    <p class="my-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quisquam corporis pariatur modi saepe voluptatibus architecto quod recusandae fugit, tempore, sint deserunt ad? Illo blanditiis iste autem qui, suscipit cupiditate!</p>
                    <button class="key my-2">see highlights</button>
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="box">
                        <h6 class="my-4">EVENTS NAME</h6>
                    <p class="my-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quisquam corporis pariatur modi saepe voluptatibus architecto quod recusandae fugit, tempore, sint deserunt ad? Illo blanditiis iste autem qui, suscipit cupiditate!</p>
                    <button class="key my-2">see highlights</button>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="box">
                        <h6 class="my-4">EVENTS NAME</h6>
                    <p class="my-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quisquam corporis pariatur modi saepe voluptatibus architecto quod recusandae fugit, tempore, sint deserunt ad? Illo blanditiis iste autem qui, suscipit cupiditate!</p>
                    <button class="key my-2">see highlights</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="box">
                        <h6 class="my-4">EVENTS NAME</h6>
                        <p class="my-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quisquam corporis pariatur modi saepe voluptatibus architecto quod recusandae fugit, tempore, sint deserunt ad? Illo blanditiis iste autem qui, suscipit cupiditate!</p>
                    <button class="key my-2">see highlights</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="clr"></div>
    </section>


    <!-- EVENTS AND CAMPAIGN ENDS -->

    <!--POLICY STARTS -->

    <section id="policy">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="cover">
                        <img src="images/policies.svg" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="link-side">
                        <h6>Heathcare Policlies at UIU</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam asperiores omnis rerum, corrupti magnam Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores cupiditate qui voluptatibus officiis ab saepe eos magnam iure optio. Quibusdam, ipsa neque alias labore a eos quae corporis ab. Autem.</p>
                        <button type="button" class="btn btn-success" style="float: right;"><a href="policy.html">SEE POLICIES</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </section>


    <!-- POLICY ENDS -->
    
    <!-- MED STARTS -->
    <section id="med_section">
        <div class="container my-5">
            <div class="row">
                
                <div class="col-6">
                    <div class="link-side">
                        <h6>Online Medicine Shop</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam asperiores omnis rerum, corrupti magnam Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores cupiditate qui voluptatibus officiis ab saepe eos magnam iure optio. Quibusdam, ipsa neque alias labore a eos quae corporis ab. Autem.</p>
                        <button type="button" class="btn btn-success" style="float: left;"><a href="Pharmacy.html">BUY NOW</a></button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cover">
                        <img src="images/med.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </section>

    <!-- PROMO ENDS -->

    <!-- DOCTOR PROFILE STARTS -->

    <section id="Docside">

        <h1>You're  in good Hands!</h1>
        <h3 class="my-5">Professionals Doctors at our venue available for all kinds of support  </h3>

        <div class="container my-5">
                <div class="row" >
                    <div class="col-3">
                        <div class="profile_box">
                            <div class="card" >
                                <img src="images/doc- (1).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <h6>Specialist</h6>
                                  <a href="Doctor_appointment.html" class="btn btn-success">Take an appointment</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="profile_box">
                            <div class="card">
                                <img src="images/doc- (2).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <h6>Specialist</h6>
                                  <a href="Doctor_appointment.html" class="btn btn-success">Take an appointment</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="profile_box">
                            <div class="card" >
                                <img src="images/doc- (3).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <h6>Specialist</h6>
                                  <a href="Doctor_appointment.html" class="btn btn-success">Take an appointment</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="profile_box">
                            <div class="card" >
                                <img src="images/doc- (4).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <h6>Specialist</h6>
                                  <a href="Doctor_appointment.html" class="btn btn-success">Take an appointment</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="clr"></div>
    </section>

    
    <!-- DOCTOR PROFILE ENDS -->
   
            <!-- Feedback PROMO STARTS-->
            <section id="portal_login">
                <div class=" container ">
                    <div class="row">
                        <div class="col-8">
                            <h4>Give Us Feedback on Uuser experiences!!!</h4>
                        </div>
                        <div class="col-4">
                               <a href="https://docs.google.com/forms/d/e/1FAIpQLSftqf7PwhhDqt6-6KY5dGLB8hHXTdMucDZQlo9R8gcJPSFCDw/viewform?usp=pp_url"> <button type="button" class="btn btn-success"> Feedback </button>
                               </a>
                            </div>
                        
                    </div>
        
                </div>
        
            </section>
            <!-- Feedback PROMO ENDS -->
@endsection