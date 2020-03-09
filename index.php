
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

    .d_mbutton a {
      text-align: center;
     -webkit-animation: glow 1s ease-in-out infinite alternate;
     -moz-animation: glow 1s ease-in-out infinite alternate;
      animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
     from {
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
    }
  
     to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
      }
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
  <hr>

  <div class="d-flex flex-wrap">
    <div class="p-4"><a href="https://www.github.com/donairos"> <i class="fab fa-github"> </i> /donairos </a> </div>
    <div class="p-4"><a href="https://www.facebook.com/yashieey"><i class="fab fa-facebook"></i> /yashieey </a> </div>
    <div class="p-4"><a href="https://www.facebook.com/yashieey"><i class="fab fa-twitter"></i> /d_onairos </a></div>
    <div class="p-4"><a href="https://www.facebook.com/yashieey"><i class="fab fa-instagram"></i> /d.onairos </a></div>

  </div>

	</div>




</body>
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