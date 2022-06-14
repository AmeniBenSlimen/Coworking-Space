<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  *, *:after, *:before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}



a{
text-decoration:none;
outline:none !important;
color:#fff;
}

.border-shape {
background: #ffbe00 none repeat scroll 0 0;
color: #fff;
display: block;
height: 3px;
left: 0;
margin: 20px auto;
position: relative;
right: 0;
text-align: center;
top: 0;
width: 80px;
}

.border-shape::before {
background: #ffbe00 none repeat scroll 0 0;
bottom: 0;
content: "";
height: 1px;
left: 80px;
margin: 0 auto;
position: absolute;
text-align: center;
top: 1px;
width: 100px;
}

.border-shape::after {
background: #ffbe00 none repeat scroll 0 0;
bottom: 0;
content: "";
height: 1px;
margin: 0 auto;
position: absolute;
right: 80px;
text-align: center;
top: 1px;
width: 100px;
}











/*FOOTER*/
footer{
width:100%;
background-color:#121619;
color:#fff;
}

.top_header{
padding:2rem;
display:flex;
align-items:center;
justify-content:center;
position:relative;
}

.top_header section{
display:flex;
align-items:center;
justify-content:center;
width:100%;
}

.top_header span{
padding:0 1rem;
}

.top_header .fa{
color:#ffbe00;
font-size:35px;
}

footer .border-shape {
width: 40%;
}

footer .border-shape::before {
width: 100%;
left:120px;
}

footer .border-shape::after {
width: 100%;
right:120px;
}

footer .bottom_content section{
padding:1.5rem 2rem;
display:flex;
align-items:center;
justify-content:Center;
}

.bottom_content a{
margin:0 20px;
color:rgba(255,255,255,0.7);
transition:0.5s;
}

.bottom_content a:hover{
color:rgba(255,255,255,1);
}


.copyright{
padding:0.8em 0;
background-color:#1e1e1e;
text-align:center;
color:rgba(255,255,255,0.7);
font-size:12px;
}



@media (max-width:820px){
.top_header{
padding:1rem;
display:block;
}

.top_header section{
margin:40px 0;
align-items:left;
justify-content:left;
}
footer .bottom_content section{
padding:1rem;
display:block;
}
footer .bottom_content section a{
padding:1rem;
font-size:12px;
margin:0 5px;
display:inline-block;
}
}


    /* This pen is using external base CSS stylesheet(s) in the CSS Settings */

/* Sticky footer */

html {
	block-size: 100%;
}

body {
	min-block-size: 100%;
	display: flex;
	flex-direction: column;
}

body > main {
	flex-grow: 1;
}

body > header {
	flex-shrink: 0;
}

/* Presentational styles */

* {
	margin: 0;
}

main{
	text-align: center;
}

:is(main) > * {
	margin-inline: auto;
}

main > * + * {
	margin-block-start: 1.5rem;
}

header,
main{
	padding: var(--padding-xl);
}

header {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	column-gap: var(--s-600);
	row-gap: var(--s-400);
	background-color: var(--c-bg-2);
}



nav ul {
	display: flex;
	flex-wrap: wrap;
	column-gap: var(--s-600);
	row-gap: var(--s-400);
}


span.italic {
  font-style: italic;
  font-size: 50px;
  margin-bottom:10px;
}
.hidden{
  display: none;
}



@import url(https://fonts.googleapis.com/css?family=Istok+Web);
</style>


<main>
	<h1>Sticky footer with Flexbox</h1>

	<blockquote cite="https://developer.mozilla.org/en-US/docs/Web/CSS/Layout_cookbook/Sticky_footers">
    <div class="hidden">
  

    <span class="italic" style="font-family : serif;font-size:25px;color:black">Chez COWGROW, nous prônons la flexibilité et la proactivité dans tout ce que nous entreprenons. Nos offres peuvent être personnalisées en fonction des besoins et du budget.

Conçus pour favoriser la productivité et optimiser les performances, nos espaces de travail permettent d’échanger, de prospérer et d’inspirer. Sécurisés et accessibles 24/7, nos espaces sont dotés de lumière naturelle favorable à votre épanouissement personnel, ils sont logés dans un immeuble haut standing au cœur d’un quartier d’affaires renommé.

Workzone, c’est également des événements organisés. Formation, workshop ou séminaire, il se passe toujours quelque chose à Workzone !</span>
</div>	
</blockquote>
</main>
<main>

<br><br><br><br>

<footer>
<div class="top_header">
<section>
<span><i class="fa fa-map-marker" style="color:#FFC300"></i></span>
<span>Street, full address, state/province, country, pincode</span>
</section>
<section>
<span><i class="fa fa-phone" style="color:#FFC300"></i></span>
<span>(00) 0000 0000</span>
</section>
<section>
<span><i class="fa fa-envelope" style="color:#FFC300"></i></span>
<span>info@websitename.com</span>
</section>
</div>
<span class="border-shape" style="color:#FFC300"></span>
<div class="bottom_content">
<section>
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-telegram"></i></a>
</section>
<section>
<a href="#">Home</a>
<a href="#">About us</a>
<a href="#">Order</a>
<a href="#">Retail</a>
<a href="#">Member</a>
<a href="#">Contact Us</a>
</section>
</div>
<div class="copyright">
Copyright © 2021 websitename - All rights reserved 
</div>
</footer>
<script>
    $(document).ready(function () {
    $('div.hidden').fadeIn(1500).removeClass('hidden');
});
</script>