<h4> Welcome <?php echo $user->firstname;?> to your blog!</h4>
Please reset password by using the link below:<br><br>
<a href="{{URL::to('password/reset/'.$token)}}">{{URL::to('password/reset/'.$token)}}</a>