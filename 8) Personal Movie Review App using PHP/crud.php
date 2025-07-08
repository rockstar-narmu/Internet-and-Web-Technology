<?php
$conn = new mysqli("localhost", "root", "Rockstar*420", "formDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Operation
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : '';
    $country = $_POST['country'];

    $sql = "INSERT INTO users (name, gender, hobbies, country) VALUES ('$name', '$gender', '$hobbies', '$country')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Update Operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : '';
    $country = $_POST['country'];

    $sql = "UPDATE users SET name='$name', gender='$gender', hobbies='$hobbies', country='$country' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete Operation
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
