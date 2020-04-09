
<html>
<head>
	<title>Den Soriano</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="ds-logo.png" type="image/gif" sizes="4x4">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/typewriter-effect/dist/core.js"></script>
    <script src="https://kit.fontawesome.com/198be9e77a.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link href="aos-master/dist/aos.css" rel="stylesheet">
    <script src="aos-master/dist/aos.js"></script>
     <link rel="stylesheet" href="animate.css/animate.min.css">
</head>
<style>

	body{

	background: #42466f;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #42466f, #17182b);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #42466f, #17182b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	.navbar ul {
      margin-right: 20%;
    }

    .navbar .navbar-brand{
    	margin-left: 20%;
    }

    .navbar li a{
      margin-right: 30px;
      border-bottom: 4px solid transparent;
      font-weight: bold;
    }

     .navbar-nav .nav-item .nav-link{
    	color: #ccc;
    	font-family: 'Montserrat', sans-serif;
    	letter-spacing: 1.5px;
    }

    .navbar-nav .nav-item .nav-link:hover{
      border-bottom: 4px solid #00aeff;
      font-weight: bold;
      color: white;
      opacity: 1;
    }

    .navbar-toggler{
    	background-color: #7178cb;
    }

    .p-2{
      color: white;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
      font-size: 56px;
      margin-top: 120px;
      letter-spacing: 1.5px;
    }

    .p-2 .d_greetings{
      background: rgba(0,153,255,0.2);
      width: 50%;
    }

    .p-2 p{
      font-size: 20px;
      text-align: center;
      border-radius: 20px;
      color: #a1e0ff;
    }

    .p-2 .d_ad {
      margin-top: 40px;
      font-size: 18px;
      color: white;
      text-align: justify;
    }

    .p-2 .d_mbutton{
      text-decoration: none;
      padding: 16px;
      width: 70%;
      border-radius: 30px;
      font-size: 20px;
      background: #c0c0aa;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #1cefff, #c0c0aa);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #1cefff, #c0c0aa); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .d_mbutton :hover {
      text-decoration: none;
    }

    .p-3 img{
      width: 420px;
      max-width: 100%;
      margin-top: 50px;

    }

    #app{
      margin-left: 52px;
      color: #16a3fc;
    }

    .d-flex .p-4 .fab{
      color: #ccc;
    }

    .p-4 a{
      color: #ccc;
      text-decoration: none;
    }

    .p-4:hover{
      color: white;
      cursor: pointer;
      text-shadow: 0 0 20px white;
    }

    @media (max-width: 576px) {
      .navbar{
        background-color: white;
      }

      .navbar-nav .nav-item .nav-link{
      color: black;
      font-family: 'Montserrat', sans-serif;
      letter-spacing: 1.5px;
      }

      .navbar-nav .nav-item .nav-link:hover{
      border-bottom: none;
      font-weight: bold;
      color: indigo;
      opacity: 1;
      }

      .navbar .navbar-brand{
      margin-left: 11%;
      }


    }

    .page-footer{
      background-color: #e6e6e6;
    }

    ion-icon{
      color: red;
    }

   

    

   	

</style>
<body>



	<br>
	<nav class="navbar navbar-expand-md navbar-dark sticky-top">
  <a class="navbar-brand" href="#">
  	<img src="ds-logo.png" alt="Logo" style="width:75px; height: 95px; margin-left: 30px;">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>   
    </ul>
  </div>  
</nav>

	<div class="container">
		<div class="d-flex flex-wrap align-content-center justify-content-around  mb-3 ">
    <div class="p-2 ">

      <p class="d_greetings">Hi, I am</p>
       Den Soriano
       <h2><div id="app"></div></h2>
       <p class="d_ad">Got an idea,<br> but don't know where to start?</p>
       <p class="d_mbutton"><a href="#" style="color: white;">MESSAGE ME</a></p>
     </div>

    <div class="p-3 "><img src="denchibi.png" /></div>

  </div>
  <br>
  <br>
	</div>
  <br><br><br><br><br><br>
  

</body>
<script>
  AOS.init();
</script>


<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: white;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center animated shake delay-2s">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with me on other social platforms!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Github-->
          <a class="github-ic">
            <a style="text-decoration: none; color: black;" href="https://www.github.com/donairos" target="_blank"><i class="fab fa-github white-text mr-4"> </i></a>
          </a>
          <!-- Facebook -->
          <a class="fb-ic">
            <a style="text-decoration: none; color: black;" href="https://www.facebook.com/yashieey" target="_blank"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- AOS Fade up-->
    <div data-aos="fade-up">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">I'm Den</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Hi there, welcome aboard feel free to know me more with my portfolio. </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a style="color: #03358c;" href="#!">About</a>
        </p>
        <p>
          <a style="color: #03358c;" href="#!">Projects</a>
        </p>
        <p>
          <a style="color: #03358c;" href="#!">Contact</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Connect with me</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>
          <i class="fas fa-envelope mr-3"></i> kinz.onairos@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 63 908 166 8520</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

   </div>
    <!-- AOS FADE -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    Made with <ion-icon name="heart"></ion-icon> by <a href="https://www.facebook.com/yashieey"> Den Soriano </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
  var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});


typewriter.typeString('<strong>Web Developer</strong>')
    .pauseFor(2500)
    .deleteChars(13)
    .typeString('<strong>Programmer</strong>')
    .pauseFor(2500)
    .deleteChars(10)
    .typeString('<strong>Freelancer</strong>')
    .pauseFor(2500)
    .start();
</script>
</html>