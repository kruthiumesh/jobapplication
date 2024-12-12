<?php
// submit.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $resume = $_FILES['resume']['name'];

    // Save the file (optional)
    if ($resume) {
        move_uploaded_file($_FILES['resume']['tmp_name'], "uploads/" . $resume);
    }

    echo "<div style='padding: 20px; background: #f4f4f9; border: 1px solid #ccc; margin: 20px auto; max-width: 600px;'>";
    echo "<h3>Application Submitted Successfully!</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Resume:</strong> $resume</p>";
    echo "</div>";
}
?>