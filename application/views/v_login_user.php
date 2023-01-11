<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/style.css">
</head>
<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url()?>assets/login/images/logo.png" alt="sing up image"></figure>
                        <a href="<?=base_url('index.php/sign_up')?>" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        
                        <form action="#" method="POST" class="register-form" id="sign_in">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- JS -->
    <script src="<?=base_url()?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script type="text/javascript">

$("#sign_in").submit(function(event){
    event.preventDefault();
    var datalogin=$("#sign_in").serialize();
    $("#pesan").html("Loading...");
    $.ajax({
        url:"<?=base_url()?>index.php/login_user/proses",
        type:"post",
        data:datalogin,
        dataType:"json",
        success:function(hasil){
         if(hasil['status']==1){
             $("#pesan").html("Anda sukses login");
             setTimeout(function(){
            location.href="<?=base_url()?>index.php/dashboard_user";
            },3000);
         }else{
            $("#pesan").html("Username dan password tidak cocok");
         }
        }
    });
});
</script>

