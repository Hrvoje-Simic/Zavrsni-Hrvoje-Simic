<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
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
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        input[type="time"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="navbar" id="myNavbar">
    <a href="form.php" class="oznaceno">Form</a>
    <a href="table.php">Table</a>
    <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">&#9776;</a>
</div>

<div class="container">
    <h2>Formular za rezervaciju</h2>
    <form action="save_reservation.php" method="post">
        <label for="reservationID">ID:</label>
        <input type="number" id="reservationID" name="reservationID" required>
        
        <label for="customerName">Ime:</label>
        <input type="text" id="customerName" name="customerName" required>
        
        <label for="contactNumber">Broj telefona:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="reservationDate">Datunm rezervacije:</label>
        <input type="date" id="reservationDate" name="reservationDate" required>
        
        <label for="reservationTime">Vrijeme rezervacije:</label>
        <input type="time" id="reservationTime" name="reservationTime" required>
        
        <label for="numberOfGuests">Broj gostiju:</label>
        <input type="number" id="numberOfGuests" name="numberOfGuests" required>
        
        <label for="specialRequests">Posebni zahtjev:</label>
        <input type="text" id="specialRequests" name="specialRequests">
        
        <button type="submit">Dodaj rezervaciju </button>
    </form>
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
