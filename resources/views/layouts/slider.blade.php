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
  <!-- /.carousel -->
  <section class="sections about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">About US</h2>
                <div class="line"><span></span></div>
               
            </div>
            <br><br>
            <div class="class-row">
                <div class="col-md-6">
                    <div class="about-info">
                        <h3>bienvenue au   <span style="color:#ff5722">association de développement de la communication</span> (ADECO)</h3>
                        <p class="about-info-desc">
                        L’association de développement de la communication (ADECO) est une association créée en avril 2015 à Siliana, dans le Nord-Ouest tunisien. L’ADECO œuvre pour le développement du tissu associatif à Siliana et pour une vie citoyenne ouverte à la culture et à la mise en valeur du patrimoine culturel et artistique local. Plus particulièrement, l’ADECO a pour objectif de promouvoir les valeurs citoyennes et le respect des droits de l’Homme dans la région par le biais d’outils de communication adaptés, et d’activités culturelles et artistiques.

                        </p>
                        <a class="about-info-btn" style="background-color:#ff5722" href="{{route('Association')}}">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="images/assoc.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>

    <br>

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
   

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