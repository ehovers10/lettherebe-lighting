---
layout: default
---

<h2>Thank you for your order!</h2>
<p><img src="../images/thales.gif"></p>
<p>I'll get back to you soon with a quote</p>

<?php

$to = 'ehovers10@gmail.com';
$from = 'erik@lettherebe.lighting';
$replyto = 'erik@lettherebe.lighting';

$subject = 'New lamp submission!';

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $replyto . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<h1>Contact details:</h1>";

$message .= "<p><b>Name:</b> " . $_POST['name'] . "<br/>" .
            "<b>Email:</b> " . $_POST['email'] . "<br/>" .
            "<b>Phone:</b> " . $_POST['phone'] . "<p/>";

$message .= "<h1>Submission details:</h1>";
{% for item in site.data.lamps %}
  $message .= "<p><b>{{ item.name }}:</b> " . $_POST['{{ item.name | append: "-qty" }}'] . "</p>";
{% endfor %}
{% for sect in site.data.construct %}
  $message .= "<h2>{{ sect.id | capitalize }}</h2><p>";
{% for question in sect.elements %}
  $message .= "<b>{{ question.name }}:</b> " . $_POST['{{ question.id }}'] . "<br/>";
{% endfor %}
  $message .= "</p>";
{% endfor %}

mail($to, $subject, $message, $headers);

?>


