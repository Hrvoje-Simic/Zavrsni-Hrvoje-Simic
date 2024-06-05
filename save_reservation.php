<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f3f3;
        }
        .container {
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Rezervacija odrađena!</h2>
    <a href="form.php" class="button">Nazad na formular</a>
    <a href="table.php" class="button">Tablica rezervacija</a>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $xmlFile = 'zadatak.xml';
    if (!file_exists($xmlFile)) {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><RestaurantReservation></RestaurantReservation>');
    } else {
        $xml = simplexml_load_file($xmlFile);
    }

    // Create a new reservation node
    $reservation = $xml->addChild('Reservation');
    $reservation->addChild('ReservationID', $_POST['reservationID']);
    $reservation->addChild('CustomerName', $_POST['customerName']);
    $reservation->addChild('ContactNumber', $_POST['contactNumber']);
    $reservation->addChild('Email', $_POST['email']);
    $reservation->addChild('ReservationDate', $_POST['reservationDate']);
    $reservation->addChild('ReservationTime', $_POST['reservationTime']);
    $reservation->addChild('NumberOfGuests', $_POST['numberOfGuests']);
    $reservation->addChild('SpecialRequests', $_POST['specialRequests']);

    // Save the XML file
    $xml->asXML($xmlFile);

    
    exit();
}
?>
