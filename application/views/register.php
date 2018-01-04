<?php
$webTitle['title'] = 'Register For an Account';
$this->load->view('common/header', $webTitle);
?>

<section class="col-md-6 col-md-offset-3 form">
    <fieldset>
        <legend style="color:#084BE0;">Register For an Account</legend>
        <form action="register.php" method="post">
            <level>Username: </level>
            <input class="inputL" type="text" placeholder="Type your username" name="username" required autofocus><br>
            <level>Password: </level>
            <input class="inputL" type="text" placeholder="Type your password" name="password" required><br>
            <level>Confirm Password: </level>
            <input class="inputL" type="text" placeholder="Retype your password" name="passconf" required><br>
            <level>Email: </level>
            <input class="inputL" type="text" placeholder="Type your email" name="email" required><br><br>
            <input class="inputL" type="submit" class="button" value="Register"><br>
            <a href="login.php">Login</a> | <a href="forgot.php">Forgot Pass</a>
        </form>
    </fieldset>
</section>

<?php $this->load->view('common/footer'); ?>