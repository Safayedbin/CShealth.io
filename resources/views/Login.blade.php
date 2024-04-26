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
    <link rel="stylesheet" href="{{ asset('style/Loginsignup.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- MENU SECTION STARTS-->
    <div id="board">
        <div id="login_page">
            <div class="row">
                <div class="col-12">
                    <div class="logo">
                        <div class="logo"><a href="Homepage.html">
                            <img src="{{ asset('images/logo.png') }}" alt="file not found">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form">
                        <form action="" class="login_form">
                           <div class="body">
                               <div class="row">
                                   <h3>LOGIN</h3>
                               </div>
                               <div class="row">
                                   <input type="email" name="email" Placeholder="Enter Your Email">
                               </div>
                               <div class="row">
                                   <input type="password" name="password" Placeholder="Enter Your Password">
                               </div>
                               <div class="row">
                                   <button type="button" class=" btn btn-success key" name="access">LOGIN</button>
                               </div>
                               <div class="row">
                                   <p>Are you new? Do you want to <span><a href="/register"> Signup?</a></span></p>
                               </div>
                           </div>
       
                       </form>
                      
       
                   </div>
                </div>
            </div>
            
            

            </div>
        </div>


        <div id="photoframe">
            <img src="{{ asset('images/signup_photo.png') }}" alt="">
        </div>



    </div>
    <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>