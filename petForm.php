<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>PetForm</title>
</head>

<body>
    <div class="Petformcontain">
        <h2>Booking Form</h2>
        <form action="petForm.php" method="post">
            <label for="ownerName">Owner's Name:</label><br>
            <input type="text" id="ownerName" name="ownerName" required><br><br>

            <label for="petType">Pet Type:</label>
            <select id="petType" name="petType" required onchange="updateBreeds()">
            <option value="">Select Pet Type</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Fish">Fish</option>
            <option value="Reptiles">Reptiles</option>
        </select>
            <label for="breed">Breed:</label>
            <select id="breed" name="breed" required>
            <option value="">Select Breed</option>
        </select>

            <label for="place">Place:</label><br>
            <input type="text" id="place" name="place" list="placeSuggestions" required><br>
            <datalist id="placeSuggestions">
            <option value="New York">
            <option value="Los Angeles">
            <option value="Chicago">
            <option value="Houston">
            <option value="Phoenix">
            <option value="Miami">
            <option value="San Francisco">
            <option value="Las Vegas">
            <option value="Seattle">
            <option value="Boston">
        </datalist><br><br>
            <button type="submit" value="Submit">Sign Up</button>
        </form>
        <?php
// Database connection details
$servername = "localhost";  // Usually "localhost"
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$dbname = "task";    // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if form data is submitted
?>
<script src="./assets/Breed.js"></script>
</div>

</body>

</html>