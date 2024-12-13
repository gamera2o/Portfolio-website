<?php
if (isset($_GET['temperature']) && isset($_GET['humidity'])) {
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    // Log data (Optional)
    file_put_contents("data_log.txt", "Temp: $temperature, Humidity: $humidity\n", FILE_APPEND);

    // Response
    echo "Data Received: Temperature = $temperature, Humidity = $humidity";
} else {
    echo "No Data Received";
}
?>
