<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK HERE -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="style/boostrap/bootstrap.min.css">
    <!-- OTHER LINKS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,900&family=Open+Sans:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style\blogs-policy-pharmacy.css">
    <title>Document</title>
</head>

<body>
    <!-- MENU SECTION STARTS-->
    <section id="navbar">
        <div class="container">
            <nav>
                <div class="row">
                    <div class="col-10">
                        <div class="leftpart">
                            <div class="logo">
                                <div class="logo"><a href="Homepage.html">
                                    <img src="images/logo.png" alt="file not found">
                                </a>
                            </div>

                            <div class="link">
                                <ul>
                                    <li><a href="Pharmacy.html">Pharmacy</a> </li>
                                    <li><a href="Doctor_appointment.html">Consultancy</a></li>
                                    <li><a href="Blood_request.html">Blood Request</a></li>
                                    <li><a href="Blogs.html">Blogs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="rightpart">

                            <button type="button" class="btn btn-light loginkey">LOGIN</button>
                            <button type="button" class="btn btn-success">REGISTER</button>
                        </div>
                    </div>
                </div>



            </nav>
        </div>
    </section>
    <!-- MENU SECTION ENDS -->

    <!-- HEADING OF PAGE -->
    <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>UIU DOCTOR CONSULTANCY</h1>
                </div>
                <div class="caption">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus aliquam alias expedita.
                        Vero voluptate libero consequuntur consectetur, veritatis nihil minima autem, earum mollitia
                        odio
                        voluptatem corporis dolor delectus magnam quas?</p>
                </div>


            </div>
        </div>
    </div>
    <!--  -->
    <!-- BODY SECTION -->
    <div id="body_section">
        <div class="container">
           
            <!-- OBJECT TO BE USE -->
            <form action="">
            <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                <div class="row">
                    <div class="col-2">
                        <img src="images/doc- (1).png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="body">
                            <h3>Doctor name</h3>
                            <h4>speciallist</h4>

                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus consequatur vitae
                                sit eius hic molestias vel</h6>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="modals-btn">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#appointment_list">
                                Book an Appointment
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="appointment_list" tabindex="-1" aria-labelledby="appointment_listLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="appointment_listLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time Shot</th>
                                            <th scope="col">select</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
            <!-- OBJECT TO BE USE end here-->


            <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                <div class="row">
                    <div class="col-2">
                        <img src="images/doc- (2).png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="body">
                            <h3>Doctor name</h3>
                            <h4>speciallist</h4>

                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus consequatur vitae
                                sit eius hic molestias vel</h6>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="modals-btn">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#appointment_list">
                                Book an Appointment
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="appointment_list" tabindex="-1" aria-labelledby="appointment_listLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="appointment_listLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time Shot</th>
                                            <th scope="col">select</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                <div class="row">
                    <div class="col-2">
                        <img src="images/doc- (3).png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="body">
                            <h3>Doctor name</h3>
                            <h4>speciallist</h4>

                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus consequatur vitae
                                sit eius hic molestias vel</h6>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="modals-btn">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#appointment_list">
                                Book an Appointment
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="appointment_list" tabindex="-1" aria-labelledby="appointment_listLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="appointment_listLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time Shot</th>
                                            <th scope="col">select</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                <div class="row">
                    <div class="col-2">
                        <img src="images/doc- (4).png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="body">
                            <h3>Doctor name</h3>
                            <h4>speciallist</h4>

                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus consequatur vitae
                                sit eius hic molestias vel</h6>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="modals-btn">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#appointment_list">
                                Book an Appointment
                            </button>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="appointment_list" tabindex="-1" aria-labelledby="appointment_listLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="appointment_listLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time Shot</th>
                                            <th scope="col">select</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td name="day">Monday</td>
                                            <td name="time" >12:30</td>
                                            <td><input type="radio" name="select"></td>
                                          </tr>

                                        </tbody>
                                      </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            

        </div>
    </div>
   
            <!-- Feedback PROMO STARTS-->
            <section id="portal_login">
                <div class="  p-5 m-5 container ">
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
            
            
        
            <!-- FOOTER ENDS -->
    <!-- BOOTSRAP JS -->
    <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>