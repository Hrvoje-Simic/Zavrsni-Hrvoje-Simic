<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Table</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
        }
        .navbar a {
            padding: 14px 20px;
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .icon {
            display: none;
        }
        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {display: none;}
            .navbar a.icon {
                display: block;
            }
        }
        @media screen and (max-width: 600px) {
            .navbar.responsive {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar.responsive .icon {
                align-self: flex-end;
            }
            .navbar.responsive a {
                display: block;
                text-align: left;
            }
        }
        .container {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .oznaceno{
            background-color: #5A72A0;
        }
    </style>
</head>
<body>

<div class="navbar" id="myNavbar">
    <a href="form.php">Rezervacija</a>
    <a href="table.php" class="oznaceno">Table</a>
    <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">&#9776;</a>
</div>

<div class="container">
    <h2>Tablica Rezervacija</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Broj telefona</th>
            <th>Email</th>
            <th>Datum rezervacije</th>
            <th>Vrijeme rezervacije</th>
            <th>Broj Gostiju</th>
            <th>Posebni Zahtjevi</th>
        </tr>

 
        <?php
        $xmlFile = 'zadatak.xml';
        $xml = simplexml_load_file($xmlFile);

      
        if ($xml === false) {
            echo "<tr><td colspan='8'>XML file is empty or could not be loaded.</td></tr>";
        } else {
           
            foreach ($xml->Reservation as $reservation) {
                echo "<tr>";
                echo "<td>" . $reservation->ReservationID . "</td>";
                echo "<td>" . $reservation->CustomerName . "</td>";
                echo "<td>" . $reservation->ContactNumber . "</td>";
                echo "<td>" . $reservation->Email . "</td>";
                echo "<td>" . $reservation->ReservationDate . "</td>";
                echo "<td>" . $reservation->ReservationTime . "</td>";
                echo "<td>" . $reservation->NumberOfGuests . "</td>";
                echo "<td>" . $reservation->SpecialRequests . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>

<script>
    function toggleNavbar() {
        var x = document.getElementById("myNavbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>

</body>
</html>
