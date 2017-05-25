<?php session_start(); ?> 
<html lang=en>
    <head>
        <style>.spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner>div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes bouncedelay{0%,100%,80%{transform:scale(0);-webkit-transform:scale(0)}40%{transform:scale(1);-webkit-transform:scale(1)}}.row-bottom-margin{margin-bottom:10px}</style>
        <meta charset=UTF-8>
        <title>Recruitment Portal - Graduate</title>
        <meta content="Recruitment Portal"name=description>
        <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"name=viewport>
        <link href=../assets-minified/admin-all-demo.css rel=stylesheet>
        <script src=../assets-minified/js-core.js></script>
        <script>$(window).load(function(){setTimeout(function(){$("#loading").fadeOut(400,"linear")},300)})</script>
        <script>	$(document).ready(function(){
            $('#comboSelect').on('change', function() {
              if ( this.value == 'recruiter')
              //.....................^.......
              {$("#graduateDiv").hide();
                $("#recruiterDiv").show();
                
              }
              else
              {
                $("#recruiterDiv").hide();
                $("#graduateDiv").show();
            }
            });
            });
        </script>
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
        <link rel="stylesheet" type="text/css" href="../assets/widgets/input-switch/inputswitch.css">
        <script type="text/javascript" src="../assets/widgets/input-switch/inputswitch.js"></script>
        <script type="text/javascript">
            /* Input switch */
            
            $(function() { "use strict";
                $('.input-switch').bootstrapSwitch();
            });
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
                            <img alt="Profile image"src="../assets/image-resources/profile-picture/graduate/accountID.jpg" width=28>
                            <span><?php echo $_SESSION["graduate_name"] ?></span>
                            <i class="glyph-icon icon-angle-down"></i>
                            </a>
                            <div class="dropdown-menu float-left">
                                <div class=box-sm>
                                    <div class="clearfix login-box">
                                        <div class=user-img>
                                            <a href= # class=change-img>Change photo</a>
                                            <img alt=""src="../assets/image-resources/profile-picture/graduate/accountID.jpg">
                                        </div>
                                        <div class=user-info>
                                            <span>
                                            <?php echo $_SESSION["graduate_name"] ?>
                                            <i>Graduate Student</i>
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
                            <script src=../assets/widgets/datatable/datatable.js></script>
                            <script src=../assets/widgets/datatable/datatable-bootstrap.js></script>
                            <script src=../assets/widgets/datatable/datatable-tabletools.js></script>
                            <script>$(document).ready(function(){$("#datatable-example").dataTable()}),$(document).ready(function(){var a=$("#datatable-hide-columns").DataTable({scrollY:"300px",paging:!1});$("#datatable-hide-columns_filter").hide(),$("a.toggle-vis").on("click",function(t){t.preventDefault();var e=a.column($(this).attr("data-column"));e.visible(!e.visible())})}),$(document).ready(function(){$("#datatable-row-highlight").DataTable();$("#datatable-row-highlight tbody").on("click","tr",function(){$(this).toggleClass("tr-selected")})}),$(document).ready(function(){$(".dataTables_filter input").attr("placeholder","Search...")})</script>
                            <div id=page-title>
                                <h2>Search</h2>
                                <p>Click on a row to see profile</p>
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
                            <link href=../assets/widgets/chosen/chosen.css rel=stylesheet>
                            <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">-->
                            <script type="text/javascript" src="../assets/widgets/chosen/chosen.js"></script>
                            <script type="text/javascript" src="../assets/widgets/chosen/chosen-demo.js"></script>
                            <div class=panel>
                                <div class=panel-body>
                                    <h3 class=title-hero>
                                        Select to refine search..
                                    </h3>
                                    <form action="refined-search.php" method="post">
									<div class=panel>
                                        <div class=panel-body>
                                            <h3 class=title-hero>
                                                Search By Personal Details
                                            </h3>
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">First Name</label>
                                                    <input type="text" name=firstName class="form-control" placeholder="First Name here..">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Last Name</label>
                                                    <input type="text" name=lastName class="form-control" placeholder="Last Name here..">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Email</label>
                                                    <input type="text" name=email class="form-control" placeholder="Email here..">
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <button class="btn ra-100 btn-primary pull-right" name=personalDetailsForm type=submit>Search</button>
                                            </div>
                                        </div>
                                    </div>
									</form>
									<form action="refined-search.php" method="post">
                                    <div class=panel>
                                        <div class=panel-body>
                                            <h3 class=title-hero>
                                                Graduate Search
                                            </h3>
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">User Type</label>
                                                    <select name="userType" disabled class="chosen-select">
                                                        <option>Graduate</option>
                                                        <option>Recruiter</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Degree Type</label>
                                                    <select name="degreeType" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>BS</option>
                                                        <option>BE</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">Course Name</label>
                                                    <select name="courseName" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>Acting</option>
                                                        <option>Engeniering</option>
                                                        <option>Computer Science</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">Institute Name</label>
                                                    <input type="text" name=instituteName class="form-control" placeholder="Institute Name here..">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Grade</label>
                                                    <select name="grade" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>1st</option>
                                                        <option>2nd</option>
                                                        <option>3rd</option>
                                                        <option>2:2</option>
                                                        <option>2:1</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4" hidden>
                                                    <label hidden class="col-sm-4 control-label">Course Name</label>
                                                    <select hidden name="" class="chosen-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <button class="btn ra-100 btn-info pull-right" name=graduateForm type=submit>Search</button>
                                            </div>
                                        </div>
                                    </div>
									</form>
									<form action="refined-search.php" method="post">
                                    <div class=panel>
                                        <div class=panel-body>
                                            <h3 class=title-hero>
                                                Recruiter Search
                                            </h3>
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">User Type</label>
                                                    <select name="userType" disabled class="chosen-select">
                                                        <option>Recruiter</option>
                                                        <option>Graduate</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Role</label>
                                                    <select name="roleType" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>HR</option>
                                                        <option>CEO</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">Company Name</label>
                                                    <input type="text" name=companyName class="form-control" placeholder="Company Name here..">
                                                </div>
                                            </div>
                                            <!-- Input switch -->
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">City Name</label>
                                                    <input type="text" name=cityName class="form-control" placeholder="City Name here..">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-10 control-label">Opportunity</label>
                                                    <span style="position: relative; display: inline-block; width: 50px; height: 25px;">
                                                    <input type="checkbox" name=opportunityStatus data-on-color="primary" name="checkbox-example-1" class="input-switch" checked data-size="medium" data-on-text="On" data-off-text="Off"></input>
                                                    <span>
                                                </div>
                                                <div class="col-sm-4" hidden>
                                                    <label hidden class="col-sm-4 control-label">Course Name</label>
                                                    <select hidden name="" class="chosen-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <button class="btn ra-100 btn-purple pull-right" name=recruiterForm type=submit>Searh</button>
                                            </div>
                                        </div>
                                    </div>
									</form>
									<form action="refined-search.php" method="post">
                                    <div class=panel>
                                        <div class=panel-body>
                                            <h3 class=title-hero>
                                                Opportunity Search
                                            </h3>
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label class="col-sm-4 control-label">Degree Type</label>
                                                    <select name="oppDegreeType" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>BS</option>
                                                        <option>BE</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">Course Name</label>
                                                    <select name="oppCourseName" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>Computer Science</option>
                                                        <option>Information Technology</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-5 control-label">Grade</label>
                                                    <select name="oppGrade" class="chosen-select">
                                                        <option>Any</option>
                                                        <option>1st</option>
                                                        <option>2nd</option>
                                                        <option>3rd</option>
                                                        <option>2:2</option>
                                                        <option>2:1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                               
                                                <div class="col-sm-4" hidden>
                                                    <label hidden class="col-sm-4 control-label">Course Name</label>
                                                    <select hidden name="" class="chosen-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="50%" size="8" align="center">
                                            <div class="form-group">
                                                <button type=submit class="btn ra-100 btn-warning pull-right" name=opportunityForm>Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</form>
							
														
							<?php			

							include("api-config.php");
                                    
                               							
							if (!empty($_POST))
							{
								if(isset($_POST["opportunityForm"])){
									
									$oppDegreeType=$_POST["oppDegreeType"];
									$oppCourseName=$_POST["oppCourseName"];
									$oppGrade=$_POST["oppGrade"];
									
									if($oppDegreeType == 'Any' && $oppCourseName == 'Any' && $oppGrade == 'Any'){
										$sql = "SELECT DISTINCT o.*,r.firstname,r.lastname
												FROM recruiter r, opportunity o
												where r.recruiter_id=o.recruiter_id ";
										
									}else if($oppDegreeType != 'Any' || $oppCourseName != 'Any' || $oppGrade != 'Any'){
										$sql = "SELECT DISTINCT o.*,r.firstname,r.lastname
												FROM recruiter r, opportunity o
												where r.recruiter_id=o.recruiter_id ";
									
										if($oppDegreeType != 'Any'){
											$sql = $sql . "and o.type='".$oppDegreeType."' ";
										}
										if($oppCourseName != 'Any'){
											$sql = $sql . "and o.spec='".$oppCourseName."' ";
										}
										if($oppGrade != 'Any'){
											$sql = $sql . "and o.grade='".$oppGrade."' ";
										}
									}
									
									$tableHeaderFooter = " <th>Recruiter Name</th>
															<th>Degree Type</th>
															<th>Degree Specs.</th>
															<th>Department</th>
															<th>Grade</th>
															<th>Vacancies</th>
															<th>View</th>";
									
										
									$result = $conn->query($sql);
                                    $tableBody = "";          
                                    if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$tableBody	= $tableBody . "<tr>
														<td>". $row["firstname"] . " " . $row["lastname"]."</td>
														<td> ".$row["type"]." </td>
														<td>". $row["spec"] ."</td>
														<td>". $row["department"] ."</td>
														<td>". $row["grade"]." </td>
														<td>  ".$row["slot"] ."</td>
														<td><a title='link' href='profile-recruiter.php?id=".$row["recruiter_id"]."'>View</a></td>
													</tr>";
										}
									}else{
										$tableBody = "No record Found!";
									}
								}
								else if(isset($_POST["recruiterForm"])){
									$roleType=$_POST["roleType"];
									$companyName=$_POST["companyName"];
									$cityName=$_POST["cityName"];
									
									if(!isset($_POST["opportunityStatus"]))
										$opportunityStatus = "off";
									else
										$opportunityStatus = "on";
									
									if($roleType == 'Any' && $companyName == '' && $cityName == ''){
										if($opportunityStatus == 'off'){
											$sql = "SELECT *
													FROM recruiter ";
										}
										if($opportunityStatus == 'on'){
										$sql =	"SELECT DISTINCT r.*
												FROM recruiter r, opportunity o
												where r.recruiter_id=o.recruiter_id ";
										}
									}else if($roleType != 'Any' || $companyName != '' || $cityName != ''){
										if($opportunityStatus == 'off'){
											$sql = "SELECT *
													FROM recruiter r ";			
										}
										if($opportunityStatus == 'on'){
										$sql =	"SELECT DISTINCT r.*
												FROM recruiter r, opportunity o
												where r.recruiter_id=o.recruiter_id ";
										}
									
										if($roleType != 'Any'){
											$sql = $sql . "and r.role='".$roleType."' ";
										}
										if($companyName != ''){
											$sql = $sql . "and r.company='".$companyName."' ";
										}
										if($cityName != ''){
											$sql = $sql . "and r.city='".$cityName."' ";
										}
									}
									
									
									
									$tableHeaderFooter = " <th>Recruiter Name</th>
															<th>Role</th>
															<th>Company Name</th>
															
															<th>Email</th>
															<th>Address</th>
															<th>City</th>
															<th>View</th>";
									
									
									
									
									$result = $conn->query($sql);
                                    $tableBody = "";          
                                    if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$tableBody	= $tableBody . "<tr>
														<td>". $row["firstname"] . " " . $row["lastname"]."</td>
														<td> ".$row["role"]." </td>
														<td>". $row["company"] ."</td>
														
														<td>". $row["email"]." </td>
														<td>". $row["address"]." </td>
														<td>  ".$row["city"] ."</td>
														<td><a title='link' href='profile-recruiter.php?id=".$row["recruiter_id"]."'>View</a></td>
													</tr>";
										}
									}else{
										$tableBody = "No record Found!";
									}
									
									
									
								}
								else if(isset($_POST["graduateForm"])){
									$degreeType=$_POST["degreeType"];
									$courseName=$_POST["courseName"];
									$instituteName=$_POST["instituteName"];
									$grade=$_POST["grade"];
							
									
							
									if($degreeType == 'Any' && $courseName == 'Any' && $instituteName == '' && $grade == 'Any'){
										
										$sql = "SELECT DISTINCT g.*
												FROM graduate g
												";
										$tableHeaderFooter = " <th>Graduate Name</th>
															<th>Email</th>
															<th>Website</th>
															<th>View</th>";
										$result = $conn->query($sql);
										$tableBody = "";          
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												$tableBody	= $tableBody . "<tr>
															<td>". $row["firstname"] . " " . $row["lastname"]."</td>
															<td> ".$row["email"]." </td>
															<td>". $row["website"] ."</td>
															<td><a title='link' href='profile-graduate.php?id=".$row["graduate_id"]."'>View</a></td>
														</tr>";
											}
										}else{
											$tableBody = "No record Found!";
										}					
										
										
									}else if($degreeType != 'Any' || $courseName != 'Any' || $instituteName != '' || $grade != 'Any'){
										
										$sql = "SELECT DISTINCT g.*, d.*
												FROM graduate g, degree_details d
												where g.graduate_id = d.graduate_id ";			
										
										if($degreeType != 'Any'){
											$sql = $sql . "and d.degree_type='".$degreeType."' ";
										}
										if($courseName != 'Any'){
											$sql = $sql . "and d.course_name='".$courseName."' ";
										}
										if($instituteName != ''){
											$sql = $sql . "and d.institution='".$instituteName."' ";
										}
										if($grade != 'Any'){
											$sql = $sql . "and d.grade='".$grade."' ";
										}
										
										$tableHeaderFooter = " <th>Graduate Name</th>
															<th>Degree Type</th>
															<th>Course Name</th>
															<th>Institution</th>
															<th>Grade</th>
															<th>Email</th>
															<th>Website</th>
															<th>View</th>";
															
										$result = $conn->query($sql);
										$tableBody = "";          
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												$tableBody	= $tableBody . "<tr>
															<td>". $row["firstname"] . " " . $row["lastname"]."</td>
															<td> ".$row["degree_type"]." </td>
															<td> ".$row["course_name"]." </td>
															<td> ".$row["institution"]." </td>
															<td> ".$row["grade"]." </td>
															<td> ".$row["email"]." </td>
															<td>". $row["website"] ."</td>
															<td><a title='link' href='profile-graduate.php?id=".$row["graduate_id"]."'>View</a></td>
														</tr>";
											}
										}else{
											$tableBody = "No record Found!";
										}	
										
									}
									//echo $sql;	
								}
								else if(isset($_POST["personalDetailsForm"])){
									$firstName=$_POST["firstName"];
									$lastName=$_POST["lastName"];
									$email=$_POST["email"];
									
									if($firstName == '' && $lastName == '' && $email == ''){
										
										$sql1 = "select * from graduate ";
										$sql2 = "select * from recruiter ";
										
										
									}else if($firstName != '' || $lastName != '' || $email != ''){
										
										$sql1 = "select * from graduate where 1=1 ";
										$sql2 = "select * from recruiter where 1=1 ";
												
										
										if($firstName != ''){
											$sql1 = $sql1 . "and firstname='".$firstName."' ";
											$sql2 = $sql2 . "and firstname='".$firstName."' ";
										}
										if($lastName != ''){
											$sql1 = $sql1 . "and lastname='".$lastName."' ";
											$sql2 = $sql2 . "and lastname='".$lastName."' ";
										}
										if($email != ''){
											$sql1 = $sql1 . "and email='".$email."' ";
											$sql2 = $sql2 . "and email='".$email."' ";
										}
									}
								//	echo $sql1;
									//echo $sql2;
									
										$tableHeaderFooter = "<th>User Name</th>
															<th>User Type</th>
															<th>Email</th>
															<th>Website</th>
															<th>View</th>";
										$result1 = $conn->query($sql1);
										$result2 = $conn->query($sql2);
										$tableBody = "";   
if($result1->num_rows > 0 || $result2->num_rows > 0 ){										
										if ($result1->num_rows > 0) {
											while($row = $result1->fetch_assoc()) {
												$tableBody	= $tableBody . "<tr>
															<td>". $row["firstname"] . " " . $row["lastname"]."</td>
															<td> Graduate </td>
															<td> ".$row["email"]." </td>
															<td>". $row["website"] ."</td>
															<td><a title='link' href='profile-graduate.php?id=".$row["graduate_id"]."'>View</a></td>
														</tr>";
											}
										}
										if ($result2->num_rows > 0) {
											while($row = $result2->fetch_assoc()) {
												$tableBody	= $tableBody . "<tr>
															<td>". $row["firstname"] . " " . $row["lastname"]."</td>
															<td> Recruiter </td>
															<td> ".$row["email"]." </td>
															<td> - </td>
															<td><a title='link' href='profile-graduate.php?id=".$row["recruiter_id"]."'>View</a></td>
														</tr>";
											}
										}
								}else{
											$tableBody = "No record Found!";
										}					
										
								
								}
								
							
								
							
							
							
							
							
							
							}
							?>	


<?php
							if (!empty($_POST)){ ?>
							<div class=panel>
									<div class=panel-body>
										<h3 class=title-hero>
											List of Recruiters/Graduates:
										</h3>
										<div class=example-box-wrapper id=recruiterDiv>
											<table cellspacing=0 class="table table-bordered table-striped" id=datatable-row-highlight width=100%>
												<thead>
													<tr>
													  <?php echo $tableHeaderFooter ?>
													</tr>
												</thead>
												<tfoot>
													<tr>
													 <?php echo $tableHeaderFooter; ?>
													</tr>
												</tfoot>
												<tbody>
													<?php
								   
														echo $tableBody;
													  ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							
							
							<?php
							}
							
							?>
                            
							
							
							
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <script src=../assets-minified/admin-all-demo.js></script>
            <script>
                /*$(document).ready(function(){
                    $("#datatable-row-highlight_filter").children("label").css({"color": "red", "border": "2px solid red"});
                });*/
            </script>
        </div>