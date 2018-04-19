<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your Email">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="message"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>
    </main>
</body>
</html>