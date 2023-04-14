<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <link href="css/home.css" rel="stylesheet" type="text/css" />

    <link
      rel="shortcut icon"
      type="image/jpg"
      href="./Assets/Logo/GridLockLogo.svg"
    />

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script src="js/html-includer.js"></script>

    <title>GridLock Offline Traffic Simulator</title>
  </head>

  <body>
    <header>
      <div w3-include-html="Html_Components/mainMenu.html"></div>

      <div>
        <img src="" alt="" />

        <div>
          <h1>GRIDLOCK</h1>
          <h2>TRAFFIC SIMULATOR</h2>
        </div>
      </div>

      <nav id="mapMenuOptions"></nav>
    </header>

    <section>
      <div>
        <h3>Select a Map</h3>
        <hr />
      </div>

      <button type="button">CUSTOM MAP</button>

      <div id="mapOptions"></div>
    </section>

    <script>
      includeHTML();
    </script>
  </body>
</html>
