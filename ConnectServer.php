<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentRecord";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Example query
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "<br><br>" ."ID: " . $row["StudentID"]. "<br>"
        ."First Name: " . $row["FirstName"]. "<br>" 
        ."Middle Name: " . $row["MiddleName"]. "<br>" 
        ."Last Name: " . $row["LastName"]. "<br>" 
        ."Birthday: " . $row["DateOfBirth"]. "<br>" 
        ."Address: " . $row["Address"]. "<br>" 
        ."Email: " . $row["Email"]. "<br>"
        ."Phone: " . $row["Phone"];
    }
    // echo "<br><br>" 
    //     ."     ID:            |"
    //     ."     First Name:    |"
    //     ."     Middle Name:   |" 
    //     ."     Last Name:     |"
    //     ."     Birthday:      |"
    //     ."     Address:       |"
    //     ."     Email:         |"
    //     ."     Phone:         |";
    // while ($row = $result->fetch_assoc()) {
    //     echo "<br><br>"  
    //     .$row["StudentID"]
    //     .$row["FirstName"]. "<br>" 
    //     .$row["MiddleName"]. "<br>" 
    //     .$row["LastName"]. "<br>" 
    //     .$row["DateOfBirth"]. "<br>" 
    //     .$row["Address"]. "<br>" 
    //     .$row["Email"]. "<br>"
    //     .$row["Phone"];
    // }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>