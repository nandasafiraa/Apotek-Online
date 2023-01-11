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

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <div class="msg">
                    <h2>Sign up</h2>
                </div>
                <div id="pesan" class="alert alert-warning"> </div>
                <form action="#" method="POST" class="register-form" id="proses_daftar">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nama" placeholder="Nama"/>
                    </div>
                    <div class="form-group">
                        <label for="username"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="username" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" class="form-submit" data-target="#daftar" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?=base_url()?>assets/login/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="<?=base_url('index.php/login_user')?>" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
</div>
        <!-- JS -->
    <script src="<?=base_url()?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script>
$("#proses_daftar").submit(
    function(event){
        event.preventDefault();
    var data_input= $('#proses_daftar').serialize();
    $("#pesan").html("<ul><li>oke sukses bro</li></ul>");
    $.ajax({
        url:"<?=base_url()?>index.php/login_user/simpan",
        type:"post",
        data:data_input,
        dataType:"json",
        success:function(hasil){
            if(hasil['status']==1){
                $("#msg").html(hasil['keterangan']);
                $("[name=nama]").val('');
                $("[name=username]").val('');
                $("[name=password]").val('');
                setTimeout(function(){
                    $("#daftar").modal("hide");
                },3000);
                
            }else{
                $("#pesan").html(hasil['keterangan']);
            }
        }
    });
});
</script>