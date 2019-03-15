<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Message Sending Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
    <link rel="icon" type="image/png" href="logo.png"/>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="message-sender-division">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; 
        ?>">
            <h1>Simple Message Sending Application</h1>
            <input type="text" name="phonenumber" class="phonenumber" placeholder="Enter Phone Number" required="required">
            <textarea name="message" class="message" placeholder="Message Topic" rows="4" required="required"></textarea>
            <input type="submit" class="send-message" value="Send message"><br>
            <?php include('message_sender.php') ?>
        </form>
    </div>
</body>
</html>