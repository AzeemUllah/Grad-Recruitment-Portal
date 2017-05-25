<?php session_start(); ?> 
<!DOCTYPE html>
<html lang=en>
    <head>
        <style>.spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner>div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}.row-bottom-margin{margin-bottom:10px}</style>
        <meta charset=UTF-8>
        <title>Recruitment Portal - Graduate</title>
        <meta content="Recruitment Portal"name=description>
        <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"name=viewport>
        <link href=../assets/helpers/animate.css rel=stylesheet>
        <link href=../assets/helpers/backgrounds.css rel=stylesheet>
        <link href=../assets/helpers/boilerplate.css rel=stylesheet>
        <link href=../assets/helpers/border-radius.css rel=stylesheet>
        <link href=../assets/helpers/grid.css rel=stylesheet>
        <link href=../assets/helpers/page-transitions.css rel=stylesheet>
        <link href=../assets/helpers/spacing.css rel=stylesheet>
        <link href=../assets/helpers/typography.css rel=stylesheet>
        <link href=../assets/helpers/utils.css rel=stylesheet>
        <link href=../assets/helpers/colors.css rel=stylesheet>
        <link href=../assets/elements/buttons.css rel=stylesheet>
        <link href=../assets/elements/content-box.css rel=stylesheet>
        <link href=../assets/elements/forms.css rel=stylesheet>
        <link href=../assets/icons/fontawesome/fontawesome.css rel=stylesheet>
        <link href=../assets/icons/spinnericon/spinnericon.css rel=stylesheet>
        <link href=../assets/themes/admin/color-schemes/default.css rel=stylesheet>
        <link href=../assets/themes/components/default.css rel=stylesheet>
        <script src=../assets/js-core/jquery-core.js></script>
        <script>$(window).load(function(){setTimeout(function(){$("#loading").fadeOut(400,"linear")},300)})</script>
		<!-- Noty notifications -->


<script type="text/javascript" src="../assets/widgets/noty-notifications/noty.js"></script>
<script type="text/javascript" src="../assets/widgets/noty-notifications/noty-demo.js">



</script>
<script>

var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});


if ($_GET["status"] == 'sucess') {
    $( document ).ready(function() {
    noty({ text: $_GET["text"], layout: 'bottom', type: 'success' });
});

} else if ($_GET["status"] == 'faliure') {
    $( document ).ready(function() {
    noty({ text: $_GET["text"], layout: 'bottom',type: 'error' });
});

}


</script>

    </head>
    <body>
        <div id=loading>
            <div class=spinner>
                <div class=bounce1></div>
                <div class=bounce2></div>
                <div class=bounce3></div>
            </div>
        </div>
        <style>body,html{height:100%;background:#fff;overflow:hidden}</style>
        <script src=../assets/widgets/wow/wow.js></script>
        <script>wow=new WOW({animateClass:"animated",offset:100}),wow.init()</script>
        <img alt=""class="wow fadeIn login-img"src=../assets/image-resources/blurred-bg/blurred-bg-3.jpg>
		<div class="center-vertical">
			<div class="center-content row">
				<div class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin ">
					<div class="content-box wow bounceInDown modal-content pad20A clearfix row">
						<div class="col-md-3">
							<img src="../assets/image-resources/profile-picture/recruiter/accountID.jpg" alt="" class="img-bordered border-gray radius-all-4 img-full" width="50" height="50">
						</div>
						<div class="col-md-9">
							<div class="meta-box text-left">
								<h3 class="meta-heading font-size-16"><?php echo $_SESSION["recruiter_name"] ?></h3>
								<h4 class="meta-subheading font-size-13 font-gray">Recruiter</h4>
								<div class="divider"></div>
								<form  class="form-inline pad10T" method="POST" action="api-login.php">
									<div class="form-group">
										<div class="input-group">
											<input type="text" placeholder="Password" class="form-control" name="password">
											<input type="hidden" placeholder="Password"  class="form-control" name="username" value=<?php echo $_SESSION["user_name"]?>>
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit" ><i class="glyph-icon icon-unlock-alt"></i></button>
											</span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <script src=../assets/bootstrap/js/bootstrap.js></script>