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
        <div class=center-vertical>
            <div class="center-content row">
                <div class="center-margin col-md-3">
				<?php if (empty($_GET)) { ?>
                    <form action=api-signup.php method=post>
                        <div class="wow bounceInDown content-box modal-content">
                            <h3 class="bg-default content-box-header content-box-header-alt">
                                <span class=icon-separator>
                                <i class="glyph-icon icon-cog"></i>
                                </span>
                                <span class=header-wrapper>
                                Signup
                                <small>Create your own account.</small>
                                </span>
                                <span class=header-buttons>
                                <a href=login.php class="btn btn-primary btn-sm">Log in</a>
                                </span>
                            </h3>
                            <div class=content-box-wrapper>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=username placeholder="username">
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=password placeholder=Password type=password>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-unlock-alt"></i>
                                        </span>
                                    </div>
                                </div>
								<div class="form-group input-group">
									<span class="col-sm-6 control-label">User Type</span>
									<div class="col-sm-6">
										<select name="user_type" class="custom-select form-control" >
											<option value='graduate'>Graduate</option>
											<option value='recruiter'>Recruiter</option>
										</select>
									</div>
								</div>
								<div class="form-group">
								</div>
								
								<button class="btn btn-block btn-success" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
				<?php }  ?>
				<?php if ($_GET) {
				if ($_GET['type']=='graduate') { ?>
					<form action=api-signup-graduate.php method=post>
                        <div class="wow bounceInDown content-box modal-content">
                            <h3 class="bg-default content-box-header content-box-header-alt">
                                <span class=icon-separator>
                                <i class="glyph-icon icon-cog"></i>
                                </span>
                                <span class=header-wrapper>
                                Signup
                                <small>Create your own account.</small>
                                </span>
                                <span class=header-buttons>
                                <a href=login.php class="btn btn-primary btn-sm">Log in</a>
                                </span>
                            </h3>
                            <div class=content-box-wrapper>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=firstname placeholder="First Name">
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=lastname placeholder="Last Name" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-unlock-alt"></i>
                                        </span>
                                    </div>
                                </div>
								
								<div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=email placeholder="Email" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-envelope"></i>
                                        </span>
                                    </div>
                                </div>
								 
								 <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=website placeholder="Website" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-list-alt"></i>
                                        </span>
                                    </div>
                                </div>
								
								 
								  <input class=form-control name=user_id placeholder="user_id" type=hidden <?php echo "value='".$_GET['id']."'" ?>>
								 
								 
								 
								<div class="form-group">
								</div>
								
								<button class="btn btn-block btn-success" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
				<?php }}?>
				
				
				<?php if ($_GET) {
				if ($_GET['type']=='recruiter') { ?>
					<form action=api-signup-recruiter.php method=post>
                        <div class="wow bounceInDown content-box modal-content">
                            <h3 class="bg-default content-box-header content-box-header-alt">
                                <span class=icon-separator>
                                <i class="glyph-icon icon-cog"></i>
                                </span>
                                <span class=header-wrapper>
                                Signup
                                <small>Create your own account.</small>
                                </span>
                                <span class=header-buttons>
                                <a href=login.php class="btn btn-primary btn-sm">Log in</a>
                                </span>
                            </h3>
                            <div class=content-box-wrapper>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=firstname placeholder="First Name">
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=lastname placeholder="Last Name" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-unlock-alt"></i>
                                        </span>
                                    </div>
                                </div>
								
								<div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=email placeholder="Email" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-envelope"></i>
                                        </span>
                                    </div>
                                </div>
								 
								 <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=company placeholder="Company Name" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-briefcase"></i>
                                        </span>
                                    </div>
                                </div>
								
								 <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=role placeholder="Role" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-pencil"></i>
                                        </span>
                                    </div>
                                </div>
								
								<div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=address placeholder="Address" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-home"></i>
                                        </span>
                                    </div>
                                </div>
								
								<div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=city placeholder="City" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-map-marker"></i>
                                        </span>
                                    </div>
                                </div>
								 
								 
								 <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=postal placeholder="Postal Code" type=text>
                                        <span class="bg-blue input-group-addon">
                                        <i class="glyph-icon icon-barcode"></i>
                                        </span>
                                    </div>
                                </div>
								 
								  <input class=form-control name=user_id placeholder="user_id" type=hidden <?php echo "value='".$_GET['id']."'" ?>>
								 
								 
								 
								<div class="form-group">
								</div>
								
								<button class="btn btn-block btn-success" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
				<?php }}?>
				
				
				
                </div>
            </div>
        </div>
        <script src=../assets/bootstrap/js/bootstrap.js></script>