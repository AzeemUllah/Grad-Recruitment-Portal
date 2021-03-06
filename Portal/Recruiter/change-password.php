<?php session_start(); ?> 
<!DOCTYPE html>
<html lang=en>
    <head>
        <style>.spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner>div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}.row-bottom-margin{margin-bottom:10px}</style>
        <meta charset=UTF-8>
        <title>Recruitment Portal - Recruiter</title>
        <meta content="Recruitment Portal"name=description>
        <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"name=viewport>
        <link href=../assets-minified/admin-all-demo.css rel=stylesheet>
        <script src=../assets-minified/js-core.js></script>
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
        <div id=sb-site>
            <div id=loading>
                <div class=spinner>
                    <div class=bounce1></div>
                    <div class=bounce2></div>
                    <div class=bounce3></div>
                </div>
            </div>
            <div id=page-wrapper>
                <div class=bg-gradient-9 id=page-header>
                    <div id=mobile-navigation>
                        <button class=collapsed data-target=#page-sidebar data-toggle=collapse id=nav-toggle><span></span></button>
                        <a href=index.html title="Recruitment Portal"class=logo-content-small></a>
                    </div>
                    <div class=logo-bg id=header-logo>
                        <a href=index.html title="Recruitment Portal"class=logo-content-big>
                        Recruitment <i>Portal</i>
                        <span>The perfect solution Recruitment</span>
                        </a>
                        <a href=index.html title="Recruitment Portal"class=logo-content-small>
                        Recruitment <i>Portal</i>
                        <span>The perfect solution Recruitment</span>
                        </a>
                        <a href= # title="Close sidebar"id=close-sidebar>
                        <i class="glyph-icon icon-angle-left"></i>
                        </a>
                    </div>
                    <div id=header-nav-left>
                        <div class="dropdown user-account-btn">
                            <a href= # title="My Account"class="clearfix user-profile"data-toggle=dropdown>
                            <img alt="Profile image"src="../assets/image-resources/profile-picture/recruiter/accountID.jpg" width=28>
                            <span><?php echo $_SESSION["recruiter_name"] ?></span>
                            <i class="glyph-icon icon-angle-down"></i>
                            </a>
                            <div class="dropdown-menu float-left">
                                <div class=box-sm>
                                    <div class="clearfix login-box">
                                        <div class=user-img>
                                            <a href= # class=change-img>Change photo</a>
                                            <img alt=""src="../assets/image-resources/profile-picture/recruiter/accountID.jpg">
                                        </div>
                                        <div class=user-info>
                                            <span>
                                            <?php echo $_SESSION["recruiter_name"] ?>
                                            <i>Recruiter</i>
                                            </span>
                                             
                                        </div>
                                    </div>
                                    <div class=divider></div>
                                    
                                    <div class="button-pane button-pane-alt pad5A text-center">
                                        <a href=logout.php class="btn btn-danger display-block font-normal">
                                        <i class="glyph-icon icon-power-off"></i>
                                        Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=header-nav-right>
                        <a href= # title=Fullscreen class=hdr-btn id=fullscreen-btn>
                        <i class="glyph-icon icon-arrows-alt"></i>
                        </a>
                        <a href=lockscreen.php title="Lockscreen page example"class=header-btn id=logout-btn>
                        <i class="glyph-icon icon-lock"></i>
                        </a>
                    </div>
                </div>
                <div id=page-sidebar>
                    <div class=scroll-sidebar>
                        <ul id=sidebar-menu>
                            <li class=header><span>Overview</span></li>
                            <li>
                                <a href=profile.php title="Profile">
                                <i class="glyph-icon icon-child"></i>
                                <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href=edit.php title="Edit Profile">
                                <i class="glyph-icon icon-pencil"></i>
                                <span>Edit</span>
                                </a>
                            </li>
							<li>
                                <a href=messeges.php title="Read Messages">
                                <i class="glyph-icon icon-pencil"></i>
                                <span>Messages</span>
                                </a>
                            </li>
                            <li class=divider></li>
							 <li class=divider></li>
							  <li>
                                <a href=refined-search.php title="Read Messages">
                                <i class="glyph-icon icon-pencil"></i>
                                <span>Refined Search</span>
                                </a>
                            </li>
							
                            <li class=no-menu>
                                <a href=search.php title="search">
                                <i class="glyph-icon icon-search"></i>
                                <span>Search</span>
                                </a>
                            </li>
                            <li class=header><span>Customization</span></li>
                            <li>
                                <a href= title=settings>
                                <i class="glyph-icon icon-cog"></i>
                                <span>Settings</span>
                                </a>
                                <div class=sidebar-submenu>
                                    <ul>
                                        <li><a href=change-password.php title="Change your password"><span>Change Password</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id=page-content-wrapper>
                    <div id=page-content>
                        <div class=container>
                            <div id=page-title>
                                <h2>Account Settings</h2>
                                <p>Client will provide Text</p>
                                <div class=admin-options id=theme-options>
                                    <a href=javascript:void(0); title="Color schemes and layout options"class="tooltip-button btn btn-primary theme-switcher"data-placement=left>
                                    <i class="glyph-icon icon-cog icon-spin"></i>
                                    </a>
                                    <div id=theme-switcher-wrapper>
                                        <div class=scroll-switcher>
                                            <h5 class=header>Layout options</h5>
                                            <ul class=reset-ul>
                                                <li>
                                                    <label for=boxed-layout>Boxed layout</label>
                                                    <input class=input-switch-alt data-toggletarget=boxed-layout id=boxed-layout type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=fixed-header>Fixed header</label>
                                                    <input class=input-switch-alt data-toggletarget=fixed-header id=fixed-header type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=fixed-sidebar>Fixed sidebar</label>
                                                    <input class=input-switch-alt data-toggletarget=fixed-sidebar id=fixed-sidebar type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=closed-sidebar>Closed sidebar</label>
                                                    <input class=input-switch-alt data-toggletarget=closed-sidebar id=closed-sidebar type=checkbox>
                                                </li>
                                            </ul>
                                            <div class="boxed-bg-wrapper hide">
                                                <h5 class=header>
                                                    Boxed Page Background
                                                    <a href=javascript:void(0); title="Remove all styles"class=set-background-style data-header-bg="">Clear</a>
                                                </h5>
                                                <div class="clearfix theme-color-wrapper">
                                                    <h5>Patterns</h5>
                                                    <a href=javascript:void(0); title="Pattern 3"class="tooltip-button set-background-style pattern-bg-3"data-header-bg=pattern-bg-3>Pattern 3</a>
                                                    <a href=javascript:void(0); title="Pattern 4"class="tooltip-button set-background-style pattern-bg-4"data-header-bg=pattern-bg-4>Pattern 4</a>
                                                    <a href=javascript:void(0); title="Pattern 5"class="tooltip-button set-background-style pattern-bg-5"data-header-bg=pattern-bg-5>Pattern 5</a>
                                                    <a href=javascript:void(0); title="Pattern 6"class="tooltip-button set-background-style pattern-bg-6"data-header-bg=pattern-bg-6>Pattern 6</a>
                                                    <a href=javascript:void(0); title="Pattern 7"class="tooltip-button set-background-style pattern-bg-7"data-header-bg=pattern-bg-7>Pattern 7</a>
                                                    <a href=javascript:void(0); title="Pattern 8"class="tooltip-button set-background-style pattern-bg-8"data-header-bg=pattern-bg-8>Pattern 8</a>
                                                    <a href=javascript:void(0); title="Pattern 9"class="tooltip-button set-background-style pattern-bg-9"data-header-bg=pattern-bg-9>Pattern 9</a>
                                                    <a href=javascript:void(0); title="Pattern 10"class="tooltip-button set-background-style pattern-bg-10"data-header-bg=pattern-bg-10>Pattern 10</a>
                                                    <div class=clear></div>
                                                    <h5 class=mrg15T>Solids &Images</h5>
                                                    <a href=javascript:void(0); title=Black class="tooltip-button set-background-style bg-black"data-header-bg=bg-black>Black</a>
                                                    <a href=javascript:void(0); title=Gray class="tooltip-button set-background-style bg-gray mrg10R"data-header-bg=bg-gray>Gray</a>
                                                    <a href=javascript:void(0); title="Image 1"class="tooltip-button set-background-style full-bg-1"data-header-bg="full-bg-1 fixed-bg">Image 1</a>
                                                    <a href=javascript:void(0); title="Image 2"class="tooltip-button set-background-style full-bg-2"data-header-bg="full-bg-2 fixed-bg">Image 2</a>
                                                    <a href=javascript:void(0); title="Image 3"class="tooltip-button set-background-style full-bg-3"data-header-bg="full-bg-3 fixed-bg">Image 3</a>
                                                    <a href=javascript:void(0); title="Image 4"class="tooltip-button set-background-style full-bg-4"data-header-bg="full-bg-4 fixed-bg">Image 4</a>
                                                    <a href=javascript:void(0); title="Image 5"class="tooltip-button set-background-style full-bg-5"data-header-bg="full-bg-5 fixed-bg">Image 5</a>
                                                    <a href=javascript:void(0); title="Image 6"class="tooltip-button set-background-style full-bg-6"data-header-bg="full-bg-6 fixed-bg">Image 6</a>
                                                </div>
                                            </div>
                                            <h5 class=header>
                                                Header Style
                                                <a href=javascript:void(0); title="Remove all styles"class=set-adminheader-style data-header-bg=bg-gradient-9>Clear</a>
                                            </h5>
                                            <div class="clearfix theme-color-wrapper">
                                                <h5>Solids</h5>
                                                <a href=javascript:void(0); title=Primary class="tooltip-button set-adminheader-style bg-primary"data-header-bg="bg-primary font-inverse">Primary</a>
                                                <a href=javascript:void(0); title=Green class="tooltip-button set-adminheader-style bg-green"data-header-bg="bg-green font-inverse">Green</a>
                                                <a href=javascript:void(0); title=Red class="tooltip-button set-adminheader-style bg-red"data-header-bg="bg-red font-inverse">Red</a>
                                                <a href=javascript:void(0); title=Blue class="tooltip-button set-adminheader-style bg-blue"data-header-bg="bg-blue font-inverse">Blue</a>
                                                <a href=javascript:void(0); title=Warning class="tooltip-button set-adminheader-style bg-warning"data-header-bg="bg-warning font-inverse">Warning</a>
                                                <a href=javascript:void(0); title=Purple class="tooltip-button set-adminheader-style bg-purple"data-header-bg="bg-purple font-inverse">Purple</a>
                                                <a href=javascript:void(0); title=Black class="tooltip-button set-adminheader-style bg-black"data-header-bg="bg-black font-inverse">Black</a>
                                                <div class=clear></div>
                                                <h5 class=mrg15T>Gradients</h5>
                                                <a href=javascript:void(0); title="Gradient 1"class="tooltip-button set-adminheader-style bg-gradient-1"data-header-bg="bg-gradient-1 font-inverse">Gradient 1</a>
                                                <a href=javascript:void(0); title="Gradient 2"class="tooltip-button set-adminheader-style bg-gradient-2"data-header-bg="bg-gradient-2 font-inverse">Gradient 2</a>
                                                <a href=javascript:void(0); title="Gradient 3"class="tooltip-button set-adminheader-style bg-gradient-3"data-header-bg="bg-gradient-3 font-inverse">Gradient 3</a>
                                                <a href=javascript:void(0); title="Gradient 4"class="tooltip-button set-adminheader-style bg-gradient-4"data-header-bg="bg-gradient-4 font-inverse">Gradient 4</a>
                                                <a href=javascript:void(0); title="Gradient 5"class="tooltip-button set-adminheader-style bg-gradient-5"data-header-bg="bg-gradient-5 font-inverse">Gradient 5</a>
                                                <a href=javascript:void(0); title="Gradient 6"class="tooltip-button set-adminheader-style bg-gradient-6"data-header-bg="bg-gradient-6 font-inverse">Gradient 6</a>
                                                <a href=javascript:void(0); title="Gradient 7"class="tooltip-button set-adminheader-style bg-gradient-7"data-header-bg="bg-gradient-7 font-inverse">Gradient 7</a>
                                                <a href=javascript:void(0); title="Gradient 8"class="tooltip-button set-adminheader-style bg-gradient-8"data-header-bg="bg-gradient-8 font-inverse">Gradient 8</a>
                                            </div>
                                            <h5 class=header>
                                                Sidebar Style
                                                <a href=javascript:void(0); title="Remove all styles"class=set-sidebar-style data-header-bg="">Clear</a>
                                            </h5>
                                            <div class="clearfix theme-color-wrapper">
                                                <h5>Solids</h5>
                                                <a href=javascript:void(0); title=Primary class="tooltip-button set-sidebar-style bg-primary"data-header-bg="bg-primary font-inverse">Primary</a>
                                                <a href=javascript:void(0); title=Green class="tooltip-button set-sidebar-style bg-green"data-header-bg="bg-green font-inverse">Green</a>
                                                <a href=javascript:void(0); title=Red class="tooltip-button set-sidebar-style bg-red"data-header-bg="bg-red font-inverse">Red</a>
                                                <a href=javascript:void(0); title=Blue class="tooltip-button set-sidebar-style bg-blue"data-header-bg="bg-blue font-inverse">Blue</a>
                                                <a href=javascript:void(0); title=Warning class="tooltip-button set-sidebar-style bg-warning"data-header-bg="bg-warning font-inverse">Warning</a>
                                                <a href=javascript:void(0); title=Purple class="tooltip-button set-sidebar-style bg-purple"data-header-bg="bg-purple font-inverse">Purple</a>
                                                <a href=javascript:void(0); title=Black class="tooltip-button set-sidebar-style bg-black"data-header-bg="bg-black font-inverse">Black</a>
                                                <div class=clear></div>
                                                <h5 class=mrg15T>Gradients</h5>
                                                <a href=javascript:void(0); title="Gradient 1"class="tooltip-button set-sidebar-style bg-gradient-1"data-header-bg="bg-gradient-1 font-inverse">Gradient 1</a>
                                                <a href=javascript:void(0); title="Gradient 2"class="tooltip-button set-sidebar-style bg-gradient-2"data-header-bg="bg-gradient-2 font-inverse">Gradient 2</a>
                                                <a href=javascript:void(0); title="Gradient 3"class="tooltip-button set-sidebar-style bg-gradient-3"data-header-bg="bg-gradient-3 font-inverse">Gradient 3</a>
                                                <a href=javascript:void(0); title="Gradient 4"class="tooltip-button set-sidebar-style bg-gradient-4"data-header-bg="bg-gradient-4 font-inverse">Gradient 4</a>
                                                <a href=javascript:void(0); title="Gradient 5"class="tooltip-button set-sidebar-style bg-gradient-5"data-header-bg="bg-gradient-5 font-inverse">Gradient 5</a>
                                                <a href=javascript:void(0); title="Gradient 6"class="tooltip-button set-sidebar-style bg-gradient-6"data-header-bg="bg-gradient-6 font-inverse">Gradient 6</a>
                                                <a href=javascript:void(0); title="Gradient 7"class="tooltip-button set-sidebar-style bg-gradient-7"data-header-bg="bg-gradient-7 font-inverse">Gradient 7</a>
                                                <a href=javascript:void(0); title="Gradient 8"class="tooltip-button set-sidebar-style bg-gradient-8"data-header-bg="bg-gradient-8 font-inverse">Gradient 8</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class=col-md-4></div>
                                <div class=col-md-4></div>
                                <div class=col-md-4></div>
                            </div>
                            <div class=example-box-wrapper>
                                <div class=row>
                                    <div class=col-md-6>
                                        <div class="content-box mrg15B">
                                            <h3 class="clearfix content-box-header">
                                                Change Password
                                            </h3>
                                            <div class="clearfix content-box-wrapper pad0T">
                                                <form class="bordered-row form-horizontal pad15L pad15R" action=api-change-password.php method=post>
                                                    <div class=form-group>
                                                        <label class="col-sm-6 control-label">Old password:</label>
                                                        <div class=col-sm-6>
                                                            <input class=form-control placeholder="" name="currentPassword">
                                                        </div>
                                                    </div>
                                                    <div class=form-group>
                                                        <label class="col-sm-6 control-label">New password:</label>
                                                        <div class=col-sm-6>
                                                            <input class=form-control placeholder="" name="newPassword">
                                                        </div>
                                                    </div>
                                                    <div class=form-group>
                                                        <label class="col-sm-6 control-label">Repeat password:</label>
                                                        <div class=col-sm-6>
                                                            <input class=form-control placeholder="" name="newPasswordRetry">
                                                        </div>
                                                    </div>
													<div class="button-pane mrg20T">
                                                <button class="btn btn-alt btn-hover btn-warning" type=submit>
                                                <span>Update Password</span>
                                                <i class="glyph-icon icon-arrow-right"></i>
                                                </button>
                                            </div>

                                                </form>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <script src=../assets-minified/admin-all-demo.js></script>