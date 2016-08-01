{% include "./common/header.tpl" %}

<section class="no-pad login-page fullscreen-element">
			
        <div class="background-image-holder">
                <img src="/img/blur2.jpg" class="background-image" alt="Poster Image For Mobiles">
        </div>

        <div class="container align-vertical">
                <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                               <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                                <h1 class="text-white">Login to continue</h1>
                                <div class="photo-form-wrapper clearfix">
                                         <form id="loginForm" method="post" action="/ajax/login">
                                                <input class="form-email" placeholder="Email Address" id="email" name="email" type="text">
                                                <input class="form-password" placeholder="Password" id="password" name="password" type="password">
                                                <input class="login-btn btn-filled" value="Login" id="subButtonLogIn" type="submit">
                                        </form>
                                </div>
                                <a href="/signup" class="text-white">Create an account ➞</a><br>
                                <a href="#" class="text-white">I've forgotten my password</a>
                        </div>
                </div>
        </div>
</section>
                        

{% include "./common/footer.tpl" %}	
