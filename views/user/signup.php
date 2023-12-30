<link rel="stylesheet" href="./assets/css/style-cu-duc.scss">
<section class="container">
    <div class="wrapper">
        <form class="form-signin" action="index.php?controller=user&action=signup" method="POST">
            <h2 class="form-signin-heading text-uppercase">Please sign up</h2>
            <input type="text" class="form-control" name="DH52003760_username" placeholder="Username" required="" autofocus="" />
            <input type="password" class="form-control" name="DH52003760_pass" placeholder="Password" required="" />
            <input type="text" class="form-control" name="DH52003760_phone" placeholder="Phone Number" id="" required="">
            <input type="text" class="form-control" name="DH52003760_mail" placeholder="Email" id="" required="">
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label> -->
            <button class="btn btn-lg btn-primary btn-block" name="btndangky" type="submit">Sign Up</button>
        </form>
        <div>
            <p>Already Have An Account ? <a href="index.php?controller=user&action=tosignin">Sign In</a></p>
        </div>
    </div>
</section>