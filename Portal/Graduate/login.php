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
<script type="text/javascript" src="../assets/widgets/noty-notifications/noty-demo.js"></script>

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

<script src=../assets-minified/admin-all-demo.js></script>

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
                    <form action=api-login.php method=post>
                        <div class="wow bounceInDown content-box modal-content">
                            <h3 class="bg-default content-box-header content-box-header-alt">
                                <span class=icon-separator>
                                <i class="glyph-icon icon-cog"></i>
                                </span>
                                <span class=header-wrapper>
                                Graduate Members area
                                <small>Login to your account.</small>
                                </span>
                                <span class=header-buttons>
                                <a href=signup.php class="btn btn-primary btn-sm">Sign Up</a>
                                </span>
                            </h3>
                            <div class=content-box-wrapper>
                                <div class=form-group>
                                    <div class=input-group>
                                        <input class=form-control name=username placeholder="Enter email">
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
                                <div class=form-group>
                                    
                                </div>
                                <button class="btn btn-block btn-success">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src=../assets/bootstrap/js/bootstrap.js></script>