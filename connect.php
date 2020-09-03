
    <?php
$Username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password1 = filter_input(INPUT_POST, 'password1');

if (!empty($Username)){
if (!empty($email)){
if (!empty($password)){
if (!empty($password1)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "nature";
$port = 3307;
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname,$port);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (Username,email,password, password1) values ('$Username','$email','$password','$password1')";
if ($conn->query($sql)){
echo "Sucess";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "nature-website.html";
</script>      
    <?php
    }
?>

    
    

