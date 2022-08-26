@extends('layouts.navbar')


<!-- Latest compiled and minified CSS -->
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
  background-image:url("images/3.jpeg")
}

.carousel .second-slide {
  background-image:url("images/44.jpg")
}

.carousel .third-slide {
  background-image:url("images/8.jpg")
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
    background-color: #ff5722;
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
    margin-bottom: 20px;
}

.about .about-info .about-info-btn {
    background-color: #7cb62f;
    padding: 10px 20px;
    border: 0;
    font-weight: bold;
    color: #fff;
    margin-bottom: 15px;
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
    background: #f7f7f7;
}

.services .serv {
    background: #fff;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
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
    margin-bottom: 20px;
}

.services .serv-desc {
    font-size: 16px;
    color: #888;
    margin-bottom: 20px;
}

/* Pour developpement */

.test {
    margin-bottom: 400px;
}
------------------------
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
  background-image:url("images/images5.jpg")
}
.carousel .second-slide {
  background-image:url("images/images1.jpg")
}
.carousel .third-slide {
  background-image:url("images/images7.jpg")
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
    background-color: #ff5722;
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
    margin-bottom: 20px;
}
.about .about-info .about-info-btn {
    background-color: #7cb62f;
    padding: 10px 20px;
    border: 0;
    font-weight: bold;
    color: #fff;
    margin-bottom: 15px;
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
    margin-bottom: 20px;
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
    margin-bottom: 20px;
}
.services .serv-desc {
    font-size: 16px;
    color: #888;
    margin-bottom: 20px;
}
/* Pour developpement */
.test {
    margin-bottom: 400px;
}
h2{
    font-family: verdana;
  font-size: 300%

}

</style>
<body style="background-color:FloralWhite">
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

  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  </div>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    <div class="row featurette">
    <div class="col-md-2">
    </div>   
      <div class="col-md-7">
        <h2 class="featurette-heading" style="color:blue;font-family:Times">Presentation l'Association de
        développement de la communication 
 
 <span class="text-muted"></span></h2>
 <br><br>
        <p class="lead" style="font-family:cursive ;font-size:180%; color:black">L’association de développement de la communication (ADECO) est une association créée en avril 2015 à Siliana, dans le Nord-Ouest tunisien. L’ADECO œuvre pour le développement du tissu associatif à Siliana et pour une vie citoyenne ouverte à la culture et à la mise en valeur du patrimoine culturel et artistique local. Plus particulièrement, l’ADECO a pour objectif de promouvoir les valeurs citoyennes et le respect des droits de l’Homme dans la région par le biais d’outils de communication adaptés, et d’activités culturelles et artistiques.
  
  L’association considère que la culture offre la possibilité d’atteindre le plus large nombre de bénéficiaires, notamment les jeunes dans un environnement rural. Elle vise donc à offrir à chaque citoyen les moyens d’échanger, d’aller vers l’autre et de mieux cerner et d’agir sur les problèmes rencontrés dans leur environnement social. Pour ce faire, elle visa à renforcer les échanges entre les jeunes afin de leur permettre une meilleure appropriation des valeurs citoyennes et de respect des droits de l’Homme à Siliana.
</p>
      </div>
      <div class="col-md-2">
       
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 ">
        <h2 class="featurette-heading" style="color:black">Les objectifs principaux de l’ADECO sont :
       <span class="text-muted"></span></h2>
       <br><br>
        <p class="lead" style="color:black;font-size:160%;font-family:Times New Roman">-Promouvoir une culture des droits de l’Homme au niveau local, en diffusant les valeurs des droits de l’Homme de manière large sur des supports adaptés,
       </p>

       <p class="lead"style="color:black;font-size:160%;font-family:Times New Roman">-Veiller   au   respect   des   droits   de l’Homme au niveau local et offrir une plateforme d’échanges dans le domaine
       </p>
      </div>
      <div class="col-md-3">
       
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" style="color:black">Au gouvernorat du Kef:
        <span class="text-muted"></span></h2>
        <p class="lead"style="color:black;font-size:160%;font-family:Times New Roman"> -exécution d’un appel à projet sur la démocratisation artistique avec l’ambassade d’Allemagne  (LOOK CLOSE) portant sur l’aménagement d’une salle de cinéma, assuré un cycle de projection cinématographique et l’organisation d’un festival de cinéma « hors sentiers »
</p>
      </div>
      <div class="col-md-5">
        <img src="images/cinema.jpg" class="featurette-image img-responsive center-block">
      </div>
    </div>

    <br>

    <!-- /END THE FEATURETTES -->
   
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading"style="color:black">Au gouvernorat de Siliana:
       <span class="text-muted"></span></h2>
        <p class="lead"style="color:black;font-size:160%;font-family:Times New Roman">- Rassembler   les   jeunes autour de  problématiques citoyennes locales 
Et faire  la  promotion  d’une  citoyenneté
 locale engagée.
 Depuis  sa  création,  ADECO  a  mis  en  place
plusieurs activités, dont :
 - Une formation sur les moyens de lutter
contre les violences faites aux femmes,
 - Une formation sur l’intégration de  
l’approche genre dans les régions,
  - Une formation sur les  outils  de la 
Communication numérique dans le 
monde associatif,
  - Une formation sur la citoyenneté locale
et    la    participation    aux    affaires  
publiques,
 La publication d’un sondage sur les . priorités locales des citoyens par tranche d’âge
</p>
      </div>
      
      <div class="col-md-5 col-md-pull-7">
        <img  src="images/chh.jpg" class="featurette-image img-responsive center-block">
      </div>
    </div>

<br><br><br>


    <!-- FOOTER -->
   

  </div>
  </div>
  </div>
  </div>
  <!-- /.container -->


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
@extends('layouts.footer')