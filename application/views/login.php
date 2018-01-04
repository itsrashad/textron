<?php

$webTitle['title'] = 'Login To Your Dashboard';
$this->load->view('common/header', $webTitle);
?>

<section class="col-md-6 col-md-offset-3 form">
    <fieldset>
        <legend style="color:#084BE0;">Login To Your DashBoard</legend>
        <form action="login.php" method="post">
            <level>Username: </level>
            <input class="inputL" type="text" placeholder="Type your username" name="username" required autofocus><br>
            <level>Password: </level>
            <input class="inputL" type="text" placeholder="Type your password" name="password" required><br><br>
            <input class="inputL" type="submit" class="button"value="login"><br>
            <a href="<?php echo site_url('main/NewReg');?>">Register</a> | <a href="<?php echo site_url('');?>">Forgot Pass</a>
        </form>
    </fieldset>
</section>

<?php $this->load->view('common/footer'); ?>