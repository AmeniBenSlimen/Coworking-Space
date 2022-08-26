

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
.container .nav{
    position: fixed;
    top: 0;   left: 0;
    height: 80px;   width: 100%;  
    z-index: 5;
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    padding: 0 110px;
    transition: .9s;
}
.container .nav.active{
    height: 60px;   
    padding: 0 70px;
    background: #262626;
}

/************** .nav img h1 *******************/
.container .nav img{
    position: relative;
    width: 80px;  height: 80px;
    background: transparent;  
    float: left;
    transition: .9s;
}
.container .nav.active img{
    width: 60px;  height: 60px;
}
.container .nav h1{
    float: right;
    display: none;
}
/************** .nav .menu  *******************/
.container .nav ul.menu{
    position: relative;
    float: right;
    top: 25%;
}
.container .nav.active ul.menu{
    top: 0;
}
.container .nav ul.menu li{
    list-style: none;
    float: left;
}
.container .nav ul.menu li a{
    position: relative;
    display: inline-block;
    color: #fff;
    text-decoration: none;  text-transform: uppercase;
    padding: 10px 30px;
    box-sizing: border-box;
}
.container .nav ul.menu li:hover a,.container .nav ul.menu li a.color{
    background: #FFC300;
}
.container .nav.active ul.menu li a{
    padding: 0 25px; 
    height: 60px;
    line-height: 60px;
}

/*********** Media Queries******************/
@media screen and (max-width: 934px) { 
    .container .nav,.container .nav.active{
        height: auto;   
        padding: 10px 30px;
        background: #795548;
    }
    .container .nav img,.container .nav.active img{
        width: 60px;  height: 60px;
        float: left;
    }
    .container .nav h1{
        float: right;
        display: block;
        top: 10px;
        position: relative;
        cursor: pointer;
    }  
    .container .nav ul.menu,.container .nav.active ul.menu{
        clear: both;
        margin-top: 70px; 
        float: none;
        top: 0;
        width: 100%;
        text-align: center;
        display: none;
    }  
    .container .nav ul.menu.display,.container .nav.active ul.menu.display{
        display: block; 
    }
    .container .nav ul.menu li{
        list-style: none;
        float: none;
        width: 100%;
    }
    .container .nav ul.menu li a,.container .nav.active ul.menu li a{
        width: 100%;
        line-height: 40px;
        padding: 0;
        height: auto;
     }
     *******************************************************************************************
     .super {
  position: relative;

  overflow: hidden;

  max-width: 720px;
  margin: 0 auto;
  margin-bottom: 48px;
  padding: 48px 32px;

  text-align: center;

  color: white;
  border-radius: 2px;
  background-color: #564D80;
  box-shadow: 0 4px 32px hsla(0,0%,0%,0.1);
  
  @media (min-width: 480px) {
    padding-left: 48px;
    padding-right: 48px;
  }
  
  @media (min-width: 640px) {
    display: flex;

    text-align: left;

    align-items: center;
  }
}

.super::before {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  content: '';

  background-image: linear-gradient(to bottom right, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.5));

  mix-blend-mode: overlay;
}

.super--light {
  color: black;
  background-color: white;
}

.super__body {
  position: relative;

  flex-grow: 1;
}

.super__actions {
  position: relative;
  
  &:first-child {
    margin-bottom: 32px;
    
    @media (min-width: 640px) {
      margin-right: 32px;
      margin-bottom: 0;
    }
  }
  
  &:last-child {
    margin-top: 32px;
    
    @media (min-width: 640px) {
      margin-top: 0;
      margin-left: 32px;
    }
  }
}

.super__media {
  position: relative;

  flex-grow: 1;
  flex-shrink: 0;
  
  @media (min-width: 640px) {
    width: 45%;
  }
  
  &:first-child {
    margin-bottom: 48px;
    
    @media (min-width: 640px) {
      margin-right: 48px;
      margin-bottom: 0;
    }
  }
  
  &:last-child {
    margin-top: 48px;
    
    @media (min-width: 640px) {
      margin-top: 0;
      margin-left: 48px;
    }
  }
}

.super__media > img {
  vertical-align: top;
  
  @media (min-width: 480px) {
    width: 75%;
  }
  
  @media (min-width: 640px) {
    width: 100%;
  }
}

.super__title {
  margin: 0;

  font-size: 24px;
  line-height: 1.25;
}

.super__summary {
  margin-top: 16px;
  margin-bottom: 0;

  opacity: 0.75;

  font-size: 14px;
  line-height: 1.5;
}

.super__summary + .button {
  margin-top: 32px;
}



.button {
  display: inline-block;

  padding: 0 24px;

  white-space: nowrap;
  text-decoration: none;
  letter-spacing: 0.025em;
  text-transform: uppercase;

  color: white;
  border-radius: 2px;
  background-color: #FF2693;
  text-shadow: 0 1px 0 hsla(0,0%,0%,0.1);

  font-size: 14px;
  font-weight: bold;
  line-height: 48px;
}

body {
  padding: 24px;

  font-family: 'Roboto', sans-serif;

  -webkit-font-smoothing: antialiased;
}

img {
  max-width: 100%;
}

* {
  box-sizing: border-box;
}
}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
            

 <div class="container">
            <div class="nav">
            
            <img src="public/images/adeco-2.jpg" style="width:80px" height="100px">

                  
                  <ul class="menu" style="margin-left:400px">
                     <li><a href="{{ url('/') }}">Home</a></li> 
                    
                     <li><a href="#">About</a></li> 
                     <li><a href="{{route('viewProjet')}}">Projet</a></li> 
                     <li><a href="{{route('viewEquipe')}}">Equipe</a></li> 
                     <li><a href="{{route('Contacter')}}">Contacter</a></li>
                     @if (Route::has('login'))
                     @auth
                     @if (Auth::user()->role=== 'admin')
                     <li><a href="{{ url('/admin') }}">Espace {{Auth::user()->role}}</a></li>
                     @endif
                     @if (Auth::user()->role=== 'technicien')
                     <li><a href="{{ url('/espaceTechnicien') }}">Espace {{Auth::user()->role}}</a></li>
                     @endif
                     @if (Auth::user()->role=== 'client')
                     <li><a href="{{ url('/home') }}">Espace {{Auth::user()->role}}</a></li>
                     @endif
                     @else
                     <li><a href="{{ route('login')}}">login</a></li> 
                     @if (Route::has('register'))
                     <li><a href="{{ route('register')}}">Crée un Compte</a></li>
                     @endif
                     @endif
                    @endauth
    
                  </ul>                        
            </div>
            
            
           
           @extends('SliderSpace')
           
         
         
         </div>


      
     
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
