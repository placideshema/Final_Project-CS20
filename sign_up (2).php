<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if (
        isset($_POST["firstname"]) &&
        isset($_POST["lastname"]) &&
        isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["plan"])
    ) {
        // Get form data
        $firstname = trim($_POST["firstname"]);
        $lastname = trim($_POST["lastname"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $plan = intval($_POST["plan"]);
        
        // Database credentials
        $db_host = "127.0.0.1";
        $db_user = "u3eymopnjvlvl";
        $db_pass = "zxiskr5xjjhb";
        $db_name = "dbleduyhbuunlf";

        // Connect to the database
        $mydb = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Check connection
        if ($mydb->connect_errno) {
            http_response_code(500);
            echo json_encode(["success" => false, "message" => "Failed to connect to the database."]);
            exit();
        }

        // Check if the email is already registered
        $email_query = "SELECT email FROM clients WHERE email = ?";
        $stmt = $mydb->prepare($email_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Email is already in use."]);
            $stmt->close();
            $mydb->close();
            exit();
        }
        $stmt->close();

        // Insert the new client into the database
        $insert_query = "INSERT INTO clients (firstName, lastName, email, plan_id, password) 
                         VALUES (?, ?, ?, ?, ?)";
        $stmt = $mydb->prepare($insert_query);
        $stmt->bind_param("sssds", $firstname, $lastname, $email, $plan, $password);

        if ($stmt->execute()) {
            http_response_code(201);
            echo json_encode(["success" => true, "message" => "Account created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["success" => false, "message" => "Failed to create account."]);
        }

        // Close statement and database connection
        $stmt->close();
        $mydb->close();
    } else {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Invalid input."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}
?>
