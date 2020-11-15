<?php 
session_start(); 
?> 

<?php 

include('connect.php'); 

$name= $_POST['name']; 
$pw= $_POST['pw']; 

$query= "select * from the knack shack customer database where name='$name' "; 
$result= mysqli_query($connection, $query); 

$data= mysqli_fetch_assoc($result); 

if(!$name) {
echo "<script> 
       window.alert('Please enter your Name. '); 
        history.back(1); 
        </script> "; 
exit; 
} 

if(!$pw) { 
echo "<script> 
     window.alert('Please enter your password. '); 
     history.back(1); 
     </script> "; 
exit; 
} 

if ($data['name']!=$name) { 
echo"<script> 
     window.alert('No such Name. '); 
     history.back(1); 
     </script>"; 
exit; 
}

if($data['pw']!=$pw){
echo "<script>
     window.alert('No such password. '); 
     history.back(1); 
     </script> "; 
exit; 
} 

$_SESSION['name']=$data['name']; 

mysqli_close($connection); 
?> 
<script> 
location.href='login.html'; 
</script>
