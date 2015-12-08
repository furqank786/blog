<h4> Welcome <?php echo $user->firstname;?> to your blog!</h4>
Please enter your verification code in the form to activate your account by using the link below:<br>
<a href="http://localhost/blog/public/users/activateaccount">http://localhost/blog/public/users/activateaccount</a><br>
Your code is: <?php echo $user->activation_code;?>
