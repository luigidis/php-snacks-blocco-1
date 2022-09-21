<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$name_ok = strlen($name);
$email_ok = strpos($email, '@');
$dot_ok = strpos($email, '.');
$age_ok = is_numeric($age);

var_dump($name, $email, $age);
var_dump($name_ok, $email_ok, $dot_ok, $age_ok);

?>


<?php
    if (($name_ok > 3) && $email_ok && $dot_ok && $age_ok) {
?>
    <div>Accesso riuscito</div>
<?php  } 
    else {
?> 
        <div>Accesso non riuscito</div>
<?php       
    }
?>



