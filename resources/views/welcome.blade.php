@extends('layouts.footer')
@extends('layouts.navbar')

<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
    html {
  height: 100%;
}
body {
  height: 100%;
  color: #5a5a5a;
}
/* Carousel base class */
.carousel {
  margin-bottom: 60px;
}
.carousel, .carousel .item, .carousel .item .active, .carousel-inner { 
	height:100%;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}
.carousel-inner {
  height:100%;
}
/* Declare heights */
.carousel .item {
  height:100%;
}
.carousel .fill { 
	width:100%;
	height:100%;
	background-size:cover;
	background-position: center center;
}
.carousel .first-slide {
  background-image:url("images/images11.jpg")
}
.carousel .second-slide {
  background-image:url("images/images4.jpg")
}
.carousel .third-slide {
  background-image:url("images/comping.jpg")
}
/* MARKETING CONTENT
-------------------------------------------------- */
/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}
/* Featurettes
------------------------- */
.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}
/* RESPONSIVE CSS
-------------------------------------------------- */
@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }
  .featurette-heading {
    font-size: 50px;
  }
}
@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
  }
}
/* couleurs
vert : #7cb62f
*/
/*Général style*/
body {
    font-family: lucida sans;
}
.sections {
    padding: 20px;
}
.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
}
.section-header .section-title {
    font-size: 40px;
}
.section-header .line {
    width: 150px;
    background: #ddd;
    height: 3px;
    margin: auto;
}
.section-header .line span {
    display: block;
    width: 100px;
    height: 4px;
    background-color: #06749E ;
    margin: auto;
    position: relative;
    bottom: 0.5px;
}
.section-header p {
    width: 50%;
    color: #888;
    margin: 20px auto;
    line-height: 1.5;
}
/* Header */
header {
    height: auto;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 999;
}
header i.icon {
    position: absolute;
    right: 30px;
    top: 34px;
    z-index: 10;
    display: none;
}
header .logo h2 {
    font-size: 35px;
    color: #fff;
}
header nav .nav-list {
    list-style: none;
    display: flex;
    justify-content: space-around;
    margin-bottom: 0;
}
header nav .nav-list .list a {
    display: block;
    padding: 15px 0;
    margin: 9px 0;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    color: #fff;
}
header nav .nav-list .list a:hover {
    color: #7cb62f;
    text-decoration: underline;
    font-size: 20px;
}
.sticky {
    background: #000;
    color: #fff;
}
@media (max-width:575px) {
    header {
        background: #000;
    }
    header nav .nav-list {
        display: none;
        text-align: center;
        padding: 0;
    }
    header .logo {
        text-align: center;
    }
    header i.icon {
        display: block;
    }
    .section-header p {
        width: 85%;
    }
}
/* Home Section */
.home {
    height: 650px;
    background-image: url('https://i43.servimg.com/u/f43/14/28/55/12/road10.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
}
.home .home-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.home .home-title {
    color: #fff;
    font-size: 40px;
    margin-bottom: 30px;
}
.home .home-desc {
    color: #fff;
    font-size: 18px;
}
.home .button {
    background: #7cb62f;
    color: #fff;
    width: 150px;
    text-align: center;
    padding: 10px 0;
}
@media (max-width:575px) {
    .home .home-title {
        font-size: 22px;
    }
    .home .button {
        margin-bottom: 10px;
    }
}
/* About Us*/
.about .about-info h3 {
    font-size: 25px;
    font-weight: normal;
    margin-bottom: 20px;
}
.about .about-info h3 span {
    color: #7cb62f;
}
.about .about-info .about-info-desc {
    line-height: 1.8;
    color: #888;
    
}
.about .about-info .about-info-btn {
    background-color: #7cb62f;
    padding: 10px 20px;
    border: 0;
    font-weight: bold;
    color: #fff;
    
}
.about .about-img img {
    width: 100%;
}
@media (max-width:575px) {
    .about .about-info h3 {
        font-size: 20px;
    }
}
@media (min-width:576px) and (max-width:768px) {
    .about .about-info {
        text-align: center;
    }
}
/* Services section */
.services {
    background: #33A8FF;
}
.services .serv {
    background: #fff;
    padding: 20px;
    text-align: center;
    
}
.services .serv .icon {
    background: #7cb62f;
    width: 60px;
    height: 60px;
    text-align: center;
    line-height: 60px;
    color: #fff;
    border-radius: 50%;
}
.services .serv-title {
    font-weight: bold;
    font-size: 25px;
   
}
.services .serv-desc {
    font-size: 16px;
    color: #888;
 
}
/* Pour developpement */

</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
*{
    padding: 0;
    margin: 0; 
    font-family: 'Quicksand', sans-serif;
   }
body{
    background: #fff;
}
.container{
    position: relative;
   
  
    
}
.container .section{
    position: relative;
    width: 100%;  height: 100vh;
   
}
.container .section:nth-of-type(2){
    background: url(https://media.istockphoto.com/photos/pakistan-monument-islamabad-picture-id535695503?k=6&m=535695503&s=612x612&w=0&h=uP8aDK4xlfjk3kEiyr9wwUiuh80UwAiICweFpiBDosk=);
    background-size: 100% 100vh;
}
.container .section:nth-of-type(3){
    background: url(https://www.wallpapertip.com/wmimgs/67-673764_pakistan-1799463-faisal-mosque.jpg);
    background-size: 100% 100vh;
}
.container .section:nth-of-type(4){
    background: url(http://upload.wikimedia.org/wikipedia/commons/e/e8/Ashburton_river_near_Nanutarra_roudhouse_24-4-2004_-_panoramio.jpg);
    background-size: 100% 100vh;
}
.container .section:nth-of-type(5){
    background: url(https://pbs.twimg.com/media/DkxmzfwW0AEJNdN.jpg);
    background-size: 100% 100vh;
}

/***********  .nav   ************/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

a {
  text-decoration: none;
  font-weight: 600;
  color: #000;
  font-weight: 500;
}

header {
  height: 53px;
  display: flex;
  align-items: center;
  flex-direction: column;
  margin: 50px 0;
}
header h1 {
  font-size: 24px;
  font-weight: 400;
  color: #333;
  padding: 0;
  margin: 0 0 15px;
}
header span i.fa {
  color: #e74c3c;
}
header span {
  font-size: 12px;
  color: #333;
}
main {
  display: flex;
}
.normal,
.hover {
  flex: 1;
  padding: 0 25px;
}
.demo-title {
  color: #666;
  margin: 0 0 15px;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
}
.module {
  min-width: 270px;
  height: 470px;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.15);
  transition: all 0.3s linear 0s;
  overflow: hidden;
  position: relative;
}
.module:hover {
  box-shadow: 0 1px 35px 0 rgba(0, 0, 0, 0.3);
}
.thumbnail {
  position: relative;
  overflow: hidden;
  background: black;
}
.thumbnail img {
  width: 200%;
  height: 100%;
  transition: all 0.3s;
}
.module:hover .thumbnail img {
  transform: scale(1.1);
  opacity: 0.6;
}

.thumbnail .date {
  position: absolute;
  top: 20px;
  right: 20px;
  background: #e74c3c;
  padding-top: 10px;
  color: #fff;
  font-weight: bold;
  border-radius: 100%;
  height: 55px;
  width: 55px;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 12px;
  text-transform: uppercase;
}
.date div:first-child {
  font-size: 18px;
  line-height: 1.2;
}
.content {
  position: absolute;
  width: 100%;
  height: 178px;
  bottom: 0;
  background: #fff;
 
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
}
.module:hover .content {
  height: 278px;
}

.content .category {
  position: absolute;
  top: -34px;
  left: 0;
  color: #fff;
  text-transform: uppercase;
  background: #e74c3c;
 
  font-weight: bold;
}
.title {
  margin: 0;
  padding: 0 0 10px;
  color: #333333;
  font-size: 24px;
  font-weight: 700;
}
.sub-title {
  margin: 0;
  padding: 0 0 20px;
  color: #e74c3c;
  font-size: 20px;
  font-weight: 400;
}
.description {
  color: #666666;
  font-size: 14px;
  line-height: 1.8em;
  height: 0;
  opacity: 1;
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  overflow: hidden;
}
.module:hover .description {
  height: 100px;
}
.meta {
  margin: 30px 0 0;
  color: #999999;
}
@-webkit-keyframes fade-in-out {
  0% {
    letter-spacing: -0.5em;
    filter: blur(12px) opacity(0%);
  }
  30% {
    letter-spacing: 0;
    filter: blur(0) opacity(1);
  }
  70% {
    letter-spacing: 0;
    filter: blur(0) opacity(1);
  }
  100% {
    letter-spacing: -0.5em;
    filter: blur(12px) opacity(0%);
  }
}

.blurOut {
  color: #034F6C ;
 /* text-shadow: 2px 2px 5px #034F6C;*/
  font-family: serif;
  font-weight: bold;
  font-size: 30px;
  width: 100%;
  text-align: center;
  margin-top: 100px;
  animation-name: fade-in-out;
  animation-duration: 10s;
  animation-iteration-count: infinite;
}
h1.italic {
  font-style: italic;
  font-size: 50px;
  margin-bottom:10px;
}
b.italic {
  font-style: italic;
  font-size: 50px;
  margin-bottom:10px;
}
.experts {
	color: #8dc63f;
	
}

/* make keyframes that tell the start state and the end state of our object */

@-webkit-keyframes fadeIn { 
0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes fadeIn { 
0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes fadeIn { 
 0%   { opacity: 0; }
  100% { opacity: 1; } 
}

.fade-in {
	opacity:0;  /* make things invisible upon start */
	-webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
	-moz-animation:fadeIn ease-in 1;
	animation:fadeIn ease-in 1;

	-webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
	-moz-animation-fill-mode:forwards;
	animation-fill-mode:forwards;

	-webkit-animation-duration:1s;
	-moz-animation-duration:1s;
	animation-duration:1s;
}

.fade-in.one {
-webkit-animation-delay: 0.7s;
-moz-animation-delay: 0.7s;
animation-delay: 0.7s;
}

.fade-in.two {
-webkit-animation-delay: 1.7s;
-moz-animation-delay:1.7s;
animation-delay: 1.7s; 
}

.fade-in.three {
-webkit-animation-delay: 2.6s;
-moz-animation-delay: 2.6s;
animation-delay: 2.6s;
}

/*---make a basic box ---*/
h3 {
  font-size:50px;
  text-align:center;
  font-family: serif;
  padding: 10% 0;
}

#changingword {
  color:#034F6C;
  font-family: serif;
  font-size:50px;
}
</style>
<body>



  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="fill first-slide">
          <div class="container">
            <div class="carousel-caption">
            
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="fill second-slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="fill third-slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
<div>
  <p class="blurOut">Vous pouvez y travailler selon vos besoins pour une heure, une journée,une semaine, un mois ou plus.</p>
</div>
  <!-- /.carousel -->
  <section >
        <div class="container">
            <div class="section-header" style="margin-bottom:50px">
            <span class="fade-in one" >
                <h2 class="section-title text-center" style="font-weight: bold;font-family : serif">A propos de nous</h2>
                <div class="line" style="color:#034F6C"><span></span></div></span>
               
            </div>
            <br><br>
            
                    
            <span class="fade-in one" style="color:#034F6C;font-family: serif;font-size:25px"><h1>bienvenue au association de développement de la communication (ADECO)</h1><br>
  </span> <span class="fade-in one" style="font-family: serif;font-size:20px"> L’association de développement de la communication (ADECO) est une association créée en avril 2015 à Siliana, dans le Nord-Ouest tunisien. L’ADECO œuvre pour le développement du tissu associatif à Siliana et pour une vie citoyenne ouverte à la culture et à la mise en valeur du patrimoine culturel et artistique local. Plus particulièrement, l’ADECO a pour objectif de promouvoir les valeurs citoyennes et le respect des droits de l’Homme dans la région par le biais d’outils de communication adaptés, et d’activités culturelles et artistiques.</span>
  <span class="fade-in one" > <a href="{{route('Association')}}" style="font-family: serif;font-size:20px">Voir plus..</a></span>
    </section>
    <section class="sections about">
        <div class="container">
            <div class="section-header">
            <span class="fade-in one" >
               <br><br>
                <div class="line" style="color:#034F6C"><span></span></div></span>
               
            </div>
            <br><br>
  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
 
  <h3>Notre espace comprend <span id="changingword">Salles de réunion</span></h3>
    <div class='container'>
   <center> <h1 class="italic" style="font-family : serif">NOS OFFRES DE BUREAUX</h1></center> <br>
   <center> <b class="italic" style="font-family : serif;font-size:20px;color:black">Pour une personne ou une équipe entière, des bureaux disponibles à la journée, la semaine, le mois ou plus.</b></center> <br>

   <br><br>
  <main>
<div class="row">
      
      @foreach($tab as $sp)
      <div class="col-lg-4" style="padding-left: 50px">
      <p class='demo-title'></p>
      <div class='module'>
        <div class='thumbnail'>
        
        @foreach($sp['images'] as $img)
          <img src="{{asset('images_espace/'.$img)}}">
          @endforeach
          
        </div>
      
        <div class='content' style="font-family : serif ">
         
        <br>
          <h1 class='title' style="margin-left:5px">{{$sp['nom_space']}}</h1>
         
          <div class="description" style="font-family : serif ;margin-left:5px;font-size:20px">{{$sp['description_space']}}</div>
          <div class="meta">
            <span class="timestamp">
              <i class='fa fa-clock-o' style="margin-left:5px"></i> {{$sp['created_at']}}
            </span>
            
            <p><center><a class="btn btn-default" style="font-family : serif" href="{{route('DetailSpace',$sp['id'])}}" role="button">Voir Plus &raquo;</a></center></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </main>
 
</div>
   <br><br><br>
   
   <div class="container">
            <div class="section-header" style="margin-bottom:50px">
            <span class="fade-in one" >
            
                <div class="line" style="color:#034F6C"><span></span></div></span>
               
            </div>
<br><br><br>
<center> <h1 class="italic" style="font-family : serif">NOS PARTENAIRES </h1></center> <br><br><br><br><br>
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
  
    @foreach($partenaire as $part)
      <div class="col-lg-4">
        <img class="img-circle" src="{{asset('images/'.$part->photo)}}" alt="Generic placeholder image" width="300" height="300">
        <h2>{{$part->nom}}</h2>
        <p>{{$part->description}}</p>
      
      </div>
      <!-- /.col-lg-4 -->
      @endforeach
</div>
  </div>
  <!-- /.container -->
</div>
</div>
<br><br><br><br><br>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
</body>
<script>
    $(document).ready(function(event) {
  var top_header = $(".carousel .fill");
  $(window).scroll(function() {
    var st = $(this).scrollTop();
    top_header.css({
      "background-position": "center calc(50% + " + st * 0.8 + "px)"
    });
  });
});
</script>
<script> $(document).ready(function(){
                     $(window).scroll(function(){
                           $val = $(window).scrollTop();
                           if($val > 10){
                                 $('.container .nav').addClass('active');
                           }else{
                              $('.container .nav').removeClass('active');  
                           }
                     })

                     $('.container .nav h1').click(function(){
                       $('.container .nav ul.menu').toggleClass('display');
                     })
                });
                </script>
<script>
  (function(){
      var words = [
          'Bureaux à la journée',
          'Bureaux à temps partiel',
          'Bureaux à temps plein',
          
          ], i = 0;
      setInterval(function(){
          $('#changingword').fadeOut(function(){
              $(this).html(words[i=(i+1)%words.length]).fadeIn();
          });
      }, 3000);
        
  })();
</script>

