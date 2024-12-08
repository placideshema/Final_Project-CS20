<?php
// Create connection
$conn = new mysqli("oheneamankwaahn.sgedu.site.mysql", "u3eymopnjvlvl", "zxiskr5xjjhb", "dbleduyhbuunlf");// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT plan_id, name, description FROM plans";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='plans-container'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='plan'>";
        echo "<div class='plan-name'>" . htmlspecialchars($row["name"]) . "</div>";
        echo "<div class='plan-description'>" . htmlspecialchars($row["description"]) . "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p>No plans available</p>";
}

$conn->close();
?>
