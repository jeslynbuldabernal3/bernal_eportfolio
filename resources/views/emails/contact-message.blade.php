<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Message</title>
</head>
<body>
    <h2>You have a new contact form message</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <hr>
    <p><strong>Message:</strong></p>
    <p>{{ $body }}</p>
</body>
</html>
