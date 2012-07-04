<div class="span12">
    <br>


    <?php if (@$user_profile): ?>
        <div>Hi <?php echo $user_profile['name'] ?>
        <a href="<?php echo $logout_url ?>">Logout</a></div>
    <?php else: ?>
    <div class="fb-login-button" data-scope="email,publish_stream" data-show-faces="false" data-width="200"
         data-max-rows="1"></div>
    <?php endif; ?>

    <p> If you can see your name above then it means your app has been configured properly. If you do not see your name
        here then you should check at following places</p>
    <ul>
        <li>If you still see the login button, you need to click it and authorize the app.</li>
        <li>Have you updated the AppId and AppSecret in the config/facebook.php file ?</li>
        <li>Have you updated the AppId in the default layout file ?</li>
        <li>Have you configured the Facebook app properly?</li>
        <li>Have you authorized the app with your Facbook account?</li>
    </ul>

</div>
