<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "your-email@example.com"; // Replace with your email address
  $subject = "New Form Submission";
  
  // Retrieve form data
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $courseCategory = $_POST['course-category'];
  $courseChoice = $_POST['course-choice'];
  
  // Compose the email body
  $message = "First Name: " . $firstName . "\n";
  $message .= "Last Name: " . $lastName . "\n";
  $message .= "Email: " . $email . "\n";
  $message .= "Password: " . $password . "\n";
  $message .= "Gender: " . $gender . "\n";
  $message .= "Age: " . $age . "\n";
  $message .= "Country: " . $country . "\n";
  $message .= "City: " . $city . "\n";
  $message .= "Course Category: " . $courseCategory . "\n";
  $message .= "Choice of Course: " . $courseChoice . "\n";
  
  // Send the email
  $headers = "From: " . $email;
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you! Your form has been submitted.";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
