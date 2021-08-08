<?php
$conn = mysqli_connect("localhost", "root", "", "lsoa") or die("Connection Error: " . mysqli_error($conn));
$Name = $_POST["t1"];
$Email = $_POST["t2"];
$Age = $_POST["t3"];
$Courses = $_POST["t4"];
$Phone = $_POST["t5"];
mysqli_query($conn, "INSERT INTO reg (Name, Email,Age,Courses,Phone) VALUES ('" . $Name. "', '" . $Email. "','" . $Age. "','" . $Courses. "','" . $Phone. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your registration is successful.";
echo $message;
}
?>