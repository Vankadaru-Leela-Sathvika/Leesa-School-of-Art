<?php
$conn = mysqli_connect("localhost", "root", "", "lsoa") or die("Connection Error: " . mysqli_error($conn));
$name = $_POST["userName"];
$email = $_POST["userEmail"];
$subject = $_POST["subject"];
mysqli_query($conn, "INSERT INTO contact (user_name, user_email,subject) VALUES ('" . $name. "', '" . $email. "','" . $subject. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your message has been successfully sent.";
echo $message;
}
?>