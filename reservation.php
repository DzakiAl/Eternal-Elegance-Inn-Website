<?php
include("database.php");

if (isset($_POST["submit"])) {
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_VALIDATE_INT);
    $check_in = filter_var($_POST["checkin"], FILTER_SANITIZE_STRING);
    $check_out = filter_var($_POST["checkout"], FILTER_SANITIZE_STRING);
    $room_type = filter_var($_POST["room-type"], FILTER_SANITIZE_STRING);

    // Assuming you have a valid database connection in the included "database.php" file
    $query = "INSERT INTO room_order (first_name, last_name, email, phone_number, check_in, check_out, room_type) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssssss", $fname, $lname, $email, $phone, $check_in, $check_out, $room_type);

    if ($stmt->execute()) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/reservation.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap');
    </style>
</head>
<body>
    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            const content = document.querySelector('.content');
            const scrollPos = window.scrollY;

            // change opacity of navbar when scroll position on class named content
            if (scrollPos > content.offsetTop - navbar.clientHeight) {
                navbar.style.opacity = '1';
            } else {
                navbar.style.opacity = '0.8';
            }
        });
    </script>
    <nav class="navbar">
        <h1>Eternal Elegance Inn</h1>
        <div class="menu">
            <a href="index.html">HOME</a>
            <a href="accommodation.html">ACCOMMODATION</a>
            <a href="dining&bar.html">DINING & BAR</a>
            <a href="reservation.php">RESERVATION</a>
        </div>
    </nav>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" align="center">
            <h1>Reservation</h1>
            <input type="text" name="fname" placeholder="First name" class="name">
            <input type="text" name="lname" placeholder="Last name" class="name"><br>
            <input type="email" name="email" placeholder="Enter your email" class="input"><br>
            <input type="number" name="phone" placeholder="Enter your phone number" class="input"><br>
            <p class="date-title">Check in:</p>
            <input type="date" name="checkin" class="input"><br>
            <p class="date-title">Check out:</p>
            <input type="date" name="checkout" class="input"><br>
            <p class="room-type">Room Type</p>
            <input type="radio" name="room-type" value="Basic Suite"><label>Basic Suite</label>
            <input type="radio" name="room-type" value="Executive Suite"><label>Executive Suite</label><br>
            <input type="radio" name="room-type" value="Presidential Suite"><label>Presidential Suite</label>
            <input type="radio" name="room-type" value="Penthouse Suite"><label>Penthouse Suite</label><br>
            <input type="submit" name="submit" value="Submit" class="button">
        </form>
        <footer>
            <div class="link">
                <p class="copyright">Eternal Elegance Inn &copy; 2023</p>
                <a class="link2" href="">Facebook</a>
                <a class="link2" href="" style="margin-left: 3vw; margin-right: 3vw;">Instagram</a>
                <a class="link2" href="">Twitter</a>
            </div>
        </footer>
    </div>
</body>
</html>