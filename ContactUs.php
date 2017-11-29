<!DOCTYPE html>
<head>
<title>Contact Us</title>
<link rel = "stylesheet" type = "text/css" href = "menu.css">
<link rel = "stylesheet" type = "text/css" href = "Styles/contactus.css">
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<p class = 'f'> CONTACT US</p>
</br>
<hr>
  <form id="contact" action="" method="post">
    <h3>Send us a message</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="subject" placeholder="Subject" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</body>
</html>

<?php


include 'Connection.php';


if(isset ($_POST['Send']))
{
$n = $_POST['name'];

 $eid = $_POST['email'];

 $s = $_POST['subject'];

 $m = $_POST['message'];


$query2 = "INSERT INTO contactus(name, email, subject, message) VALUES('".$n."', '".$eid."', '".$s."', '".$m."')" ;

echo "Message Sucessfully Sended";

mysqli_query($db,$query2)  or die("Failed to load data in database");
mysqli_close($db);
}






?>
