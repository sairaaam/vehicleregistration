<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $ownerName = htmlspecialchars($_POST['ownerName']);
    $ownerEmail = htmlspecialchars($_POST['ownerEmail']);
    $ownerPhone = htmlspecialchars($_POST['ownerPhone']);
    $vehicleMake = htmlspecialchars($_POST['vehicleMake']);
    $vehicleModel = htmlspecialchars($_POST['vehicleModel']);
    $vehicleYear = htmlspecialchars($_POST['vehicleYear']);
    $licensePlate = htmlspecialchars($_POST['licensePlate']);
    $registrationDate = htmlspecialchars($_POST['registrationDate']);
    $features = isset($_POST['features']) ? implode(", ", $_POST['features']) : "None";

    // Display submitted data
    echo "<h3>Vehicle Registration Successful</h3>";
    echo "<h4>Owner Information</h4>";
    echo "<p><strong>Name:</strong> $ownerName</p>";
    echo "<p><strong>Email:</strong> $ownerEmail</p>";
    echo "<p><strong>Phone:</strong> $ownerPhone</p>";

    echo "<h4>Vehicle Information</h4>";
    echo "<p><strong>Make:</strong> $vehicleMake</p>";
    echo "<p><strong>Model:</strong> $vehicleModel</p>";
    echo "<p><strong>Year:</strong> $vehicleYear</p>";
    echo "<p><strong>License Plate:</strong> $licensePlate</p>";
    echo "<p><strong>Additional Features:</strong> $features</p>";
    echo "<p><strong>Date of Registration:</strong> $registrationDate</p>";
}
?>
