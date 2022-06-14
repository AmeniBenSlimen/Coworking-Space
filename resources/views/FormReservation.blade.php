@extends('layouts.navbar')

<style>
    body {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
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
  


}
</style>
<br><br>
<form action="reservation.php" method="post">
  <div class="elem-group">
    <label for="name">Nom</label>
    <input type="text" id="name" name="nom" value="{{Auth::user()->nom}}" disabled placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="name">Prénom</label>
    <input type="text" id="name" name="prenom" value="{{Auth::user()->prenom}}" disabled placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="name">Télephone</label>
    <input type="text" id="name" name="telephone" value="{{Auth::user()->telephone}}" disabled placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" value="{{Auth::user()->email}}" disabled placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="name">Nom Espace</label>
    <input type="text" id="name" name="nom_space" value="{{$space->nom_space}}" disabled placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <hr>
  
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="date_entre" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="date_sorti" required>
  </div>

  <center><a href="" type="button" class="button button4" >Réserver</a></center>
</form>



<script>
    var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>

