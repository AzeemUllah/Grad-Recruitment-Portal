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
                        <button class=collapsed id=nav-toggle data-target=#page-sidebar data-toggle=collapse><span></span></button>
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
                            <span><?php echo $_SESSION["user_name"] ?></span>
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
                                            <?php echo $_SESSION["user_name"] ?>
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
                            <script src=../assets/widgets/wizard/wizard.js></script>
                            <script src=../assets/widgets/wizard/wizard-demo.js></script>
                            <link href=../assets/widgets/chosen/chosen.css rel=stylesheet>
                            <script src=../assets/widgets/textarea/textarea.js></script>
                            <script>$(function(){"use strict";$(".textarea-autosize").autosize()})</script>
                            <div id=page-title>
                                <h2>Portfolio Form:</h2>
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
                                                    <input class=input-switch-alt id=boxed-layout data-toggletarget=boxed-layout type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=fixed-header>Fixed header</label>
                                                    <input class=input-switch-alt id=fixed-header data-toggletarget=fixed-header type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=fixed-sidebar>Fixed sidebar</label>
                                                    <input class=input-switch-alt id=fixed-sidebar data-toggletarget=fixed-sidebar type=checkbox>
                                                </li>
                                                <li>
                                                    <label for=closed-sidebar>Closed sidebar</label>
                                                    <input class=input-switch-alt id=closed-sidebar data-toggletarget=closed-sidebar type=checkbox>
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
                            <script>window.globalVar=0</script>
                            <div class=row>
                                <div class=col-md-4></div>
                                <div class=col-md-4></div>
                                <div class=col-md-4></div>
                            </div>
							
							
							<form action="api-edit-save.php" method="post">
                            <div class=panel>
                                <div class=panel-body>
                                    <h3 class=title-hero>
                                        Setup your Portfolio
                                    </h3>
                                    <div class=example-box-wrapper>
                                        <div id=form-wizard-2>
                                            <ul class="row list-group list-group-icons list-group-separator">
                                                <li class="col-md-3 active">
                                                    <a href=forms-wizard.html#custom-step-1 class=list-group-item data-toggle=tab>
                                                    <i class="glyph-icon icon-dashboard"></i>
                                                    Personal Details
                                                    </a>
                                                </li>
                                                <li class=col-md-3>
                                                    <a href=forms-wizard.html#custom-step-2 class=list-group-item data-toggle=tab>
                                                    <i class="glyph-icon font-red icon-bullhorn"></i>
                                                    Advertise Vacancy
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=tab-content>
                                                <div class="active tab-pane"id=custom-step-1>
                                                    <div class=content-box>
                                                        <h3 class="content-box-header bg-default">
                                                            Personal Details
                                                        </h3>
                                                        
														<?php
														include("api-config.php");

														$sql = "SELECT * FROM recruiter where user_id = '" . $_SESSION['user_id'] . "'";
														$result = $conn->query($sql);

														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																$_SESSION["recruiter_name"] = $row["firstname"] . " " . $row["lastname"];
																echo "	<div class='content-box-wrapper bordered-row form-horizontal pad15L pad15R'>
                                                            <div class='form-group remove-border'>
                                                                <label class='control-label col-sm-3'>First Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='First name...' name=firstname value='".$row["firstname"]."'>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Last Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Last name...' name=lastname value='".$row["lastname"]."'>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Email:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Email address...' name=email value='".$row["email"]."'>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Company Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Company Name...' name=companyname value='".$row["company"]."'>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Role:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder=Role... name=role value='".$row["role"]."'>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Website:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder=Website... name=website value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>About me:</label>
                                                                <div class=col-sm-6>
                                                                    <textarea class='form-control textarea-autosize'name=''rows=3 name=about value=''></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
														";
																$_SESSION["recruiter_id"] = $row["recruiter_id"];	
															}
														} else {
															echo "<div class='content-box-wrapper bordered-row form-horizontal pad15L pad15R'>
                                                            <div class='form-group remove-border'>
                                                                <label class='control-label col-sm-3'>First Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='First name...' name=firstname value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Last Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Last name...' name=lastname value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Email:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Email address...' name=email value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Company Name:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder='Company Name...' name=companyname value=''>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Role:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder=Role... name=role value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>Website:</label>
                                                                <div class=col-sm-6>
                                                                    <input class=form-control placeholder=Website... name=website value=''>
                                                                </div>
                                                            </div>
                                                            <div class=form-group>
                                                                <label class='control-label col-sm-3'>About me:</label>
                                                                <div class=col-sm-6>
                                                                    <textarea class='form-control textarea-autosize'name=''rows=3 name=about value'' ></textarea>
                                                                </div>
                                                            </div>
                                                                                                                    </div>
														
														";
															}
														//$conn->close();
														
														
														?>
														
														
														
                                                    </div>
                                                </div>
                                                <div class=tab-pane id=custom-step-2>
                                                    <div class=content-box>
                                                        <div class="bordered-row form-horizontal">
                                                            <h3 class="content-box-header bg-black">
                                                                Opportunity Details
                                                            </h3>
                                                            <div class=content-box-wrapper>
                                                               
															   <?php
													
														
														$sql = "SELECT * FROM opportunity where recruiter_id = '" . $_SESSION['recruiter_id'] . "'";
														$result = $conn->query($sql);
														$_SESSION["count-opportunity"]=1;
														$takenOpportunity = array();
														if ($result->num_rows > 0) {
															
															// output data of each row
															while($row = $result->fetch_assoc()) {
																echo "<div class=panel>
                                                                    <h3 class='panel-body title-hero'>
                                                                        Opportunity ".$_SESSION["count-opportunity"].":
                                                                    </h3>
                                                                    <div class='form-group remove-border'>
                                                                        <label class='control-label col-md-2'>Degree Type Needed</label>
                                                                        <div class=col-md-3>
                                                                            <select class=chosen-select name='type".$_SESSION["count-opportunity"]."' value='".$row["type"]."'>
																				<option>".$row["type"]."</option>
																			   <optgroup label=Batchelor>
                                                                                    <option>BS</option>
                                                                                    <option>BE</option>
                                                                                </optgroup>
                                                                                <optgroup label=Masters>
                                                                                    <option>MS</option>
                                                                                </optgroup>
                                                                                <optgroup label=P.H.D>
                                                                                    <option>PHD</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                        <label class='control-label col-md-2'>Degree Specification Needed</label>
                                                                        <div class=col-md-4>
                                                                            <select class=chosen-select name='spec".$_SESSION["count-opportunity"]."' value='".$row["spec"]."'>
																					<option>".$row["spec"]."</option>
																			   <optgroup label=Science>
                                                                                    <option>Computer Science</option>
                                                                                    <option>Information Technology</option>
                                                                                </optgroup>
                                                                                <optgroup label=Engeniering>
                                                                                    <option>Computer Engeniering</option>
                                                                                </optgroup>
                                                                                <optgroup label=Buissness>
                                                                                    <option>Buissness Management</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=form-group>
                                                                        <label class='control-label col-md-2'>Minimum Grade</label>
                                                                        <div class=col-md-2>
                                                                            <select class=form-control name='grade".$_SESSION["count-opportunity"]."' value='".$row["grade"]."'>
                                                                                	<option>".$row["grade"]."</option>
																				<option>1st</option>
                                                                                <option>2:1</option>
                                                                                <option>2:2</option>
                                                                                <option>2nd</option>
                                                                                <option>3rd</option>
                                 </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=form-group>
                                                                        <label class='control-label col-sm-2'>Vacancies</label>
                                                                        <div class=col-sm-3>
                                                                            <input class=form-control id=touchspin-demo-3  name='slots".$_SESSION["count-opportunity"]."' value='".$row["slot"]."'>
                                                                        </div>
																		
																	

																	<div class='col-md-5'>
																	</div>
																	<button class='btn btn-warning add_field_button btn-round col-md-1'  type=button>
                                                                        <a style='color:white;' href='api-delete-opportunity.php?opportunity_id=".$row['opportunity_id']."'>
																			<i>Delete</i>
																		</a>
                                                                    </button>
																	
																	
																	
																	
																	
                                                                    </div>
                                                                </div>
																";
															   
															   array_push($takenOpportunity,$row["opportunity_id"]);
																$_SESSION["count-opportunity"] = $_SESSION["count-opportunity"]+1;
																
															}
														} else {
															echo "<div class=panel>
                                                                    <h3 class='panel-body title-hero'>
                                                                        Opportunity 1:
                                                                    </h3>
                                                                    <div class='form-group remove-border'>
                                                                        <label class='control-label col-md-2'>Degree Type Needed</label>
                                                                        <div class=col-md-3>
                                                                            <select class=chosen-select name='type".$_SESSION["count-opportunity"]."' value=''>
                                                                                <optgroup label=Batchelor>
                                                                                    <option>BS</option>
                                                                                    <option>BE</option>
                                                                                </optgroup>
                                                                                <optgroup label=Masters>
                                                                                    <option>MS</option>
                                                                                </optgroup>
                                                                                <optgroup label=P.H.D>
                                                                                    <option>PHD</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                        <label class='control-label col-md-2'>Degree Specification Needed</label>
                                                                        <div class=col-md-4>
                                                                            <select class=chosen-select name='spec".$_SESSION["count-opportunity"]."' value=''>
                                                                                <optgroup label=Science>
                                                                                    <option>Computer Science</option>
                                                                                    <option>Information Technology</option>
                                                                                </optgroup>
                                                                                <optgroup label=Engeniering>
                                                                                    <option>Computer Engeniering</option>
                                                                                </optgroup>
                                                                                <optgroup label=Buissness>
                                                                                    <option>Buissness Management</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=form-group>
                                                                        <label class='control-label col-md-2'>Minimum Grade</label>
                                                                        <div class=col-md-2>
                                                                            <select class=form-control name='grade".$_SESSION["count-opportunity"]."' value=''>
                                                                                <option>1st</option>
                                                                                <option>2:1</option>
                                                                                <option>2:2</option>
                                                                                <option>2nd</option>
                                                                                <option>3rd</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=form-group>
                                                                        <label class='control-label col-sm-2'>Vacancies</label>
                                                                        <div class=col-sm-3>
                                                                            <input class=form-control id=touchspin-demo-3  name='slots".$_SESSION["count-opportunity"]."' value=''>
                                                                        </div>
                                                                    </div>
                                                                </div>
																";
															$_SESSION["count-opportunity"] = $_SESSION["count-opportunity"]+1;
														}
														//$conn->close();
														$_SESSION["takenOpportunity"]=$takenOpportunity;
														echo "<input type='hidden' id='hdnSession-opportunity-count' name='hdnSession-opportunity-count' value='".$_SESSION['count-opportunity']."' />"
														?>

															   
																
																
                                                                <div id=dynamic-degree-entry-div></div>
                                                            </div>
                                                            <div class=content-box-wrapper>
                                                                <div class=form-group>
                                                                    <div class="input_fields_wrap col-md-1 pull-right">
                                                                        <button class="btn btn-primary add_field_button btn-round"id=dynamic-degree-entry-btn type="button">
                                                                        <i class="glyph-icon icon-code-fork"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-md-3 input_fields_wrap pull-left">
                                                                        <button class="btn btn-alt btn-hover btn-success" type="submit">
                                                                        <span>Submit</span>
                                                                        <i class="glyph-icon icon-arrow-right"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=pager>
                                                <div class=pull-right>
                                                    <button class="btn btn-default button-next" type="button">
                                                    <i class="glyph-icon icon-arrow-right"></i>
                                                    </button>
                                                    <button class="btn btn-default button-last" type="button">
                                                    <i class="glyph-icon icon-chevron-right"></i>
                                                    </button>
                                                </div>
                                                <div class=pull-left>
                                                    <button class="btn btn-default button-first" type="button">
                                                    <i class="glyph-icon icon-chevron-left"></i>
                                                    </button>
                                                    <button class="btn btn-default button-previous" type="button">
                                                    <i class="glyph-icon icon-arrow-left"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</form>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <script src=../assets-minified/admin-all-demo.js></script>
        <script>(function(){var t,e,s,i,r,o={}.hasOwnProperty,n=function(t,e){function s(){this.constructor=t}for(var i in e)o.call(e,i)&&(t[i]=e[i]);return s.prototype=e.prototype,t.prototype=new s,t.__super__=e.prototype,t};i=function(){function t(){this.options_index=0,this.parsed=[]}return t.prototype.add_node=function(t){return"OPTGROUP"===t.nodeName.toUpperCase()?this.add_group(t):this.add_option(t)},t.prototype.add_group=function(t){var e,s,i,r,o,n;for(e=this.parsed.length,this.parsed.push({array_index:e,group:!0,label:this.escapeExpression(t.label),children:0,disabled:t.disabled}),o=t.childNodes,n=[],i=0,r=o.length;r>i;i++)s=o[i],n.push(this.add_option(s,e,t.disabled));return n},t.prototype.add_option=function(t,e,s){return"OPTION"===t.nodeName.toUpperCase()?(""!==t.text?(null!=e&&(this.parsed[e].children+=1),this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,value:t.value,text:t.text,html:t.innerHTML,selected:t.selected,disabled:s===!0?s:t.disabled,group_array_index:e,classes:t.className,style:t.style.cssText})):this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,empty:!0}),this.options_index+=1):void 0},t.prototype.escapeExpression=function(t){var e,s;return null==t||t===!1?"":/[\&\<\>\"\'\`]/.test(t)?(e={"<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},s=/&(?!\w+;)|[\<\>\"\'\`]/g,t.replace(s,function(t){return e[t]||"&amp;"})):t},t}(),i.select_to_array=function(t){var e,s,r,o,n;for(s=new i,n=t.childNodes,r=0,o=n.length;o>r;r++)e=n[r],s.add_node(e);return s.parsed},e=function(){function t(e,s){this.form_field=e,this.options=null!=s?s:{},t.browser_is_supported()&&(this.is_multiple=this.form_field.multiple,this.set_default_text(),this.set_default_values(),this.setup(),this.set_up_html(),this.register_observers())}return t.prototype.set_default_values=function(){var t=this;return this.click_test_action=function(e){return t.test_active_click(e)},this.activate_action=function(e){return t.activate_field(e)},this.active_field=!1,this.mouse_on_container=!1,this.results_showing=!1,this.result_highlighted=null,this.allow_single_deselect=null!=this.options.allow_single_deselect&&null!=this.form_field.options[0]&&""===this.form_field.options[0].text&&this.options.allow_single_deselect,this.disable_search_threshold=this.options.disable_search_threshold||0,this.disable_search=this.options.disable_search||!1,this.enable_split_word_search=null==this.options.enable_split_word_search||this.options.enable_split_word_search,this.group_search=null==this.options.group_search||this.options.group_search,this.search_contains=this.options.search_contains||!1,this.single_backstroke_delete=null==this.options.single_backstroke_delete||this.options.single_backstroke_delete,this.max_selected_options=this.options.max_selected_options||1/0,this.inherit_select_classes=this.options.inherit_select_classes||!1,this.display_selected_options=null==this.options.display_selected_options||this.options.display_selected_options,this.display_disabled_options=null==this.options.display_disabled_options||this.options.display_disabled_options},t.prototype.set_default_text=function(){return this.form_field.getAttribute("data-placeholder")?this.default_text=this.form_field.getAttribute("data-placeholder"):this.is_multiple?this.default_text=this.options.placeholder_text_multiple||this.options.placeholder_text||t.default_multiple_text:this.default_text=this.options.placeholder_text_single||this.options.placeholder_text||t.default_single_text,this.results_none_found=this.form_field.getAttribute("data-no_results_text")||this.options.no_results_text||t.default_no_result_text},t.prototype.mouse_enter=function(){return this.mouse_on_container=!0},t.prototype.mouse_leave=function(){return this.mouse_on_container=!1},t.prototype.input_focus=function(t){var e=this;if(this.is_multiple){if(!this.active_field)return setTimeout(function(){return e.container_mousedown()},50)}else if(!this.active_field)return this.activate_field()},t.prototype.input_blur=function(t){var e=this;return this.mouse_on_container?void 0:(this.active_field=!1,setTimeout(function(){return e.blur_test()},100))},t.prototype.results_option_build=function(t){var e,s,i,r,o;for(e="",o=this.results_data,i=0,r=o.length;r>i;i++)s=o[i],e+=s.group?this.result_add_group(s):this.result_add_option(s),(null!=t?t.first:void 0)&&(s.selected&&this.is_multiple?this.choice_build(s):s.selected&&!this.is_multiple&&this.single_set_selected_text(s.text));return e},t.prototype.result_add_option=function(t){var e,s;return t.search_match&&this.include_option_in_results(t)?(e=[],t.disabled||t.selected&&this.is_multiple||e.push("active-result"),!t.disabled||t.selected&&this.is_multiple||e.push("disabled-result"),t.selected&&e.push("result-selected"),null!=t.group_array_index&&e.push("group-option"),""!==t.classes&&e.push(t.classes),s=document.createElement("li"),s.className=e.join(" "),s.style.cssText=t.style,s.setAttribute("data-option-array-index",t.array_index),s.innerHTML=t.search_text,this.outerHTML(s)):""},t.prototype.result_add_group=function(t){var e;return(t.search_match||t.group_match)&&t.active_options>0?(e=document.createElement("li"),e.className="group-result",e.innerHTML=t.search_text,this.outerHTML(e)):""},t.prototype.results_update_field=function(){return this.set_default_text(),this.is_multiple||this.results_reset_cleanup(),this.result_clear_highlight(),this.results_build(),this.results_showing?this.winnow_results():void 0},t.prototype.reset_single_select_options=function(){var t,e,s,i,r;for(i=this.results_data,r=[],e=0,s=i.length;s>e;e++)t=i[e],t.selected?r.push(t.selected=!1):r.push(void 0);return r},t.prototype.results_toggle=function(){return this.results_showing?this.results_hide():this.results_show()},t.prototype.results_search=function(t){return this.results_showing?this.winnow_results():this.results_show()},t.prototype.winnow_results=function(){var t,e,s,i,r,o,n,h,l,c,a,_,u;for(this.no_results_clear(),r=0,n=this.get_search_text(),t=n.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&"),i=this.search_contains?"":"^",s=new RegExp(i+t,"i"),c=new RegExp(t,"i"),u=this.results_data,a=0,_=u.length;_>a;a++)e=u[a],e.search_match=!1,o=null,this.include_option_in_results(e)&&(e.group&&(e.group_match=!1,e.active_options=0),null!=e.group_array_index&&this.results_data[e.group_array_index]&&(o=this.results_data[e.group_array_index],0===o.active_options&&o.search_match&&(r+=1),o.active_options+=1),(!e.group||this.group_search)&&(e.search_text=e.group?e.label:e.html,e.search_match=this.search_string_match(e.search_text,s),e.search_match&&!e.group&&(r+=1),e.search_match?(n.length&&(h=e.search_text.search(c),l=e.search_text.substr(0,h+n.length)+"</em>"+e.search_text.substr(h+n.length),e.search_text=l.substr(0,h)+"<em>"+l.substr(h)),null!=o&&(o.group_match=!0)):null!=e.group_array_index&&this.results_data[e.group_array_index].search_match&&(e.search_match=!0)));return this.result_clear_highlight(),1>r&&n.length?(this.update_results_content(""),this.no_results(n)):(this.update_results_content(this.results_option_build()),this.winnow_results_set_highlight())},t.prototype.search_string_match=function(t,e){var s,i,r,o;if(e.test(t))return!0;if(this.enable_split_word_search&&(t.indexOf(" ")>=0||0===t.indexOf("["))&&(i=t.replace(/\[|\]/g,"").split(" "),i.length))for(r=0,o=i.length;o>r;r++)if(s=i[r],e.test(s))return!0},t.prototype.choices_count=function(){var t,e,s,i;if(null!=this.selected_option_count)return this.selected_option_count;for(this.selected_option_count=0,i=this.form_field.options,e=0,s=i.length;s>e;e++)t=i[e],t.selected&&(this.selected_option_count+=1);return this.selected_option_count},t.prototype.choices_click=function(t){return t.preventDefault(),this.results_showing||this.is_disabled?void 0:this.results_show()},t.prototype.keyup_checker=function(t){var e,s;switch(e=null!=(s=t.which)?s:t.keyCode,this.search_field_scale(),e){case 8:if(this.is_multiple&&this.backstroke_length<1&&this.choices_count()>0)return this.keydown_backstroke();if(!this.pending_backstroke)return this.result_clear_highlight(),this.results_search();break;case 13:if(t.preventDefault(),this.results_showing)return this.result_select(t);break;case 27:return this.results_showing&&this.results_hide(),!0;case 9:case 38:case 40:case 16:case 91:case 17:break;default:return this.results_search()}},t.prototype.clipboard_event_checker=function(t){var e=this;return setTimeout(function(){return e.results_search()},50)},t.prototype.container_width=function(){return null!=this.options.width?this.options.width:""+this.form_field.offsetWidth+"px"},t.prototype.include_option_in_results=function(t){return!(this.is_multiple&&!this.display_selected_options&&t.selected)&&(!(!this.display_disabled_options&&t.disabled)&&!t.empty)},t.prototype.search_results_touchstart=function(t){return this.touch_started=!0,this.search_results_mouseover(t)},t.prototype.search_results_touchmove=function(t){return this.touch_started=!1,this.search_results_mouseout(t)},t.prototype.search_results_touchend=function(t){return this.touch_started?this.search_results_mouseup(t):void 0},t.prototype.outerHTML=function(t){var e;return t.outerHTML?t.outerHTML:(e=document.createElement("div"),e.appendChild(t),e.innerHTML)},t.browser_is_supported=function(){return"Microsoft Internet Explorer"===window.navigator.appName?document.documentMode>=8:!/iP(od|hone)/i.test(window.navigator.userAgent)&&(!/Android/i.test(window.navigator.userAgent)||!/Mobile/i.test(window.navigator.userAgent))},t.default_multiple_text="Select Some Options",t.default_single_text="Select an Option",t.default_no_result_text="No results match",t}(),t=jQuery,t.fn.extend({chosen:function(i){return e.browser_is_supported()?this.each(function(e){var r,o;r=t(this),o=r.data("chosen"),"destroy"===i&&o?o.destroy():o||r.data("chosen",new s(this,i))}):this}}),s=function(e){function s(){return r=s.__super__.constructor.apply(this,arguments)}return n(s,e),s.prototype.setup=function(){return this.form_field_jq=t(this.form_field),this.current_selectedIndex=this.form_field.selectedIndex,this.is_rtl=this.form_field_jq.hasClass("chosen-rtl")},s.prototype.set_up_html=function(){var e,s;return e=["chosen-container"],e.push("chosen-container-"+(this.is_multiple?"multi":"single")),this.inherit_select_classes&&this.form_field.className&&e.push(this.form_field.className),this.is_rtl&&e.push("chosen-rtl"),s={class:e.join(" "),style:"width: "+this.container_width()+";",title:this.form_field.title},this.form_field.id.length&&(s.id=this.form_field.id.replace(/[^\w]/g,"_")+"_chosen"),this.container=t("<div />",s),this.is_multiple?this.container.html('<ul class="chosen-choices"><li class="search-field"><input type="text" value="'+this.default_text+'" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div>'):this.container.html('<a class="chosen-single chosen-default" tabindex="-1"><span>'+this.default_text+'</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" /></div><ul class="chosen-results"></ul></div>'),this.form_field_jq.hide().after(this.container),this.dropdown=this.container.find("div.chosen-drop").first(),this.search_field=this.container.find("input").first(),this.search_results=this.container.find("ul.chosen-results").first(),this.search_field_scale(),this.search_no_results=this.container.find("li.no-results").first(),this.is_multiple?(this.search_choices=this.container.find("ul.chosen-choices").first(),this.search_container=this.container.find("li.search-field").first()):(this.search_container=this.container.find("div.chosen-search").first(),this.selected_item=this.container.find(".chosen-single").first()),this.results_build(),this.set_tab_index(),this.set_label_behavior(),this.form_field_jq.trigger("chosen:ready",{chosen:this})},s.prototype.register_observers=function(){var t=this;return this.container.bind("mousedown.chosen",function(e){t.container_mousedown(e)}),this.container.bind("mouseup.chosen",function(e){t.container_mouseup(e)}),this.container.bind("mouseenter.chosen",function(e){t.mouse_enter(e)}),this.container.bind("mouseleave.chosen",function(e){t.mouse_leave(e)}),this.search_results.bind("mouseup.chosen",function(e){t.search_results_mouseup(e)}),this.search_results.bind("mouseover.chosen",function(e){t.search_results_mouseover(e)}),this.search_results.bind("mouseout.chosen",function(e){t.search_results_mouseout(e)}),this.search_results.bind("mousewheel.chosen DOMMouseScroll.chosen",function(e){t.search_results_mousewheel(e)}),this.search_results.bind("touchstart.chosen",function(e){t.search_results_touchstart(e)}),this.search_results.bind("touchmove.chosen",function(e){t.search_results_touchmove(e)}),this.search_results.bind("touchend.chosen",function(e){t.search_results_touchend(e)}),this.form_field_jq.bind("chosen:updated.chosen",function(e){t.results_update_field(e)}),this.form_field_jq.bind("chosen:activate.chosen",function(e){t.activate_field(e)}),this.form_field_jq.bind("chosen:open.chosen",function(e){t.container_mousedown(e)}),this.form_field_jq.bind("chosen:close.chosen",function(e){t.input_blur(e)}),this.search_field.bind("blur.chosen",function(e){t.input_blur(e)}),this.search_field.bind("keyup.chosen",function(e){t.keyup_checker(e)}),this.search_field.bind("keydown.chosen",function(e){t.keydown_checker(e)}),this.search_field.bind("focus.chosen",function(e){t.input_focus(e)}),this.search_field.bind("cut.chosen",function(e){t.clipboard_event_checker(e)}),this.search_field.bind("paste.chosen",function(e){t.clipboard_event_checker(e)}),this.is_multiple?this.search_choices.bind("click.chosen",function(e){t.choices_click(e)}):this.container.bind("click.chosen",function(t){t.preventDefault()})},s.prototype.destroy=function(){return t(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.search_field[0].tabIndex&&(this.form_field_jq[0].tabIndex=this.search_field[0].tabIndex),this.container.remove(),this.form_field_jq.removeData("chosen"),this.form_field_jq.show()},s.prototype.search_field_disabled=function(){return this.is_disabled=this.form_field_jq[0].disabled,this.is_disabled?(this.container.addClass("chosen-disabled"),this.search_field[0].disabled=!0,this.is_multiple||this.selected_item.unbind("focus.chosen",this.activate_action),this.close_field()):(this.container.removeClass("chosen-disabled"),this.search_field[0].disabled=!1,this.is_multiple?void 0:this.selected_item.bind("focus.chosen",this.activate_action))},s.prototype.container_mousedown=function(e){return this.is_disabled||(e&&"mousedown"===e.type&&!this.results_showing&&e.preventDefault(),null!=e&&t(e.target).hasClass("search-choice-close"))?void 0:(this.active_field?this.is_multiple||!e||t(e.target)[0]!==this.selected_item[0]&&!t(e.target).parents("a.chosen-single").length||(e.preventDefault(),this.results_toggle()):(this.is_multiple&&this.search_field.val(""),t(this.container[0].ownerDocument).bind("click.chosen",this.click_test_action),this.results_show()),this.activate_field())},s.prototype.container_mouseup=function(t){return"ABBR"!==t.target.nodeName||this.is_disabled?void 0:this.results_reset(t)},s.prototype.search_results_mousewheel=function(t){var e;return t.originalEvent&&(e=-t.originalEvent.wheelDelta||t.originalEvent.detail),null!=e?(t.preventDefault(),"DOMMouseScroll"===t.type&&(e*=40),this.search_results.scrollTop(e+this.search_results.scrollTop())):void 0},s.prototype.blur_test=function(t){return!this.active_field&&this.container.hasClass("chosen-container-active")?this.close_field():void 0},s.prototype.close_field=function(){return t(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.active_field=!1,this.results_hide(),this.container.removeClass("chosen-container-active"),this.clear_backstroke(),this.show_search_field_default(),this.search_field_scale()},s.prototype.activate_field=function(){return this.container.addClass("chosen-container-active"),this.active_field=!0,this.search_field.val(this.search_field.val()),this.search_field.focus()},s.prototype.test_active_click=function(e){var s;return s=t(e.target).closest(".chosen-container"),s.length&&this.container[0]===s[0]?this.active_field=!0:this.close_field()},s.prototype.results_build=function(){return this.parsing=!0,this.selected_option_count=null,this.results_data=i.select_to_array(this.form_field),this.is_multiple?this.search_choices.find("li.search-choice").remove():this.is_multiple||(this.single_set_selected_text(),this.disable_search||this.form_field.options.length<=this.disable_search_threshold?(this.search_field[0].readOnly=!0,this.container.addClass("chosen-container-single-nosearch")):(this.search_field[0].readOnly=!1,this.container.removeClass("chosen-container-single-nosearch"))),this.update_results_content(this.results_option_build({first:!0})),this.search_field_disabled(),this.show_search_field_default(),this.search_field_scale(),this.parsing=!1},s.prototype.result_do_highlight=function(t){var e,s,i,r,o;if(t.length){if(this.result_clear_highlight(),this.result_highlight=t,this.result_highlight.addClass("highlighted"),i=parseInt(this.search_results.css("maxHeight"),10),o=this.search_results.scrollTop(),r=i+o,s=this.result_highlight.position().top+this.search_results.scrollTop(),e=s+this.result_highlight.outerHeight(),e>=r)return this.search_results.scrollTop(e-i>0?e-i:0);if(o>s)return this.search_results.scrollTop(s)}},s.prototype.result_clear_highlight=function(){return this.result_highlight&&this.result_highlight.removeClass("highlighted"),this.result_highlight=null},s.prototype.results_show=function(){return this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.container.addClass("chosen-with-drop"),this.results_showing=!0,this.search_field.focus(),this.search_field.val(this.search_field.val()),this.winnow_results(),this.form_field_jq.trigger("chosen:showing_dropdown",{chosen:this}))},s.prototype.update_results_content=function(t){return this.search_results.html(t)},s.prototype.results_hide=function(){return this.results_showing&&(this.result_clear_highlight(),this.container.removeClass("chosen-with-drop"),this.form_field_jq.trigger("chosen:hiding_dropdown",{chosen:this})),this.results_showing=!1},s.prototype.set_tab_index=function(t){var e;return this.form_field.tabIndex?(e=this.form_field.tabIndex,this.form_field.tabIndex=-1,this.search_field[0].tabIndex=e):void 0},s.prototype.set_label_behavior=function(){var e=this;return this.form_field_label=this.form_field_jq.parents("label"),!this.form_field_label.length&&this.form_field.id.length&&(this.form_field_label=t("label[for='"+this.form_field.id+"']")),this.form_field_label.length>0?this.form_field_label.bind("click.chosen",function(t){return e.is_multiple?e.container_mousedown(t):e.activate_field()}):void 0},s.prototype.show_search_field_default=function(){return this.is_multiple&&this.choices_count()<1&&!this.active_field?(this.search_field.val(this.default_text),this.search_field.addClass("default")):(this.search_field.val(""),this.search_field.removeClass("default"))},s.prototype.search_results_mouseup=function(e){var s;return s=t(e.target).hasClass("active-result")?t(e.target):t(e.target).parents(".active-result").first(),s.length?(this.result_highlight=s,this.result_select(e),this.search_field.focus()):void 0},s.prototype.search_results_mouseover=function(e){var s;return s=t(e.target).hasClass("active-result")?t(e.target):t(e.target).parents(".active-result").first(),s?this.result_do_highlight(s):void 0},s.prototype.search_results_mouseout=function(e){return t(e.target).hasClass("active-result")?this.result_clear_highlight():void 0},s.prototype.choice_build=function(e){var s,i,r=this;return s=t("<li />",{class:"search-choice"}).html("<span>"+e.html+"</span>"),e.disabled?s.addClass("search-choice-disabled"):(i=t("<a />",{class:"search-choice-close","data-option-array-index":e.array_index}),i.bind("click.chosen",function(t){return r.choice_destroy_link_click(t)}),s.append(i)),this.search_container.before(s)},s.prototype.choice_destroy_link_click=function(e){return e.preventDefault(),e.stopPropagation(),this.is_disabled?void 0:this.choice_destroy(t(e.target))},s.prototype.choice_destroy=function(t){return this.result_deselect(t[0].getAttribute("data-option-array-index"))?(this.show_search_field_default(),this.is_multiple&&this.choices_count()>0&&this.search_field.val().length<1&&this.results_hide(),t.parents("li").first().remove(),this.search_field_scale()):void 0},s.prototype.results_reset=function(){return this.reset_single_select_options(),this.form_field.options[0].selected=!0,this.single_set_selected_text(),this.show_search_field_default(),this.results_reset_cleanup(),this.form_field_jq.trigger("change"),this.active_field?this.results_hide():void 0},s.prototype.results_reset_cleanup=function(){return this.current_selectedIndex=this.form_field.selectedIndex,this.selected_item.find("abbr").remove()},s.prototype.result_select=function(t){var e,s;return this.result_highlight?(e=this.result_highlight,this.result_clear_highlight(),this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.is_multiple?e.removeClass("active-result"):this.reset_single_select_options(),s=this.results_data[e[0].getAttribute("data-option-array-index")],s.selected=!0,this.form_field.options[s.options_index].selected=!0,this.selected_option_count=null,this.is_multiple?this.choice_build(s):this.single_set_selected_text(s.text),(t.metaKey||t.ctrlKey)&&this.is_multiple||this.results_hide(),this.search_field.val(""),(this.is_multiple||this.form_field.selectedIndex!==this.current_selectedIndex)&&this.form_field_jq.trigger("change",{selected:this.form_field.options[s.options_index].value}),this.current_selectedIndex=this.form_field.selectedIndex,this.search_field_scale())):void 0},s.prototype.single_set_selected_text=function(t){return null==t&&(t=this.default_text),t===this.default_text?this.selected_item.addClass("chosen-default"):(this.single_deselect_control_build(),this.selected_item.removeClass("chosen-default")),this.selected_item.find("span").text(t)},s.prototype.result_deselect=function(t){var e;return e=this.results_data[t],!this.form_field.options[e.options_index].disabled&&(e.selected=!1,this.form_field.options[e.options_index].selected=!1,this.selected_option_count=null,this.result_clear_highlight(),this.results_showing&&this.winnow_results(),this.form_field_jq.trigger("change",{deselected:this.form_field.options[e.options_index].value}),this.search_field_scale(),!0)},s.prototype.single_deselect_control_build=function(){return this.allow_single_deselect?(this.selected_item.find("abbr").length||this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>'),this.selected_item.addClass("chosen-single-with-deselect")):void 0},s.prototype.get_search_text=function(){return this.search_field.val()===this.default_text?"":t("<div/>").text(t.trim(this.search_field.val())).html()},s.prototype.winnow_results_set_highlight=function(){var t,e;return e=this.is_multiple?[]:this.search_results.find(".result-selected.active-result"),t=e.length?e.first():this.search_results.find(".active-result").first(),null!=t?this.result_do_highlight(t):void 0},s.prototype.no_results=function(e){var s;return s=t('<li class="no-results">'+this.results_none_found+' "<span></span>"</li>'),s.find("span").first().html(e),this.search_results.append(s),this.form_field_jq.trigger("chosen:no_results",{chosen:this})},s.prototype.no_results_clear=function(){return this.search_results.find(".no-results").remove()},s.prototype.keydown_arrow=function(){var t;return this.results_showing&&this.result_highlight?(t=this.result_highlight.nextAll("li.active-result").first())?this.result_do_highlight(t):void 0:this.results_show()},s.prototype.keyup_arrow=function(){var t;return this.results_showing||this.is_multiple?this.result_highlight?(t=this.result_highlight.prevAll("li.active-result"),t.length?this.result_do_highlight(t.first()):(this.choices_count()>0&&this.results_hide(),this.result_clear_highlight())):void 0:this.results_show()},s.prototype.keydown_backstroke=function(){var t;return this.pending_backstroke?(this.choice_destroy(this.pending_backstroke.find("a").first()),this.clear_backstroke()):(t=this.search_container.siblings("li.search-choice").last(),t.length&&!t.hasClass("search-choice-disabled")?(this.pending_backstroke=t,this.single_backstroke_delete?this.keydown_backstroke():this.pending_backstroke.addClass("search-choice-focus")):void 0)},s.prototype.clear_backstroke=function(){return this.pending_backstroke&&this.pending_backstroke.removeClass("search-choice-focus"),this.pending_backstroke=null},s.prototype.keydown_checker=function(t){var e,s;switch(e=null!=(s=t.which)?s:t.keyCode,this.search_field_scale(),8!==e&&this.pending_backstroke&&this.clear_backstroke(),e){case 8:this.backstroke_length=this.search_field.val().length;break;case 9:this.results_showing&&!this.is_multiple&&this.result_select(t),this.mouse_on_container=!1;break;case 13:t.preventDefault();break;case 38:t.preventDefault(),this.keyup_arrow();break;case 40:t.preventDefault(),this.keydown_arrow()}},s.prototype.search_field_scale=function(){var e,s,i,r,o,n,h,l,c;if(this.is_multiple){for(i=0,h=0,o="position:absolute; left: -1000px; top: -1000px; display:none;",n=["font-size","font-style","font-weight","font-family","line-height","text-transform","letter-spacing"],l=0,c=n.length;c>l;l++)r=n[l],o+=r+":"+this.search_field.css(r)+";";return e=t("<div />",{style:o}),e.text(this.search_field.val()),t("body").append(e),h=e.width()+25,e.remove(),s=this.container.outerWidth(),h>s-10&&(h=s-10),this.search_field.css({width:h+"px"})}},s}(e)}).call(this),$(function(){"use strict";$(".chosen-select").chosen(),$(".chosen-search").append('<i class="glyph-icon icon-search"></i>'),$(".chosen-single div").html('<i class="glyph-icon icon-caret-down"></i>')})</script>
        <script>var count=parseInt($('#hdnSession-opportunity-count').val(),10);$(function(){$("#dynamic-degree-entry-btn").click(function(){$("<div class=panel> <h3 class='panel-body title-hero'> Opportunity "+count+": </h3> <div class='form-group remove-border'> <label class='control-label col-md-2'>Degree Type Needed</label> <div class=col-md-3> <select class=chosen-select name='type"+count+"' value=''> <optgroup label=Batchelor> <option>BS</option> <option>BE</option> </optgroup> <optgroup label=Masters> <option>MS</option> </optgroup> <optgroup label=P.H.D> <option>PHD</option> </optgroup> </select> </div> <label class='control-label col-md-2'>Degree Specification Needed</label> <div class=col-md-4> <select class=chosen-select name='spec"+count+"' value=''> <optgroup label=Science> <option>Computer Science</option> <option>Information Technology</option> </optgroup> <optgroup label=Engeniering> <option>Computer Engeniering</option> </optgroup> <optgroup label=Buissness> <option>Buissness Management</option> </optgroup> </select> </div> </div> <div class=form-group> <label class='control-label col-md-2'>Minimum Grade</label> <div class=col-md-2> <select class=form-control name='grade"+count+"' value=''> <option>1st</option><option>2:1</option><option>2:2</option><option>2nd</option><option>3rd</option></select> </div> </div> <div class=form-group> <label class='control-label col-sm-2'>Vacancies</label> <div class=col-sm-3> <input class=form-control id=touchspin-demo-3  name='slots"+count+"' value=''> </div> </div> </div> ")
		.insertBefore("#dynamic-degree-entry-div"),count++,$("#hdnSession-opportunity-count").val(count),function(){var t,e,s,i,o,n={}.hasOwnProperty,r=function(t,e){function s(){this.constructor=t}for(var i in e)n.call(e,i)&&(t[i]=e[i]);return s.prototype=e.prototype,t.prototype=new s,t.__super__=e.prototype,t};i=function(){function t(){this.options_index=0,this.parsed=[]}return t.prototype.add_node=function(t){return"OPTGROUP"===t.nodeName.toUpperCase()?this.add_group(t):this.add_option(t)},t.prototype.add_group=function(t){var e,s,i,o,n,r;for(e=this.parsed.length,this.parsed.push({array_index:e,group:!0,label:this.escapeExpression(t.label),children:0,disabled:t.disabled}),n=t.childNodes,r=[],i=0,o=n.length;o>i;i++)s=n[i],r.push(this.add_option(s,e,t.disabled));return r},t.prototype.add_option=function(t,e,s){return"OPTION"===t.nodeName.toUpperCase()?(""!==t.text?(null!=e&&(this.parsed[e].children+=1),this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,value:t.value,text:t.text,html:t.innerHTML,selected:t.selected,disabled:s===!0?s:t.disabled,group_array_index:e,classes:t.className,style:t.style.cssText})):this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,empty:!0}),this.options_index+=1):void 0},t.prototype.escapeExpression=function(t){var e,s;return null==t||t===!1?"":/[\&\<\>\"\'\`]/.test(t)?(e={"<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},s=/&(?!\w+;)|[\<\>\"\'\`]/g,t.replace(s,function(t){return e[t]||"&amp;"})):t},t}(),i.select_to_array=function(t){var e,s,o,n,r;for(s=new i,r=t.childNodes,o=0,n=r.length;n>o;o++)e=r[o],s.add_node(e);return s.parsed},e=function(){function t(e,s){this.form_field=e,this.options=null!=s?s:{},t.browser_is_supported()&&(this.is_multiple=this.form_field.multiple,this.set_default_text(),this.set_default_values(),this.setup(),this.set_up_html(),this.register_observers())}return t.prototype.set_default_values=function(){var t=this;return this.click_test_action=function(e){return t.test_active_click(e)},this.activate_action=function(e){return t.activate_field(e)},this.active_field=!1,this.mouse_on_container=!1,this.results_showing=!1,this.result_highlighted=null,this.allow_single_deselect=null!=this.options.allow_single_deselect&&null!=this.form_field.options[0]&&""===this.form_field.options[0].text&&this.options.allow_single_deselect,this.disable_search_threshold=this.options.disable_search_threshold||0,this.disable_search=this.options.disable_search||!1,this.enable_split_word_search=null==this.options.enable_split_word_search||this.options.enable_split_word_search,this.group_search=null==this.options.group_search||this.options.group_search,this.search_contains=this.options.search_contains||!1,this.single_backstroke_delete=null==this.options.single_backstroke_delete||this.options.single_backstroke_delete,this.max_selected_options=this.options.max_selected_options||1/0,this.inherit_select_classes=this.options.inherit_select_classes||!1,this.display_selected_options=null==this.options.display_selected_options||this.options.display_selected_options,this.display_disabled_options=null==this.options.display_disabled_options||this.options.display_disabled_options},t.prototype.set_default_text=function(){return this.form_field.getAttribute("data-placeholder")?this.default_text=this.form_field.getAttribute("data-placeholder"):this.is_multiple?this.default_text=this.options.placeholder_text_multiple||this.options.placeholder_text||t.default_multiple_text:this.default_text=this.options.placeholder_text_single||this.options.placeholder_text||t.default_single_text,this.results_none_found=this.form_field.getAttribute("data-no_results_text")||this.options.no_results_text||t.default_no_result_text},t.prototype.mouse_enter=function(){return this.mouse_on_container=!0},t.prototype.mouse_leave=function(){return this.mouse_on_container=!1},t.prototype.input_focus=function(t){var e=this;if(this.is_multiple){if(!this.active_field)return setTimeout(function(){return e.container_mousedown()},50)}else if(!this.active_field)return this.activate_field()},t.prototype.input_blur=function(t){var e=this;return this.mouse_on_container?void 0:(this.active_field=!1,setTimeout(function(){return e.blur_test()},100))},t.prototype.results_option_build=function(t){var e,s,i,o,n;for(e="",n=this.results_data,i=0,o=n.length;o>i;i++)s=n[i],e+=s.group?this.result_add_group(s):this.result_add_option(s),(null!=t?t.first:void 0)&&(s.selected&&this.is_multiple?this.choice_build(s):s.selected&&!this.is_multiple&&this.single_set_selected_text(s.text));return e},t.prototype.result_add_option=function(t){var e,s;return t.search_match&&this.include_option_in_results(t)?(e=[],t.disabled||t.selected&&this.is_multiple||e.push("active-result"),!t.disabled||t.selected&&this.is_multiple||e.push("disabled-result"),t.selected&&e.push("result-selected"),null!=t.group_array_index&&e.push("group-option"),""!==t.classes&&e.push(t.classes),s=document.createElement("li"),s.className=e.join(" "),s.style.cssText=t.style,s.setAttribute("data-option-array-index",t.array_index),s.innerHTML=t.search_text,this.outerHTML(s)):""},t.prototype.result_add_group=function(t){var e;return(t.search_match||t.group_match)&&t.active_options>0?(e=document.createElement("li"),e.className="group-result",e.innerHTML=t.search_text,this.outerHTML(e)):""},t.prototype.results_update_field=function(){return this.set_default_text(),this.is_multiple||this.results_reset_cleanup(),this.result_clear_highlight(),this.results_build(),this.results_showing?this.winnow_results():void 0},t.prototype.reset_single_select_options=function(){var t,e,s,i,o;for(i=this.results_data,o=[],e=0,s=i.length;s>e;e++)t=i[e],t.selected?o.push(t.selected=!1):o.push(void 0);return o},t.prototype.results_toggle=function(){return this.results_showing?this.results_hide():this.results_show()},t.prototype.results_search=function(t){return this.results_showing?this.winnow_results():this.results_show()},t.prototype.winnow_results=function(){var t,e,s,i,o,n,r,l,a,c,h,u,p;for(this.no_results_clear(),o=0,r=this.get_search_text(),t=r.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&"),i=this.search_contains?"":"^",s=new RegExp(i+t,"i"),c=new RegExp(t,"i"),p=this.results_data,h=0,u=p.length;u>h;h++)e=p[h],e.search_match=!1,n=null,this.include_option_in_results(e)&&(e.group&&(e.group_match=!1,e.active_options=0),null!=e.group_array_index&&this.results_data[e.group_array_index]&&(n=this.results_data[e.group_array_index],0===n.active_options&&n.search_match&&(o+=1),n.active_options+=1),(!e.group||this.group_search)&&(e.search_text=e.group?e.label:e.html,e.search_match=this.search_string_match(e.search_text,s),e.search_match&&!e.group&&(o+=1),e.search_match?(r.length&&(l=e.search_text.search(c),a=e.search_text.substr(0,l+r.length)+"</em>"+e.search_text.substr(l+r.length),e.search_text=a.substr(0,l)+"<em>"+a.substr(l)),null!=n&&(n.group_match=!0)):null!=e.group_array_index&&this.results_data[e.group_array_index].search_match&&(e.search_match=!0)));return this.result_clear_highlight(),1>o&&r.length?(this.update_results_content(""),this.no_results(r)):(this.update_results_content(this.results_option_build()),this.winnow_results_set_highlight())},t.prototype.search_string_match=function(t,e){var s,i,o,n;if(e.test(t))return!0;if(this.enable_split_word_search&&(t.indexOf(" ")>=0||0===t.indexOf("["))&&(i=t.replace(/\[|\]/g,"").split(" "),i.length))for(o=0,n=i.length;n>o;o++)if(s=i[o],e.test(s))return!0},t.prototype.choices_count=function(){var t,e,s,i;if(null!=this.selected_option_count)return this.selected_option_count;for(this.selected_option_count=0,i=this.form_field.options,e=0,s=i.length;s>e;e++)t=i[e],t.selected&&(this.selected_option_count+=1);return this.selected_option_count},t.prototype.choices_click=function(t){return t.preventDefault(),this.results_showing||this.is_disabled?void 0:this.results_show()},t.prototype.keyup_checker=function(t){var e,s;switch(e=null!=(s=t.which)?s:t.keyCode,this.search_field_scale(),e){case 8:if(this.is_multiple&&this.backstroke_length<1&&this.choices_count()>0)return this.keydown_backstroke();if(!this.pending_backstroke)return this.result_clear_highlight(),this.results_search();break;case 13:if(t.preventDefault(),this.results_showing)return this.result_select(t);break;case 27:return this.results_showing&&this.results_hide(),!0;case 9:case 38:case 40:case 16:case 91:case 17:break;default:return this.results_search()}},t.prototype.clipboard_event_checker=function(t){var e=this;return setTimeout(function(){return e.results_search()},50)},t.prototype.container_width=function(){return null!=this.options.width?this.options.width:""+this.form_field.offsetWidth+"px"},t.prototype.include_option_in_results=function(t){return!(this.is_multiple&&!this.display_selected_options&&t.selected)&&(!(!this.display_disabled_options&&t.disabled)&&!t.empty)},t.prototype.search_results_touchstart=function(t){return this.touch_started=!0,this.search_results_mouseover(t)},t.prototype.search_results_touchmove=function(t){return this.touch_started=!1,this.search_results_mouseout(t)},t.prototype.search_results_touchend=function(t){return this.touch_started?this.search_results_mouseup(t):void 0},t.prototype.outerHTML=function(t){var e;return t.outerHTML?t.outerHTML:(e=document.createElement("div"),e.appendChild(t),e.innerHTML)},t.browser_is_supported=function(){return"Microsoft Internet Explorer"===window.navigator.appName?document.documentMode>=8:!/iP(od|hone)/i.test(window.navigator.userAgent)&&(!/Android/i.test(window.navigator.userAgent)||!/Mobile/i.test(window.navigator.userAgent))},t.default_multiple_text="Select Some Options",t.default_single_text="Select an Option",t.default_no_result_text="No results match",t}(),t=jQuery,t.fn.extend({chosen:function(i){return e.browser_is_supported()?this.each(function(e){var o,n;o=t(this),n=o.data("chosen"),"destroy"===i&&n?n.destroy():n||o.data("chosen",new s(this,i))}):this}}),s=function(e){function s(){return o=s.__super__.constructor.apply(this,arguments)}return r(s,e),s.prototype.setup=function(){return this.form_field_jq=t(this.form_field),this.current_selectedIndex=this.form_field.selectedIndex,this.is_rtl=this.form_field_jq.hasClass("chosen-rtl")},s.prototype.set_up_html=function(){var e,s;return e=["chosen-container"],e.push("chosen-container-"+(this.is_multiple?"multi":"single")),this.inherit_select_classes&&this.form_field.className&&e.push(this.form_field.className),this.is_rtl&&e.push("chosen-rtl"),s={class:e.join(" "),style:"width: "+this.container_width()+";",title:this.form_field.title},this.form_field.id.length&&(s.id=this.form_field.id.replace(/[^\w]/g,"_")+"_chosen"),this.container=t("<div />",s),this.is_multiple?this.container.html('<ul class="chosen-choices"><li class="search-field"><input type="text" value="'+this.default_text+'" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div>'):this.container.html('<a class="chosen-single chosen-default" tabindex="-1"><span>'+this.default_text+'</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" /></div><ul class="chosen-results"></ul></div>'),this.form_field_jq.hide().after(this.container),this.dropdown=this.container.find("div.chosen-drop").first(),this.search_field=this.container.find("input").first(),this.search_results=this.container.find("ul.chosen-results").first(),this.search_field_scale(),this.search_no_results=this.container.find("li.no-results").first(),this.is_multiple?(this.search_choices=this.container.find("ul.chosen-choices").first(),this.search_container=this.container.find("li.search-field").first()):(this.search_container=this.container.find("div.chosen-search").first(),this.selected_item=this.container.find(".chosen-single").first()),this.results_build(),this.set_tab_index(),this.set_label_behavior(),this.form_field_jq.trigger("chosen:ready",{chosen:this})},s.prototype.register_observers=function(){var t=this;return this.container.bind("mousedown.chosen",function(e){t.container_mousedown(e)}),this.container.bind("mouseup.chosen",function(e){t.container_mouseup(e)}),this.container.bind("mouseenter.chosen",function(e){t.mouse_enter(e)}),this.container.bind("mouseleave.chosen",function(e){t.mouse_leave(e)}),this.search_results.bind("mouseup.chosen",function(e){t.search_results_mouseup(e)}),this.search_results.bind("mouseover.chosen",function(e){t.search_results_mouseover(e)}),this.search_results.bind("mouseout.chosen",function(e){t.search_results_mouseout(e)}),this.search_results.bind("mousewheel.chosen DOMMouseScroll.chosen",function(e){t.search_results_mousewheel(e)}),this.search_results.bind("touchstart.chosen",function(e){t.search_results_touchstart(e)}),this.search_results.bind("touchmove.chosen",function(e){t.search_results_touchmove(e)}),this.search_results.bind("touchend.chosen",function(e){t.search_results_touchend(e)}),this.form_field_jq.bind("chosen:updated.chosen",function(e){t.results_update_field(e)}),this.form_field_jq.bind("chosen:activate.chosen",function(e){t.activate_field(e)}),this.form_field_jq.bind("chosen:open.chosen",function(e){t.container_mousedown(e)}),this.form_field_jq.bind("chosen:close.chosen",function(e){t.input_blur(e)}),this.search_field.bind("blur.chosen",function(e){t.input_blur(e)}),this.search_field.bind("keyup.chosen",function(e){t.keyup_checker(e)}),this.search_field.bind("keydown.chosen",function(e){t.keydown_checker(e)}),this.search_field.bind("focus.chosen",function(e){t.input_focus(e)}),this.search_field.bind("cut.chosen",function(e){t.clipboard_event_checker(e)}),this.search_field.bind("paste.chosen",function(e){t.clipboard_event_checker(e)}),this.is_multiple?this.search_choices.bind("click.chosen",function(e){t.choices_click(e)}):this.container.bind("click.chosen",function(t){t.preventDefault()})},s.prototype.destroy=function(){return t(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.search_field[0].tabIndex&&(this.form_field_jq[0].tabIndex=this.search_field[0].tabIndex),this.container.remove(),this.form_field_jq.removeData("chosen"),this.form_field_jq.show()},s.prototype.search_field_disabled=function(){return this.is_disabled=this.form_field_jq[0].disabled,this.is_disabled?(this.container.addClass("chosen-disabled"),this.search_field[0].disabled=!0,this.is_multiple||this.selected_item.unbind("focus.chosen",this.activate_action),this.close_field()):(this.container.removeClass("chosen-disabled"),this.search_field[0].disabled=!1,this.is_multiple?void 0:this.selected_item.bind("focus.chosen",this.activate_action))},s.prototype.container_mousedown=function(e){return this.is_disabled||(e&&"mousedown"===e.type&&!this.results_showing&&e.preventDefault(),null!=e&&t(e.target).hasClass("search-choice-close"))?void 0:(this.active_field?this.is_multiple||!e||t(e.target)[0]!==this.selected_item[0]&&!t(e.target).parents("a.chosen-single").length||(e.preventDefault(),this.results_toggle()):(this.is_multiple&&this.search_field.val(""),t(this.container[0].ownerDocument).bind("click.chosen",this.click_test_action),this.results_show()),this.activate_field())},s.prototype.container_mouseup=function(t){return"ABBR"!==t.target.nodeName||this.is_disabled?void 0:this.results_reset(t)},s.prototype.search_results_mousewheel=function(t){var e;return t.originalEvent&&(e=-t.originalEvent.wheelDelta||t.originalEvent.detail),null!=e?(t.preventDefault(),"DOMMouseScroll"===t.type&&(e*=40),this.search_results.scrollTop(e+this.search_results.scrollTop())):void 0},s.prototype.blur_test=function(t){return!this.active_field&&this.container.hasClass("chosen-container-active")?this.close_field():void 0},s.prototype.close_field=function(){return t(this.container[0].ownerDocument).unbind("click.chosen",this.click_test_action),this.active_field=!1,this.results_hide(),this.container.removeClass("chosen-container-active"),this.clear_backstroke(),this.show_search_field_default(),this.search_field_scale()},s.prototype.activate_field=function(){return this.container.addClass("chosen-container-active"),this.active_field=!0,this.search_field.val(this.search_field.val()),this.search_field.focus()},s.prototype.test_active_click=function(e){var s;return s=t(e.target).closest(".chosen-container"),s.length&&this.container[0]===s[0]?this.active_field=!0:this.close_field()},s.prototype.results_build=function(){return this.parsing=!0,this.selected_option_count=null,this.results_data=i.select_to_array(this.form_field),this.is_multiple?this.search_choices.find("li.search-choice").remove():this.is_multiple||(this.single_set_selected_text(),this.disable_search||this.form_field.options.length<=this.disable_search_threshold?(this.search_field[0].readOnly=!0,this.container.addClass("chosen-container-single-nosearch")):(this.search_field[0].readOnly=!1,this.container.removeClass("chosen-container-single-nosearch"))),this.update_results_content(this.results_option_build({first:!0})),this.search_field_disabled(),this.show_search_field_default(),this.search_field_scale(),this.parsing=!1},s.prototype.result_do_highlight=function(t){var e,s,i,o,n;if(t.length){if(this.result_clear_highlight(),this.result_highlight=t,this.result_highlight.addClass("highlighted"),i=parseInt(this.search_results.css("maxHeight"),10),n=this.search_results.scrollTop(),o=i+n,s=this.result_highlight.position().top+this.search_results.scrollTop(),e=s+this.result_highlight.outerHeight(),e>=o)return this.search_results.scrollTop(e-i>0?e-i:0);if(n>s)return this.search_results.scrollTop(s)}},s.prototype.result_clear_highlight=function(){return this.result_highlight&&this.result_highlight.removeClass("highlighted"),this.result_highlight=null},s.prototype.results_show=function(){return this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.container.addClass("chosen-with-drop"),this.results_showing=!0,this.search_field.focus(),this.search_field.val(this.search_field.val()),this.winnow_results(),this.form_field_jq.trigger("chosen:showing_dropdown",{chosen:this}))},s.prototype.update_results_content=function(t){return this.search_results.html(t)},s.prototype.results_hide=function(){return this.results_showing&&(this.result_clear_highlight(),this.container.removeClass("chosen-with-drop"),this.form_field_jq.trigger("chosen:hiding_dropdown",{chosen:this})),this.results_showing=!1},s.prototype.set_tab_index=function(t){var e;return this.form_field.tabIndex?(e=this.form_field.tabIndex,this.form_field.tabIndex=-1,this.search_field[0].tabIndex=e):void 0},s.prototype.set_label_behavior=function(){var e=this;return this.form_field_label=this.form_field_jq.parents("label"),!this.form_field_label.length&&this.form_field.id.length&&(this.form_field_label=t("label[for='"+this.form_field.id+"']")),this.form_field_label.length>0?this.form_field_label.bind("click.chosen",function(t){return e.is_multiple?e.container_mousedown(t):e.activate_field()}):void 0},s.prototype.show_search_field_default=function(){return this.is_multiple&&this.choices_count()<1&&!this.active_field?(this.search_field.val(this.default_text),this.search_field.addClass("default")):(this.search_field.val(""),this.search_field.removeClass("default"))},s.prototype.search_results_mouseup=function(e){var s;return s=t(e.target).hasClass("active-result")?t(e.target):t(e.target).parents(".active-result").first(),s.length?(this.result_highlight=s,this.result_select(e),this.search_field.focus()):void 0},s.prototype.search_results_mouseover=function(e){var s;return s=t(e.target).hasClass("active-result")?t(e.target):t(e.target).parents(".active-result").first(),s?this.result_do_highlight(s):void 0},s.prototype.search_results_mouseout=function(e){return t(e.target).hasClass("active-result")?this.result_clear_highlight():void 0},s.prototype.choice_build=function(e){var s,i,o=this;return s=t("<li />",{class:"search-choice"}).html("<span>"+e.html+"</span>"),e.disabled?s.addClass("search-choice-disabled"):(i=t("<a />",{class:"search-choice-close","data-option-array-index":e.array_index}),i.bind("click.chosen",function(t){return o.choice_destroy_link_click(t)}),s.append(i)),this.search_container.before(s)},s.prototype.choice_destroy_link_click=function(e){return e.preventDefault(),e.stopPropagation(),this.is_disabled?void 0:this.choice_destroy(t(e.target))},s.prototype.choice_destroy=function(t){return this.result_deselect(t[0].getAttribute("data-option-array-index"))?(this.show_search_field_default(),this.is_multiple&&this.choices_count()>0&&this.search_field.val().length<1&&this.results_hide(),t.parents("li").first().remove(),this.search_field_scale()):void 0},s.prototype.results_reset=function(){return this.reset_single_select_options(),this.form_field.options[0].selected=!0,this.single_set_selected_text(),this.show_search_field_default(),this.results_reset_cleanup(),this.form_field_jq.trigger("change"),this.active_field?this.results_hide():void 0},s.prototype.results_reset_cleanup=function(){return this.current_selectedIndex=this.form_field.selectedIndex,this.selected_item.find("abbr").remove()},s.prototype.result_select=function(t){var e,s;return this.result_highlight?(e=this.result_highlight,this.result_clear_highlight(),this.is_multiple&&this.max_selected_options<=this.choices_count()?(this.form_field_jq.trigger("chosen:maxselected",{chosen:this}),!1):(this.is_multiple?e.removeClass("active-result"):this.reset_single_select_options(),s=this.results_data[e[0].getAttribute("data-option-array-index")],s.selected=!0,this.form_field.options[s.options_index].selected=!0,this.selected_option_count=null,this.is_multiple?this.choice_build(s):this.single_set_selected_text(s.text),(t.metaKey||t.ctrlKey)&&this.is_multiple||this.results_hide(),this.search_field.val(""),(this.is_multiple||this.form_field.selectedIndex!==this.current_selectedIndex)&&this.form_field_jq.trigger("change",{selected:this.form_field.options[s.options_index].value}),this.current_selectedIndex=this.form_field.selectedIndex,this.search_field_scale())):void 0},s.prototype.single_set_selected_text=function(t){return null==t&&(t=this.default_text),t===this.default_text?this.selected_item.addClass("chosen-default"):(this.single_deselect_control_build(),this.selected_item.removeClass("chosen-default")),this.selected_item.find("span").text(t)},s.prototype.result_deselect=function(t){var e;return e=this.results_data[t],!this.form_field.options[e.options_index].disabled&&(e.selected=!1,this.form_field.options[e.options_index].selected=!1,this.selected_option_count=null,this.result_clear_highlight(),this.results_showing&&this.winnow_results(),this.form_field_jq.trigger("change",{deselected:this.form_field.options[e.options_index].value}),this.search_field_scale(),!0)},s.prototype.single_deselect_control_build=function(){return this.allow_single_deselect?(this.selected_item.find("abbr").length||this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>'),this.selected_item.addClass("chosen-single-with-deselect")):void 0},s.prototype.get_search_text=function(){return this.search_field.val()===this.default_text?"":t("<div/>").text(t.trim(this.search_field.val())).html()},s.prototype.winnow_results_set_highlight=function(){var t,e;return e=this.is_multiple?[]:this.search_results.find(".result-selected.active-result"),t=e.length?e.first():this.search_results.find(".active-result").first(),null!=t?this.result_do_highlight(t):void 0},s.prototype.no_results=function(e){var s;return s=t('<li class="no-results">'+this.results_none_found+' "<span></span>"</li>'),s.find("span").first().html(e),this.search_results.append(s),this.form_field_jq.trigger("chosen:no_results",{chosen:this})},s.prototype.no_results_clear=function(){return this.search_results.find(".no-results").remove()},s.prototype.keydown_arrow=function(){var t;return this.results_showing&&this.result_highlight?(t=this.result_highlight.nextAll("li.active-result").first())?this.result_do_highlight(t):void 0:this.results_show()},s.prototype.keyup_arrow=function(){var t;return this.results_showing||this.is_multiple?this.result_highlight?(t=this.result_highlight.prevAll("li.active-result"),t.length?this.result_do_highlight(t.first()):(this.choices_count()>0&&this.results_hide(),this.result_clear_highlight())):void 0:this.results_show()},s.prototype.keydown_backstroke=function(){var t;return this.pending_backstroke?(this.choice_destroy(this.pending_backstroke.find("a").first()),this.clear_backstroke()):(t=this.search_container.siblings("li.search-choice").last(),t.length&&!t.hasClass("search-choice-disabled")?(this.pending_backstroke=t,this.single_backstroke_delete?this.keydown_backstroke():this.pending_backstroke.addClass("search-choice-focus")):void 0)},s.prototype.clear_backstroke=function(){return this.pending_backstroke&&this.pending_backstroke.removeClass("search-choice-focus"),this.pending_backstroke=null},s.prototype.keydown_checker=function(t){var e,s;switch(e=null!=(s=t.which)?s:t.keyCode,this.search_field_scale(),8!==e&&this.pending_backstroke&&this.clear_backstroke(),e){case 8:this.backstroke_length=this.search_field.val().length;break;case 9:this.results_showing&&!this.is_multiple&&this.result_select(t),this.mouse_on_container=!1;break;case 13:t.preventDefault();break;case 38:t.preventDefault(),this.keyup_arrow();break;case 40:t.preventDefault(),this.keydown_arrow()}},s.prototype.search_field_scale=function(){var e,s,i,o,n,r,l,a,c;if(this.is_multiple){for(i=0,l=0,n="position:absolute; left: -1000px; top: -1000px; display:none;",r=["font-size","font-style","font-weight","font-family","line-height","text-transform","letter-spacing"],a=0,c=r.length;c>a;a++)o=r[a],n+=o+":"+this.search_field.css(o)+";";return e=t("<div />",{style:n}),e.text(this.search_field.val()),t("body").append(e),l=e.width()+25,e.remove(),s=this.container.outerWidth(),l>s-10&&(l=s-10),this.search_field.css({width:l+"px"})}},s}(e)}.call(this),$(function(){"use strict";$(".chosen-select").chosen(),$(".chosen-search").append('<i class="glyph-icon icon-search"></i>'),$(".chosen-single div").html('<i class="glyph-icon icon-caret-down"></i>')}),!function(t){"use strict";function e(t,e){return t+".touchspin_"+e}function s(s,i){return t.map(s,function(t){return e(t,i)})}var i=0;t.fn.TouchSpin=function(e){if("destroy"===e)return void this.each(function(){var e=t(this),i=e.data();t(document).off(s(["mouseup","touchend","touchcancel","mousemove","touchmove","scroll","scrollstart"],i.spinnerid).join(" "))});var o={min:0,max:100,initval:"",replacementval:"",step:1,decimals:0,stepinterval:100,forcestepdivisibility:"round",stepintervaldelay:500,verticalbuttons:!1,verticalupclass:"glyph-icon icon-chevron-up",verticaldownclass:"glyph-icon icon-chevron-down",prefix:"",postfix:"",prefix_extraclass:"",postfix_extraclass:"",booster:!0,boostat:10,maxboostedstep:!1,mousewheel:!0,buttondown_class:"btn btn-default",buttonup_class:"btn btn-default",buttondown_txt:"-",buttonup_txt:"+"},n={min:"min",max:"max",initval:"init-val",replacementval:"replacement-val",step:"step",decimals:"decimals",stepinterval:"step-interval",verticalbuttons:"vertical-buttons",verticalupclass:"vertical-up-class",verticaldownclass:"vertical-down-class",forcestepdivisibility:"force-step-divisibility",stepintervaldelay:"step-interval-delay",prefix:"prefix",postfix:"postfix",prefix_extraclass:"prefix-extra-class",postfix_extraclass:"postfix-extra-class",booster:"booster",boostat:"boostat",maxboostedstep:"max-boosted-step",mousewheel:"mouse-wheel",buttondown_class:"button-down-class",buttonup_class:"button-up-class",buttondown_txt:"button-down-txt",buttonup_txt:"button-up-txt"};return this.each(function(){function r(){if(!E.data("alreadyinitialized")){if(E.data("alreadyinitialized",!0),i+=1,E.data("spinnerid",i),!E.is("input"))return void console.log("Must be an input.");c(),l(),x(),p(),f(),m(),g(),v(),N.input.css("display","block")}}function l(){""!==M.initval&&""===E.val()&&E.val(M.initval)}function a(t){u(t),x();var e=N.input.val();""!==e&&(e=Number(N.input.val()),N.input.val(e.toFixed(M.decimals)))}function c(){M=t.extend({},o,P,h(),e)}function h(){var e={};return t.each(n,function(t,s){var i="bts-"+s;E.is("[data-"+i+"]")&&(e[t]=E.data(i))}),e}function u(e){M=t.extend({},M,e)}function p(){var t=E.val(),e=E.parent();""!==t&&(t=Number(t).toFixed(M.decimals)),E.data("initvalue",t).val(t),E.addClass("form-control"),e.hasClass("input-group")?d(e):_()}function d(e){e.addClass("bootstrap-touchspin");var s,i,o=E.prev(),n=E.next(),r='<span class="input-group-addon bootstrap-touchspin-prefix">'+M.prefix+"</span>",l='<span class="input-group-addon bootstrap-touchspin-postfix">'+M.postfix+"</span>";o.hasClass("input-group-btn")?(s='<button class="'+M.buttondown_class+' bootstrap-touchspin-down" type="button">'+M.buttondown_txt+"</button>",o.append(s)):(s='<span class="input-group-btn"><button class="'+M.buttondown_class+' bootstrap-touchspin-down" type="button">'+M.buttondown_txt+"</button></span>",t(s).insertBefore(E)),n.hasClass("input-group-btn")?(i='<button class="'+M.buttonup_class+' bootstrap-touchspin-up" type="button">'+M.buttonup_txt+"</button>",n.prepend(i)):(i='<span class="input-group-btn"><button class="'+M.buttonup_class+' bootstrap-touchspin-up" type="button">'+M.buttonup_txt+"</button></span>",t(i).insertAfter(E)),t(r).insertBefore(E),t(l).insertAfter(E),j=e}function _(){var e;e=M.verticalbuttons?'<div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix">'+M.prefix+'</span><span class="input-group-addon bootstrap-touchspin-postfix">'+M.postfix+'</span><span class="input-group-btn-vertical"><button class="'+M.buttondown_class+' bootstrap-touchspin-up" type="button"><i class="'+M.verticalupclass+'"></i></button><button class="'+M.buttonup_class+' bootstrap-touchspin-down" type="button"><i class="'+M.verticaldownclass+'"></i></button></span></div>':'<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="'+M.buttondown_class+' bootstrap-touchspin-down" type="button">'+M.buttondown_txt+'</button></span><span class="input-group-addon bootstrap-touchspin-prefix">'+M.prefix+'</span><span class="input-group-addon bootstrap-touchspin-postfix">'+M.postfix+'</span><span class="input-group-btn"><button class="'+M.buttonup_class+' bootstrap-touchspin-up" type="button">'+M.buttonup_txt+"</button></span></div>",
            j=t(e).insertBefore(E),t(".bootstrap-touchspin-prefix",j).after(E),E.hasClass("input-sm")?j.addClass("input-group-sm"):E.hasClass("input-lg")&&j.addClass("input-group-lg")}function f(){N={down:t(".bootstrap-touchspin-down",j),up:t(".bootstrap-touchspin-up",j),input:t("input",j),prefix:t(".bootstrap-touchspin-prefix",j).addClass(M.prefix_extraclass),postfix:t(".bootstrap-touchspin-postfix",j).addClass(M.postfix_extraclass)}}function m(){""===M.prefix&&N.prefix.hide(),""===M.postfix&&N.postfix.hide()}function g(){E.on("keydown",function(t){var e=t.keyCode||t.which;38===e?("up"!==B&&(w(),D()),t.preventDefault()):40===e&&("down"!==B&&(k(),C()),t.preventDefault())}),E.on("keyup",function(t){var e=t.keyCode||t.which;38===e?T():40===e&&T()}),E.on("blur",function(){x()}),N.down.on("keydown",function(t){var e=t.keyCode||t.which;(32===e||13===e)&&("down"!==B&&(k(),C()),t.preventDefault())}),N.down.on("keyup",function(t){var e=t.keyCode||t.which;(32===e||13===e)&&T()}),N.up.on("keydown",function(t){var e=t.keyCode||t.which;(32===e||13===e)&&("up"!==B&&(w(),D()),t.preventDefault())}),N.up.on("keyup",function(t){var e=t.keyCode||t.which;(32===e||13===e)&&T()}),N.down.on("mousedown.touchspin",function(t){N.down.off("touchstart.touchspin"),E.is(":disabled")||(k(),C(),t.preventDefault(),t.stopPropagation())}),N.down.on("touchstart.touchspin",function(t){N.down.off("mousedown.touchspin"),E.is(":disabled")||(k(),C(),t.preventDefault(),t.stopPropagation())}),N.up.on("mousedown.touchspin",function(t){N.up.off("touchstart.touchspin"),E.is(":disabled")||(w(),D(),t.preventDefault(),t.stopPropagation())}),N.up.on("touchstart.touchspin",function(t){N.up.off("mousedown.touchspin"),E.is(":disabled")||(w(),D(),t.preventDefault(),t.stopPropagation())}),N.up.on("mouseout touchleave touchend touchcancel",function(t){B&&(t.stopPropagation(),T())}),N.down.on("mouseout touchleave touchend touchcancel",function(t){B&&(t.stopPropagation(),T())}),N.down.on("mousemove touchmove",function(t){B&&(t.stopPropagation(),t.preventDefault())}),N.up.on("mousemove touchmove",function(t){B&&(t.stopPropagation(),t.preventDefault())}),t(document).on(s(["mouseup","touchend","touchcancel"],i).join(" "),function(t){B&&(t.preventDefault(),T())}),t(document).on(s(["mousemove","touchmove","scroll","scrollstart"],i).join(" "),function(t){B&&(t.preventDefault(),T())}),E.on("mousewheel DOMMouseScroll",function(t){if(M.mousewheel&&E.is(":focus")){var e=t.originalEvent.wheelDelta||-t.originalEvent.deltaY||-t.originalEvent.detail;t.stopPropagation(),t.preventDefault(),0>e?k():w()}})}function v(){E.on("touchspin.uponce",function(){T(),w()}),E.on("touchspin.downonce",function(){T(),k()}),E.on("touchspin.startupspin",function(){D()}),E.on("touchspin.startdownspin",function(){C()}),E.on("touchspin.stopspin",function(){T()}),E.on("touchspin.updatesettings",function(t,e){a(e)})}function b(t){switch(M.forcestepdivisibility){case"round":return(Math.round(t/M.step)*M.step).toFixed(M.decimals);case"floor":return(Math.floor(t/M.step)*M.step).toFixed(M.decimals);case"ceil":return(Math.ceil(t/M.step)*M.step).toFixed(M.decimals);default:return t}}function x(){var t,e,s;return t=E.val(),""===t?void(""!==M.replacementval&&(E.val(M.replacementval),E.trigger("change"))):void(M.decimals>0&&"."===t||(e=parseFloat(t),isNaN(e)&&(e=""!==M.replacementval?M.replacementval:0),s=e,e.toString()!==t&&(s=e),e<M.min&&(s=M.min),e>M.max&&(s=M.max),s=b(s),Number(t).toString()!==s.toString()&&(E.val(s),E.trigger("change"))))}function y(){if(M.booster){var t=Math.pow(2,Math.floor(O/M.boostat))*M.step;return M.maxboostedstep&&t>M.maxboostedstep&&(t=M.maxboostedstep,I=Math.round(I/t)*t),Math.max(M.step,t)}return M.step}function w(){x(),I=parseFloat(N.input.val()),isNaN(I)&&(I=0);var t=I,e=y();I+=e,I>M.max&&(I=M.max,E.trigger("touchspin.on.max"),T()),N.input.val(Number(I).toFixed(M.decimals)),t!==I&&E.trigger("change")}function k(){x(),I=parseFloat(N.input.val()),isNaN(I)&&(I=0);var t=I,e=y();I-=e,I<M.min&&(I=M.min,E.trigger("touchspin.on.min"),T()),N.input.val(I.toFixed(M.decimals)),t!==I&&E.trigger("change")}function C(){T(),O=0,B="down",E.trigger("touchspin.on.startspin"),E.trigger("touchspin.on.startdownspin"),$=setTimeout(function(){q=setInterval(function(){O++,k()},M.stepinterval)},M.stepintervaldelay)}function D(){T(),O=0,B="up",E.trigger("touchspin.on.startspin"),E.trigger("touchspin.on.startupspin"),A=setTimeout(function(){S=setInterval(function(){O++,w()},M.stepinterval)},M.stepintervaldelay)}function T(){switch(clearTimeout($),clearTimeout(A),clearInterval(q),clearInterval(S),B){case"up":E.trigger("touchspin.on.stopupspin"),E.trigger("touchspin.on.stopspin");break;case"down":E.trigger("touchspin.on.stopdownspin"),E.trigger("touchspin.on.stopspin")}O=0,B=!1}var M,j,N,I,q,S,$,A,E=t(this),P=E.data(),O=0,B=!1;r()})}}(jQuery),$(function(){"use strict";$("input[name='touchspin-demo-1']").TouchSpin({min:0,max:100,step:.1,decimals:2,boostat:5,maxboostedstep:10,postfix:"%"})}),$(function(){"use strict";$("input[name='touchspin-demo-2']").TouchSpin({min:-1e9,max:1e9,stepinterval:50,maxboostedstep:1e7,prefix:"$"})}),$(function(){"use strict";$("input[name='touchspin-demo-3']").TouchSpin({verticalbuttons:!0})}),$(function(){"use strict";$("input[name='touchspin-demo-4']").TouchSpin({verticalbuttons:!0,verticalupclass:"glyph-icon icon-plus",verticaldownclass:"glyph-icon icon-minus"})})})})
        </script>
        <script>var counter=2;$(function(){$("#dynamic-project-entry-btn").click(function(){$("<div class='panel'><h3 class='title-hero panel-body'>Project "+counter+":</h3><div class='form-group'><label class='col-md-2 control-label'>Project Tittle</label><div class='col-md-5'><input type='text' class='form-control' id='' placeholder='Experience title'></div><label class='col-md-2 control-label'>Project Type</label><div class='col-md-2'><select class='form-control'><option>Personal</option><option>Semester</option><option>Degree</option><option>Freelance</option></select></div></div><div class='form-group'><label class='col-md-2 control-label'>Skills Gained</label><div class='col-md-5'><textarea name='' rows='3' class='form-control textarea-autosize' placeholder='Mention your skills seperated by comma.'></textarea></div><label class='col-md-2 control-label'>Project Image:</label><div class='col-md-3'><div class='fileinput fileinput-new' data-provides='fileinput'><div class='fileinput-preview thumbnail' data-trigger='fileinput' style='width: 200px; height: 150px;'></div><div><span class='btn btn-default btn-file'><span class='fileinput-new'>Select image</span><span class='fileinput-exists'>Change</span><input type='file' name='...'></span><a href='view-profile.html#' class='btn btn-default fileinput-exists' data-dismiss='fileinput'>Remove</a></div></div></div></div></div>").insertBefore("#dynamic-project-entry-div"),counter++})})</script>