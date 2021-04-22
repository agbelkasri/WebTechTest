<!DOCTYPE html>
<html lang="en-us">

<head>
  
  <title>Crisler Arena Database</title>
  <meta charset="UTF-8">
  <meta name="author" content="Dan Ouellette"/>
  <meta name="description" content="Crisler Arena"/>
  <meta name="keywords" content="arena, events">
  
  <!-- External CSS link -->
  <link rel="stylesheet" type="text/css" 
    href="CrislerArena-ExternalStyles.css">

</head>
 
<body>

  <!-- Header section -->
  <div class="headerPanel">
    <h1>
      Crisler Arena Database Status
    </h1>
  </div>

  <!-- Menu section -->
  <div class="menuPanel">
    <h2>
      <a href="CrislerArena-Arena.html">Arena Page</a>
      <a href="CrislerArena-Events.html">Events Page</a>
      <a href="CrislerArena-Tickets.html">Tickets Page</a>
    </h2>
  </div>
  <hr>
  
  <!-- Left panel -->
  <div class="contentPanel3">


    
    <p>
      See you soon at our arena!
      Here are your ticket details:
    </p>
    <?php

      $servername = "DatabaseBuild";
      $username = "root";
      $password = "mysql";
      $conn = new mysqli($servername, $username, $password);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      $sql = "INSERT INTO tbTickets (Name, Event, EventDate, Tickets, Total)
      VALUES ($_GET["txtCustomerName"], $_GET["cmbEvent"], $_GET["txtDate"], $_GET["txtTickets"], $_GET["txtTotal"])";

      // Customer name and e-mail
      echo "<label>Customer name:</label>";
      echo "<label>", $_GET["txtCustomerName"], "</label>";
      echo "<br>";
      echo "<label>Customer e-mail:</label>";
      echo "<label>", $_GET["txtCustomerEmail"], "</label>";
      echo "<br>";

      // Event name and date
      echo "<label>Event:</label>";
      echo "<label>", $_GET["cmbEvent"], "</label>";
      echo "<br>";
      echo "<label>Date:</label>";
      echo "<label>", $_GET["txtDate"], "</label>";
      echo "<br>";

      // Seat type
      echo "<label>Seat type:</label>";
      echo "<label>", $_GET["rgSeatType"], "</label>";
      echo "<br>";

      // Ticket count
      echo "<label>Ticket count:</label>";
      echo "<label>", $_GET["txtTickets"], "</label>";
      echo "<br>";

      // Costs
      echo "<label>Seat cost ($):</label>";
      echo "<label>", $_GET["txtSeatCost"], "</label>";
      echo "<br>";
      echo "<label>Subtotal ($):</label>";
      echo "<label>", $_GET["txtSubtotal"], "</label>";
      echo "<br>";
      echo "<label>Tax ($):</label>";
      echo "<label>", $_GET["txtTax"], "</label>";
      echo "<br>";
      echo "<label>Total ($):</label>";
      echo "<label>", $_GET["txtTotal"], "</label>";
      echo "<br>";

      // Payment type fieldset
      echo "<label>Payment type:</label>";
      echo "<label>", $_GET["rbPaymentType"], "</label>";
      echo "<br><br>";
  
      // File write
      echo "Administrative Use Only<br>";
      $sale =
        $_GET["txtCustomerName"] . "\n" .
        $_GET["txtCustomerEmail"] . "\n" .
        $_GET["cmbEvent"] . "\n" .
        $_GET["txtDate"] . "\n" .
        $_GET["rgSeatType"] . "\n" .
        $_GET["txtTickets"] . "\n" .
        $_GET["txtSeatCost"] . "\n" .
        $_GET["txtSubtotal"] . "\n" .
        $_GET["txtTax"] . "\n" .
        $_GET["txtTotal"] . "\n" .
        $_GET["rbPaymentType"];
      $file = $_GET["txtCustomerName"] . ".sale";
      file_put_contents($file, $sale);
      echo "File " . $file . " written to server.";

    ?>
    <br>

  </div>

  <!-- Right panel -->
  <div class="contentPanel3">
  
    <!-- Arena seating chart -->
    <img 
      src="CrislerArenaSeatingChart.png" alt="Image Missing!" 
      width="70%" height="70%"
      />

  </div>

  <!-- Footer section -->
  <div class="footerPanel">
    <h3>
      Crisler Arena
      &nbsp;&nbsp;333 East Stadium Blvd, Ann Arbor, MI 48109, MI
      &nbsp;&nbsp;734-761-3355
      &nbsp;&nbsp;<a href="mailto:info@crislerarena-annarbor.com">Email Us!</a>
      &nbsp;&nbsp;Copyright &#169; 2021
    </h3>
  </div>
  
</body>
 
</html>
