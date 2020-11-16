<?php 
include('connect.php'); 

$name = $_POST['name'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$memo = $_POST['memo'];

$query= "insert into the knack shack customer database(name, pw, email, memo)
       values('$name','$pw', '$email', '$memo') "; 

mysqli_query($connection, $query); 
mysqli_close($connection);
?>

<script> 
location.href='hompage.html'; 
</script>
