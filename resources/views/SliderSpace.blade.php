<!DOCOTYPE html>
<html>
    <head>
<link rel="stylesheet" href="style.css">
    </head>
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    
}
body{
    font-family: sans-serif;
    height:140vh;
    background-color:#f8f8f869  ;
}
.sliderc
{
    position: relative;
    width: 100%;
    height:50%;
    margin: 0px auto;

    
}
.sliderc img
{
    width: 100%;
    height: 100%;
    position: absolute;
    opacity: 0;
    transition: opacity 1s;
    z-index: 1;

}
.sliderc img.active
{
    opacity: 1;
  
}

.sliderconts
{
    width: 90%;
    margin: auto;
}
.prev,
.next
{
 background-color:transparent;
    color:black;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    padding: 0px;
    margin-top:0px;
    user-select: none;
        font-weight:100;
    text-transform:uppercase;
    letter-spacing:3px;
transition:0.5s ease;
    
}
.prev:hover,
.next:hover
{

text-decoration:underline;
    
}
.prev
{
    float:left ;
    margin-top:20px;
}
.next
{
    float: right;
}
.prev.dis,
.next.dis
{
color: #f8f8f8;
cursor: no-drop;

    
}
.indect
{
    width: 60%;
    float:center;
}
.indect ul
{
list-style: none;
    margin-top: 30px;
    text-align: center;

    
}
.indect ul li
{
display: inline-block;

    color:black;

    height: 28px;
    width: 28px;
 
    margin: 0 2px;
    line-height: 28px;
    cursor: pointer;
}
.indect ul li.active
{
display: inline-block;
    background-color:black;
    color: whitesmoke;
    height: 28px;
    width: 28px;
    margin: 0 2px;
    line-height: 28px;
    cursor: pointer;
       border-radius: 50%;
}
* {
  box-sizing: border-box;
}

body {
 
  
}

@media screen and (min-width: 768px) {
  p {
    font-size: 1.125em;
    max-width: 80%;
    line-height: 1.8;
  }
}

.container {
  max-width: 100%;
  min-width: 300px;
  margin: 0 auto;
 
  padding: 1em 2em;
}

@media screen and (min-width: 768px) {
  .container {
    max-width: 60%;
  }
}

.alignment p {
  color: black;
  
}



.justify {
  text-align: justify;
}

.align-right {
  text-align: right;
}

.match-parent {
  text-align: match-parent;
}

.text-align-last {
  text-align: justify;
  -moz-text-align-last: center;
  text-align-last: center;
}

.p {
  text-align: center;
  font-size: 13px;
}
.button4 {border-radius: 12px;}
.button {
  background-color: #FFC300; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  width:130px;
  margin-left:650px;
 
  
}

/*END : RECOMMENDED ARTICLES*/
    </style>
    <body>
<div class="sliderc">
    @foreach($image as $img)
    <img  src="{{asset('images_espace/'.$img->image_espace)}}" alt="">
   @endforeach
</div>
        
<div class="sliderconts">
    <span id="prev" class="prev">Précédente</span>
    <span id="indect" class="indect">

    </span>
    <span id="next" class="next">Suivante</span>
</div>

<br><br><br><br>
<section class="container">

  <div class="alignment start" >
    <h2 style="font-family : serif ;font-size:30px">{{$space->nom_space}}</h2>
    <p style="font-family : serif;font-size:28px ">
    {{$space->description_space}}
    </p>
    <p style="font-family : serif;font-size:28px ">Qui contient la liste des matériels suivant :</p><br>
    <ul>
        @foreach($materiel as $m)
        <li style="font-family : serif;font-size:28px ;margin-left:20px ">{{$m->nom_m}}</li>
        @endforeach
    </ul>
    <a href="{{route('FormReservation',$space->id)}}" type="button" class="button button4" >Réserver</a>
  </div>


  

</section>
<br><br><br><br>
@extends('layouts.footer')
<script>
    var document, console;
var currentslide = 0;
var imagesslides = Array.from(document.querySelectorAll(".sliderc img"));
var imagescount = imagesslides.length;
var next = document.getElementById("next");
var prev = document.getElementById("prev");
var i;
var indect = document.getElementById("indect");
var ull = document.createElement('ul');
ull.setAttribute('id', 'pagination-ul');
for (i = 1; i <= imagescount; i += 1) {
    var lii = document.createElement('li');
    lii.setAttribute('data-index', i);
    lii.appendChild(document.createTextNode(i));
    ull.appendChild(lii);  
}
indect.appendChild(ull);

var imagesbullet = Array.from(document.querySelectorAll("#pagination-ul li"));

imagesslides[currentslide].classList.add('active');
imagesbullet[currentslide].classList.add('active');
next.onclick = nextslide;
prev.onclick = prevslide;









function nextslide() {

    "use strict";
    if (currentslide == imagescount - 1)
    {
        next.classList.add("dis");
        return false;
        
    }
    else{
             imagesslides[currentslide].classList.remove('active');
             imagesbullet[currentslide].classList.remove('active');
             currentslide++;
             imagesslides[currentslide].classList.add('active');
             imagesbullet[currentslide].classList.add('active');
    }

    console.log(currentslide); 
}


function prevslide(){
if (currentslide == 0) {
            prev.classList.add("dis");
            return false;
        
        } else {
            imagesslides[currentslide].classList.remove('active');
            imagesbullet[currentslide].classList.remove('active');
            currentslide -= 1;
            imagesslides[currentslide].classList.add('active');
            imagesbullet[currentslide].classList.add('active');
        }
}


imagesbullet.forEach(function (bullet){
    "use strict";
    bullet.onclick = function ( ){
            imagesslides[currentslide].classList.remove('active');
                    imagesbullet[currentslide].classList.remove('active');
currentslide = bullet.getAttribute("data-index") - 1;


imagesslides[currentslide].classList.add('active');
imagesbullet[currentslide].classList.add('active');
console.log(currentslide);
    };
});


</script>
    </body>
</html>