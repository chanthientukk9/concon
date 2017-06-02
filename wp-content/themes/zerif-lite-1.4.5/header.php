<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<?php zerif_top_head_trigger(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php
$url = $_SERVER['SERVER_NAME'];
$mainUrl = 'http://' . $url;
$Assets = $mainUrl . '/wp-content/Assets/';
$Upload = $mainUrl . '/wp-content/uploads/';
if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>

<!-- MODAL STYLE AND JQUERY -->

<link rel="stylesheet" href="http://ohihi.vn/wp-includes/css/modal/remodal.css">
<link rel="stylesheet" href="http://ohihi.vn/wp-includes/css/modal/remodal-default-theme.css">
<script src="http://ohihi.vn/wp-includes/js/modal/remodal.min.js"></script>

<!-- [END] MODAL STYLE AND JQUERY -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
var check = 1;
$(document).ready(function(){
    $("#menu-coll-click").click(function(){
if (check == 1) {
            $(".top-stick").addClass("top-stick-change");
            $(".mid-stick").addClass("mid-stick-change");
            $(".bottom-stick").addClass("bottom-stick-change");
            var x = document.getElementsByClassName("menu-collapse-icon");
            x[0].style.right="220px";
            document.getElementById("mySidenav").style.width = "250px"; 
	    check = 0; }
else {
$(".top-stick").removeClass("top-stick-change");
            $(".mid-stick").removeClass("mid-stick-change");
            $(".bottom-stick").removeClass("bottom-stick-change");
            var x = document.getElementsByClassName("menu-collapse-icon");
            x[0].style.right="15px"; 
            document.getElementById("mySidenav").style.width = "0"; 
	    check = 1; }
    });
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  var numStyl = $('.nav-menu-a-text').length
  if (y > 10) {
    document.getElementById("main-nav").style.background="#ffffff";
    document.getElementById("main-nav").style.borderBottom="1px solid #d6d6c2";
    var styl = document.getElementsByClassName("nav-menu-a-text");
    for (var i = 0; i < numStyl; i++)
    	styl[i].style.color="#2fa3c3";
    var btnnav = document.getElementsByClassName("btn-nav-container-img");
	btnnav[0].style.display="initial";
	btnnav[1].style.display="initial";   
    document.getElementById("logo-brand").src="<?php echo $Upload.'2016/08/Logo_web-1.png'; ?>"
    var asid = document.getElementsByClassName("aside");
	asid[0].style.display="block";
  } else {
    document.getElementById("main-nav").style.background="transparent";
    document.getElementById("main-nav").style.borderBottom="none";
    var styl = document.getElementsByClassName("nav-menu-a-text");
    for (var i = 0; i < numStyl; i++) 
	styl[i].style.color="#ffffff";
    var btnnav = document.getElementsByClassName("btn-nav-container-img");
	btnnav[0].style.display="none";   
	btnnav[1].style.display="none"; 
    <?php $zerif_logo = get_theme_mod('zerif_logo'); ?>
    document.getElementById("logo-brand").src="<?php echo esc_url( $zerif_logo ); ?>"; 
    var asid = document.getElementsByClassName("aside");
	asid[0].style.display="none";
  }
});

</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81862164-2', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('require', 'displayfeatures'); 
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->

<!-- Facebook Comment -->
<meta property="fb:app_id" content="1756857607926596" />
<meta property="fb:admins" content="100001754710075"/>
<!-- End Facebook Comment -->

<?php zerif_bottom_head_trigger(); ?>
</head>

<!-- Facebook Comment -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=1756857607926596";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End FB Comment -->

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif;

	zerif_top_body_trigger();
	
	/* Preloader */

	if(is_front_page() && !is_customize_preview() && get_option( 'show_on_front' ) != 'page' ):
 
		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
		
		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;	

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

	<!-- navbar navbar-inverse bs-docs-nav -->
	
	<div id="main-nav" class="" role="banner">

		<div class="container">
			<!-- navbar-header -->
			<div style="display:inline;" class="responsive-logo">
				
				<!-- button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button -->

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.esc_url( $zerif_logo ).'" id="logo-brand" style="transition:0.1s;" alt="'.esc_attr( get_bloginfo('title') ).'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';
						
							if( file_exists(get_stylesheet_directory()."/images/logo.png")):
							
								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
							
							else:
								
								echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
								
							endif;

						echo '</a>';

					endif;

				?>
				<div class="btn-nav-container">
					<a href="<?php echo $mainUrl ?>/partners" target="_blank" class="btn-nav-container-img" title="Đăng Ký Trở Thành Đối Tác Linkcare"><img src="<?php echo $Assets;?>Button_Doctor2.png" onmouseover=this.src="<?php echo $Assets;?>Button_Doctor2_hover.png"; onmouseout=this.src="<?php echo $Assets;?>Button_Doctor2.png";></a>
					<a href="<?php echo $mainUrl ?>/users" class="btn-nav-container-img" target="_blank" title="Đăng Ký Trở Thành Đối Tác Linkcare"><img src="<?php echo $Assets;?>Button_User2.png" onmouseover=this.src="<?php echo $Assets;?>Button_User2_hover.png"; onmouseout=this.src="<?php echo $Assets;?>Button_User2.png";></a>
				</div>
			</div>

			<div id="menu-coll-click">
				<div class="menu-collapse-icon" style="transition:0.5s;">
					<div class="menui top-stick"></div>
					<div class="menui mid-stick"></div>
					<div class="menui bottom-stick"></div>
				</div>
			</div>

			<div class="nav-menu-container">
			<ul>
			<?php
			echo '<li style="margin-right:15px;"><a href="#" title="Vietnamese" class="nav-menu-a-text"><img src="'.$Upload.'2016/07/flag-vn.png" style="width:15px;height:15px;" title="Ngôn ngữ: Tiếng Việt" alt="flag-vn"/> Tiếng Việt</a></li>';?>
			<li>
			<a href="#modal1" title="Tải ứng dụng" class="nav-menu-a-text"><i class="fa fa-download" aria-hidden="true"></i> Tải ứng dụng</a></li>
			<li>
			<a href="#shortregmodal" title="Tư vấn đăng ký trở thành đối tác LinkCare ngay hôm nay!" class="nav-menu-a-text"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Tư vấn đăng ký đối tác</a></li></ul>
			</div>
			<!-- ?php zerif_primary_navigation_trigger(); ? -->

			
		</div>
		
	</div>
	
<div id="mySidenav" class="sidenav">

<?php

	echo '<a href="'.$mainUrl.'/partners" title="Dành Cho Đối Tác LinkCare"><img src="'.$Assets.'Button_Doitac.png" alt="Button_Doitac"/></a><br/><br/>';
	echo '<a href="'.$mainUrl.'/users" title="Dành Cho Người Dùng"><img src="'.$Assets.'Button_User.png" alt="Button_User"/></a><br/>';
	echo '<a href="#shortregmodal" class="btn btn-primary custom-button reg-btn" title="Tư Vấn Đăng Ký Trở Thành Đối Tác Linkcare">Tư Vấn Đăng Ký</a><br/>';
	echo '<a href="#modal1" class="btn btn-primary custom-button reg-btn" title="Tải ứng dụng"><i class="fa fa-download" aria-hidden="true"></i> Tải ứng dụng</a><br/><br/>'; ?>
</div>	
<!-- MODAL BOX CONTENT -->

<div class="remodal" data-remodal-id="modal1">

	<img src="<?php echo $Assets;?>close_button.png" data-remodal-action="close" class="remodal-close" alt="close_button" onmouseover="this.src='<?php echo $Assets;?>close_button_hover.png';" onmouseout="this.src='<?php echo $Assets;?>close_button.png';" onclick="this.src='<?php echo $Assets;?>close_button_pressed.png';">

  <div class="main-download-box">
	<h4>Vui lòng tải ứng dụng di động tìm kiếm bác sĩ, điều dưỡng<br/>LinkCare từ Apple store hoặc Google play.</h4><br/>
  	<div class="download-box">
  		<div class="logo-download-box">
		
		<img src="<?php echo $Assets;?>icon_download_doctor.png" alt="icon_download_doctor"/></div><br/>

		Ứng dụng đối tác<br/>
		<a href="https://itunes.apple.com/us/app/linkcare-oi-tac/id1120211399?l=vi&ls=1&mt=8" target="_blank">
			
			<img src="<?php echo $Assets;?>AppStore.png" alt="AppStore" onmouseover="this.src='<?php echo $Assets;?>AppStore_hover.png';" onmouseout="this.src='<?php echo $Assets;?>AppStore.png';" onclick="this.src='<?php echo $Assets;?>AppStore_pressed.png';">

		</a>
		<a href="https://play.google.com/store/apps/details?id=com.linkcare.doctor" target="_blank">
		
		<img src="<?php echo $Assets;?>GooglePlay.png" alt="GooglePlay" onmouseover="this.src='<?php echo $Assets;?>GooglePlay_hover.png';" onmouseout="this.src='<?php echo $Assets;?>GooglePlay.png';" onclick="this.src='<?php echo $Assets;?>GooglePlay_pressed.png';">

		</a>
	</div>
  	<div class="download-box">
  		<div class="logo-download-box">

		<img src="<?php echo $Assets;?>icon_download_user.png" alt="icon_download_user"/></div><br/>

		Ứng dụng người dùng<br/>
		<a href="https://itunes.apple.com/us/app/linkcare-benh-nhan/id1122131045?l=vi&ls=1&mt=8" target="_blank">
		
		<img src="<?php echo $Assets;?>AppStore.png" alt="AppStore" onmouseover="this.src='<?php echo $Assets;?>AppStore_hover.png';" onmouseout="this.src='<?php echo $Assets;?>AppStore.png';" onclick="this.src='<?php echo $Assets;?>AppStore_pressed.png';">

		</a>
		<a href="https://play.google.com/store/apps/details?id=com.linkcare" target="_blank">

		<img src="<?php echo $Assets;?>GooglePlay.png" alt="GooglePlay" onmouseover="this.src='<?php echo $Assets;?>GooglePlay_hover.png';" onmouseout="this.src='<?php echo $Assets;?>GooglePlay.png';" onclick="this.src='<?php echo $Assets;?>GooglePlay_pressed.png';">

		</a>
	</div>  
  </div>
</div>	
  
<div class="remodal" data-remodal-id="regmodal" style="background:#2fa3c3;padding:0px;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <a href="http://concon.vn/dang-ky" title="Mở trang đăng ký" style="color:#ffffff;" target="_blank">Mở dưới dạng trang đầy đủ</a>
  <iframe src="https://fs24.formsite.com/chanthientukk9/form1/index.html" width="100%" height="500px"></iframe>

</div>

<div class="remodal" data-remodal-id="shortregmodal" style="background:#2fa3c3;padding:0px;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <a href="http://concon.vn/tu-van-dang-ky" title="Mở trang đăng ký" style="color:#ffffff;" target="_blank">Mở dưới dạng trang đầy đủ</a>
  <iframe src="https://fs24.formsite.com/chanthientukk9/form2/index.html" width="100%" height="500px"></iframe>
</div>

<div class="remodal" data-remodal-id="fastmodal" style="background:#2fa3c3;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  
  </div>
</div>

<div class="remodal" data-remodal-id="exactmodal" style="background:#2fa3c3;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  
  </div>
</div>

<div class="remodal" data-remodal-id="savemodal" style="background:#2fa3c3;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  
  </div>
</div>

<div class="remodal" data-remodal-id="partneroruser">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  <table style="border:none;">
  <tr>
  <td style="text-align:center;width:50%;"><a href="#partnermodal">Đối Tác<br><i class="fa fa-user-md fa-5x"></i></a></td>
  <td style="text-align:center;"><a href="#usermodal">Người Dùng<br><i class="fa fa-user fa-5x"></i></a></td>
  </tr>
  </table>
  </div>
</div>

<div class="remodal" data-remodal-id="partnermodal" style="background:#2fa3c3;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  
  </div>
</div>

<div class="remodal" data-remodal-id="usermodal" style="background:#2fa3c3;">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="main-content-box">
  
  </div>
</div>

<!-- [END] MODAL BOX CONTENT -->

<!-- SOCIAL FANPAGE ASIDE -->
<aside id="sticky-social">
    <ul class="aside">
        <li><a href="http://facebook.com/linkcareapp" class="entypo-facebook" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
        <li><a href="#" class="entypo-twitter" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
        <li><a href="https://www.youtube.com/channel/UCDZUjVtgyaw1VdGKSwJ9uoA" class="entypo-youtube" target="_blank"><i class="fa fa-youtube"></i><span>Youtube</span></a></li>
    </ul>
</aside>
	<!-- / END TOP BAR -->