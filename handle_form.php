<?php
if (isset($_POST)){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']); // XSS-Schutz
}

echo "Name: " . $name;
echo "Email: " . $email;