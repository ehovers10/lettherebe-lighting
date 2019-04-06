---
---

<?php

$to = 'ehovers10@gmail.com';
$from = 'ehovers10@gmail.com';
$replyto = 'ehovers10@gmail.com';

$subject = 'New lamp submission!';

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $replyto . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "Submission details: \r\n";
{% for sect in site.data.construct %}
  $message .= "{{ sect[0] }}\r\n";
{% for question in sect[1] %}
  $message .= "{{ question.name }}: " . $_POST['{{ question.id }}'] . "\r\n";
{% endfor %}
{% endfor %}

mail($to, $subject, $message, $headers);

?>
