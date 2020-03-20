<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
</head>
<body>

<?php if (isset($_POST['submit'])): ?> 

    <p>Thank you for your time, <?php echo $_POST['name']. Your form has been submitted and I will be in touch soon. </p>
    <form action="contact-form.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="inputMessage">Message:</label>
            <input type="text" name="message" id="inputMessage">
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
