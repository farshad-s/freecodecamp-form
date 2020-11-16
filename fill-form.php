<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];

  $mailTo = "testingphpform@protonmail.com";
  $headers = "From: ".$mailFrom;

  $subject = "New Form Submission";

  $email_body = "User Name: $name.\n".
                  "User Email: $mailFrom.\n";

  mail($mailTo, $subject, $email_body, $headers);

  header("Location: index.php?mailsend");
}

?>