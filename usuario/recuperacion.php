<?php
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
if (isset($_POST['submit']))
{

// checks if the username is in use
 $user_check_query = "SELECT correo FROM user_register WHERE correo='$correo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

//if the name exists it gives an error
if ($user == 0) {
$error[] = 'Sorry, we cannot find your account details please try another email address.';
}

// if no errors then carry on
if (!$error) {


//create a new random password

$password = "Ma12345" .substr(md5(uniqid(rand(),1)),3,10);
$pass = md5($password); //encrypted version for database entry

//send email
$to = "$correo";
$subject = "Account Details Recovery";
$body = "Hi $correo,you or someone else have requested your account details. Here is your account information please keep this as you may need this at a later stage. nnYour email is $correo and your password is $password nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
$additionalheaders = "From: <roberto@mandrapro.com>rn";
$additionalheaders .= "Reply-To: roberto@mandrapro.com";
mail($to, $subject, $body, $additionalheaders);

//update database
$user_check_query = "UPDATE user_register SET password='$pass' WHERE correo = '$correo'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
    $rsent = true;


}// close errors
}// close if form sent

//show any errors
if (!empty($error))
{
        $i = 0;
        while ($i < count($error)){
        echo "<div class='msg-error'>".$error[$i]."</div>";
        $i ++;}
}// close if empty errors


if ($rsent == true){
    echo "<p>You have been sent an email with your account details to $correo</p>n";
    } else {
    echo "<p>Please enter your e-mail address. You will receive a new password via e-mail.</p>n";
    }

?>
