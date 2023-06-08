<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Store form data in an array
    $formData = array(
        'Name' => $name,
        'Phone' => $phone,
        'Email' => $email,
        'Message' => $message
    );

    // Convert array to JSON format
    $jsonData = json_encode($formData);

    // Save form data to a file
    $file = 'form_data.json';
    file_put_contents($file, $jsonData);

    // Display success message
    echo "Form data submitted successfully!";

    // Accessing and displaying the form data from the file
    $fileData = file_get_contents($file);
    $formData = json_decode($fileData, true);

    echo "Name: " . $formData['Name'] . "<br>";
    echo "Phone: " . $formData['Phone'] . "<br>";
    echo "Email: " . $formData['Email'] . "<br>";
    echo "Message: " . $formData['Message'] . "<br>";
}
?>