<h2>Hey !</h2> <br><br>

Vous avez reçu un e-mail de : {{ $contacter['name'] }} <br><br>

Détails de l'utilisateur: <br><br>

Nom:  {{ $contacter['name']  }}<br>
Email:  {{ $contacter['email']  }}<br>
Numéro de téléphone:  {{ $contacter['phone']  }}<br>
Sujet:  {{ $contacter['subject']  }}<br>
Message:  {!! $contacter['message'] !!}<br><br>

Merci...