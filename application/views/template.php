<!DOCTYPE html>
<html lang="en">
<head>
<title>24Clinic</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?=base_url()?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- <div class="top_nav_left">free shipping on all u.s orders over $50</div> -->
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="<?=base_url('index.php/login_user')?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="<?=base_url('index.php/sign_up')?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">24-<span>Clinic</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#">home</a></li>
								<li><a href="<?=base_url('index.php/barang')?>">barang</a></li>
								<li><a href="<?=base_url('index.php/kategori')?>">kategori</a></li>
								<li><a href="<?=base_url('index.php/pembeli')?>">pembeli</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(<?=base_url()?>assets/images/bg_3.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2017</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/images/sirup.jpg)">
						<div class="banner_category">
							<a href="#">Sirup</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/images/puyer1.jpg)">
						<div class="banner_category">
							<a href="">Puyer</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(<?=base_url()?>assets/images/tablet1.jpg)">
						<div class="banner_category">
							<a href="">Tablet</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Katalog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening 24hours</h6>
							<p>00AM - 00PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
					</div>
				</div> -->
			</div>
		</div>
	</footer>

</div>

<script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?=base_url()?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url()?>assets/plugins/easing/easing.js"></script>
<script src="<?=base_url()?>assets/js/custom.js"></script>
</body>

</html>

<div class="modal fade" id="detail_barang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id ="exampleModalLabel">Detail Barang</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div id="gambar"></div>
            </div>
            <div class="col-md-6">
                <div id="deskripsi"></div>
                <div id="jumlah"></div> <br>
                <div id="btn"></div> <br>
                <div id="pesan"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
 function tm_detail(id_barang)
        {
            $.getJSON("<?= base_url()?>index.php/get_barang/detail/"+ id_barang, function(data) {
                $("#gambar").html(
                    '<img src="<?=base_url()?>assets/gambar/'+ data['gambar']+'" style="width:100%">'
                );
                $("#deskripsi").html(
                    ' <table class="table table-hover table-striped">'+
                        '<tr><td>Nama Barang</td> <td>'+data['nama_barang']+'</td></tr>'+
                        '<tr><td>Harga Barang</td> <td>'+data['harga']+'</td></tr>'+
                        '<tr><td>Stok Barang</td> <td>'+data['stok']+'</td></tr>'+
                        '<tr><td>Stok Barang</td> <td>'+data['nama_kategori']+'</td></tr>'+
                    '</table>'
                );
                $("#jumlah").html(
                    '<input type="number" id="jumlah_item" value="1" class="form-control">'
                );
                $("#btn").html(
                    '<button id="beli" onclick="beli('+data['id_barang']+')" class="btn btn-info">Beli</button>'+
                    '<a href="<?= base_url()?>index.php/trans" class="btn btn-danger">Check Out</a>');
            });
        }

        function beli(id_barang){
            var jumlah=$("#jumlah_item").val();
            $("#pesan").hide();
            $("#pesan").removeClass("alert alert-success");
            $.getJSON("<?=base_url()?>index.php/trans/tambah_cart/"+id_barang+"/"+jumlah,function(hasil){
            
                $("#cart").html(hasil['total_cart']);
                $("#pesan").html("Item anda telah ditambahkan ke Cart");
                $("#pesan").addClass('alert alert-success');
                $("#pesan").show('animate');
                setTimeout(function(){
                    $("#pesan").hide('fade');
                }, 3000);
            });
        }
$.getJSON("<?= base_url()?>index.php/get_barang",function (data) {
        var datanya = "";
        $.each(data,function(key,dt) {
            datanya += 
            '<div class="col-xs-6 col-md-3">' +
            '<a href="#detail_barang" class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_barang']+')" style="text-decoration:none">' +
            '<img style="height:150px" src="<?= base_url('assets/gambar/')?>'+dt['gambar']+'" alt="..."><div style="color:white; width:100%; background:green; float:left; padding-top:5px; padding-bottom:5px">' +
            dt['nama_barang'] + '<br>' + dt['harga'] +'</div> </a>' +
        '</div>';
        });
        $("#tampil_barang").html(datanya);
    });

    $("#cari").on('keyup',function() {
    $.getJSON("<?= base_url()?>index.php/get_barang/cari/"+ $("#cari").val(),
    function (data) {
        var datanya = "";
        $.each(data,function(key,dt) {
            datanya += 
            '<div class="col-xs-6 col-md-3">' +
            '<a href="#detail_barang" class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_barang']+')" style="text-decoration:none">' +
            '<img style="height:150px" src="<?= base_url('assets/gambar/')?>'+dt['gambar']+'" alt="..."><div style="color:white; width:100%; background:green; float:left; padding-top:5px; padding-bottom:5px">' +
            dt['nama_barang'] + '<br>' + dt['harga'] +'</div> </a>' +
        '</div>';
        });
        $("#tampil_barang").html(datanya);
    });
    });

</script>