<?php session_start(); 

include("api-config.php");
   
	
	$nviews=0;
	$sql = "select graduate_id,firstname,lastname FROM graduate where user_id='".$_SESSION['user_id']."'";
														$result = $conn->query($sql);
											
														if ($result->num_rows > 0) {
															// output data of each row
															
															while($row = $result->fetch_assoc()) {
																
																$_SESSION['graduate_id'] = $row['graduate_id'];
																$_SESSION['graduate_name'] = $row['firstname'] . " " . $row['lastname'];
																	}
														} else {
																
														}
	
	
	
	
	
	
	$sql = "select count(*) 'nviews' FROM views where graduate_id='".$_SESSION['graduate_id']."'";
														$result = $conn->query($sql);
											
														if ($result->num_rows > 0) {
															// output data of each row
															
															while($row = $result->fetch_assoc()) {
																
																$nviews=$row['nviews'];
																
																	}
														} else {
																
														}


?>
<!DOCTYPE html>
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
                        <a href=index.html class=logo-content-small title="Recruitment Portal"></a>
                    </div>
                    <div class=logo-bg id=header-logo>
                        <a href=index.html class=logo-content-big title="Recruitment Portal">
                        Recruitment <i>Portal</i>
                        <span>The perfect solution Recruitment</span>
                        </a>
                        <a href=index.html class=logo-content-small title="Recruitment Portal">
                        Recruitment <i>Portal</i>
                        <span>The perfect solution Recruitment</span>
                        </a>
                        <a href= # title="Close sidebar"id=close-sidebar>
                        <i class="glyph-icon icon-angle-left"></i>
                        </a>
                    </div>
                    <div id=header-nav-left>
                        <div class="dropdown user-account-btn">
                            <a href= # class="clearfix user-profile"title="My Account"data-toggle=dropdown>
                            <img alt="Profile image"src="../assets/image-resources/profile-picture/graduate/accountID.jpg" width=28>
                            <span><?php echo $_SESSION["graduate_name"] ?></span>
                            <i class="glyph-icon icon-angle-down"></i>
                            </a>
                            <div class="dropdown-menu float-left">
                                <div class=box-sm>
                                    <div class="clearfix login-box">
                                        <div class=user-img>
                                            <a href= # class=change-img>Change photo</a>
                                            <img alt=""src="../assets/image-resources/profile-picture/graduate/accountID.jpg" width="50" height="50">
                                        </div>
                                        <div class=user-info>
                                            <span>
                                            <?php echo $_SESSION["user_name"] ?>
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
                        <a href= # class=hdr-btn title=Fullscreen id=fullscreen-btn>
                        <i class="glyph-icon icon-arrows-alt"></i>
                        </a>
                        <a href=lockscreen.php class=header-btn title="Lockscreen page example"id=logout-btn>
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
                                <h2>Graduate Profile</h2>
                                <p>Client will provide Text</p>
                                <div class=admin-options id=theme-options>
                                    <a href=javascript:void(0); class="tooltip-button btn btn-primary theme-switcher"title="Color schemes and layout options"data-placement=left>
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
                                                    <a href=javascript:void(0); class=set-background-style title="Remove all styles"data-header-bg="">Clear</a>
                                                </h5>
                                                <div class="clearfix theme-color-wrapper">
                                                    <h5>Patterns</h5>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-3"title="Pattern 3"data-header-bg=pattern-bg-3>Pattern 3</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-4"title="Pattern 4"data-header-bg=pattern-bg-4>Pattern 4</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-5"title="Pattern 5"data-header-bg=pattern-bg-5>Pattern 5</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-6"title="Pattern 6"data-header-bg=pattern-bg-6>Pattern 6</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-7"title="Pattern 7"data-header-bg=pattern-bg-7>Pattern 7</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-8"title="Pattern 8"data-header-bg=pattern-bg-8>Pattern 8</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-9"title="Pattern 9"data-header-bg=pattern-bg-9>Pattern 9</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style pattern-bg-10"title="Pattern 10"data-header-bg=pattern-bg-10>Pattern 10</a>
                                                    <div class=clear></div>
                                                    <h5 class=mrg15T>Solids &Images</h5>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style bg-black"title=Black data-header-bg=bg-black>Black</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style bg-gray mrg10R"title=Gray data-header-bg=bg-gray>Gray</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-1"title="Image 1"data-header-bg="full-bg-1 fixed-bg">Image 1</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-2"title="Image 2"data-header-bg="full-bg-2 fixed-bg">Image 2</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-3"title="Image 3"data-header-bg="full-bg-3 fixed-bg">Image 3</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-4"title="Image 4"data-header-bg="full-bg-4 fixed-bg">Image 4</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-5"title="Image 5"data-header-bg="full-bg-5 fixed-bg">Image 5</a>
                                                    <a href=javascript:void(0); class="tooltip-button set-background-style full-bg-6"title="Image 6"data-header-bg="full-bg-6 fixed-bg">Image 6</a>
                                                </div>
                                            </div>
                                            <h5 class=header>
                                                Header Style
                                                <a href=javascript:void(0); class=set-adminheader-style title="Remove all styles"data-header-bg=bg-gradient-9>Clear</a>
                                            </h5>
                                            <div class="clearfix theme-color-wrapper">
                                                <h5>Solids</h5>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-primary"title=Primary data-header-bg="bg-primary font-inverse">Primary</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-green"title=Green data-header-bg="bg-green font-inverse">Green</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-red"title=Red data-header-bg="bg-red font-inverse">Red</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-blue"title=Blue data-header-bg="bg-blue font-inverse">Blue</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-warning"title=Warning data-header-bg="bg-warning font-inverse">Warning</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-purple"title=Purple data-header-bg="bg-purple font-inverse">Purple</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-black"title=Black data-header-bg="bg-black font-inverse">Black</a>
                                                <div class=clear></div>
                                                <h5 class=mrg15T>Gradients</h5>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-1"title="Gradient 1"data-header-bg="bg-gradient-1 font-inverse">Gradient 1</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-2"title="Gradient 2"data-header-bg="bg-gradient-2 font-inverse">Gradient 2</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-3"title="Gradient 3"data-header-bg="bg-gradient-3 font-inverse">Gradient 3</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-4"title="Gradient 4"data-header-bg="bg-gradient-4 font-inverse">Gradient 4</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-5"title="Gradient 5"data-header-bg="bg-gradient-5 font-inverse">Gradient 5</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-6"title="Gradient 6"data-header-bg="bg-gradient-6 font-inverse">Gradient 6</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-7"title="Gradient 7"data-header-bg="bg-gradient-7 font-inverse">Gradient 7</a>
                                                <a href=javascript:void(0); class="tooltip-button set-adminheader-style bg-gradient-8"title="Gradient 8"data-header-bg="bg-gradient-8 font-inverse">Gradient 8</a>
                                            </div>
                                            <h5 class=header>
                                                Sidebar Style
                                                <a href=javascript:void(0); class=set-sidebar-style title="Remove all styles"data-header-bg="">Clear</a>
                                            </h5>
                                            <div class="clearfix theme-color-wrapper">
                                                <h5>Solids</h5>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-primary"title=Primary data-header-bg="bg-primary font-inverse">Primary</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-green"title=Green data-header-bg="bg-green font-inverse">Green</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-red"title=Red data-header-bg="bg-red font-inverse">Red</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-blue"title=Blue data-header-bg="bg-blue font-inverse">Blue</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-warning"title=Warning data-header-bg="bg-warning font-inverse">Warning</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-purple"title=Purple data-header-bg="bg-purple font-inverse">Purple</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-black"title=Black data-header-bg="bg-black font-inverse">Black</a>
                                                <div class=clear></div>
                                                <h5 class=mrg15T>Gradients</h5>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-1"title="Gradient 1"data-header-bg="bg-gradient-1 font-inverse">Gradient 1</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-2"title="Gradient 2"data-header-bg="bg-gradient-2 font-inverse">Gradient 2</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-3"title="Gradient 3"data-header-bg="bg-gradient-3 font-inverse">Gradient 3</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-4"title="Gradient 4"data-header-bg="bg-gradient-4 font-inverse">Gradient 4</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-5"title="Gradient 5"data-header-bg="bg-gradient-5 font-inverse">Gradient 5</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-6"title="Gradient 6"data-header-bg="bg-gradient-6 font-inverse">Gradient 6</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-7"title="Gradient 7"data-header-bg="bg-gradient-7 font-inverse">Gradient 7</a>
                                                <a href=javascript:void(0); class="tooltip-button set-sidebar-style bg-gradient-8"title="Gradient 8"data-header-bg="bg-gradient-8 font-inverse">Gradient 8</a>
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
                            <div class="row mailbox-wrapper">
                                <div class=col-md-4>
                                    <div class=panel-layout>
                                        <div class=panel-box>
                                            <div class="panel-content image-box">
                                                <div class=ribbon>
                                                    <div class=bg-primary>Graduate</div>
                                                </div>
                                                <div class="font-white image-content">
                                                    <div class="meta-box meta-box-bottom">
                                                        <img alt=""src="../assets/image-resources/profile-picture/graduate/accountID.jpg" class="img-bordered img-circle meta-image" width="250" height="220">
                                                        
														<?php
													//	include("api-config.php");
														
														$sql = "SELECT * FROM graduate where graduate_id = '" . $_SESSION['graduate_id'] . "'";
														$result = $conn->query($sql);
											
														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																echo "
																<h3 class=meta-heading>".$row["firstname"]." ".$row["lastname"]."</h3>
                                                        <h4 class=meta-subheading>Graduate</h4>
																";
																	}
														} else {
														echo "
														<h3 class=meta-heading>Users Name</h3>
                                                        <h4 class=meta-subheading>Users Tittle</h4>
														
														
														
														";
														}
														//$conn->close();
														
														
														?>
														
														
														
														
														
														
														
														
														
														
														
                                                    </div>
                                                </div>
                                                <img alt=""src=../assets/image-resources/blurred-bg/blurred-bg-13.jpg>
                                            </div>
                                            <div class="panel-content bg-white pad15A radius-bottom-all-4">
                                                
												
                                                <div class="mrg15T mrg15B"></div>
                                                <blockquote class=font-gray>
                                                








												
													
													<?php
													
													
													echo "<div class='modal fade bs-example-modal-sm-for-views' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
																		<div class='modal-dialog modal-sm'>
																			<div class='modal-content'>
																				<div class='modal-header'>
																					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
																					<h4 class='modal-title'>Views of your Profile</h4>
																				</div>
																				<div class='modal-body'>
																					<p>";
																					
																
																$sql3 = "select u.* from views v, users u where u.user_id = v.user_id and v.graduate_id='".$_SESSION['graduate_id']."'";
																$conn3 = new mysqli('localhost','root','','graduate_recruit_db');
																$result3 = $conn3->query($sql3);
																if ($result3->num_rows > 0) {
																	$countForColors=0;
																	$colors=array("success","danger","warning","info","blue-alt","yellow","purple","azure","black");
																	while($row3= $result3->fetch_assoc()) {
																			echo "<span class='bs-badge badge-".$colors[$countForColors]."' style='margin-left:1.25em; margin-bottom:1.0em'>".$row3['username']."</span>";		
																			$countForColors = $countForColors+1;
																	}
																}
															
																	echo "</p>
																			</div>
																			<div class='modal-footer'>
																				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
																				
																			</div>
																		</div>
																	</div>
																</div>";
					
													
													
													
													
													
													
													
													
													
													
													
													
												echo "<span class='bs-badge btn-default pull-right'  style='margin-left:1.25em' data-toggle='modal' data-target='.bs-example-modal-sm-for-views'>Seen by</span>";
												
												
												
												
												?>			
												
												
													<span class='bs-badge badge-yellow pull-right' style='margin-left:1.25em'><?php echo $nviews; ?></span>
													
													<span class='bs-badge badge-azure pull-right' style='margin-left:1.25em'>Number of Views: </span>
												
												
																					
												

												
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=col-md-8>
                                    <div class=example-box-wrapper>
                                        <ul class="row list-group list-group-icons">
                                            <li class="col-md-3 active">
                                                <a href=view-profile.html#tab-example-4 class=list-group-item data-toggle=tab>
                                                <i class="glyph-icon font-red icon-bullhorn"></i>
                                                Personal Information
                                                </a>
                                            </li>
                                            <li class=col-md-3>
                                                <a href=view-profile.html#tab-example-3 class=list-group-item data-toggle=tab>
                                                <i class="glyph-icon font-blue-alt icon-globe"></i>
                                                Professional Details
                                                </a>
                                            </li>
                                        </ul>
                                        <div class=tab-content>
                                            <div class="fade tab-pane"id=tab-example-3>
                                                <div class=row>
                                                    <div class=col-md-3>
                                                        <ul class=list-group>
                                                            <li class=mrg10B>
                                                                <a href=view-profile.html#faq-tab-1 class=list-group-item data-toggle=tab>
                                                                Degree Details
                                                                <i class="glyph-icon icon-angle-right mrg0A"></i>
                                                                </a>
                                                            </li>
                                                            <li class=mrg10B>
                                                                <a href=view-profile.html#faq-tab-2 class=list-group-item data-toggle=tab>
                                                                Project Experience
                                                                <i class="glyph-icon icon-angle-right mrg0A font-green"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=col-md-9>
                                                        <div class=tab-content>
                                                            <div class="fade tab-pane pad0A active in"id=faq-tab-1>
                                                                <div class=panel-group id=accordion5>
                                                                    
																	
																	
																	
																	<?php
														
														
														$sql = "SELECT * FROM degree_details where graduate_id = '" . $_SESSION['graduate_id'] . "'";
														$result = $conn->query($sql);
														$count = 1;
														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																echo "
																
																<div class=panel>
                                                                        <div class=panel-heading>
                                                                            <h4 class=panel-title>
                                                                                <a href='view-profile.html#collapse".$count."' data-toggle=collapse data-parent=#accordion5>
                                                                                ".$row["degree_type"]."
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class='collapse panel-collapse' id='collapse".$count."'>
                                                                            <div class=panel-body>
                                                                                ".$row["course_name"]." with grade ". $row["grade"]." from Institution ".$row["institution"]."
                                                                            </div>
                                                                        </div>
                                                                    </div>
																	
																
																
																";
																$count = $count+1;
																	}
														} else {
														echo "
														<div class=panel>
                                                                        <div class=panel-heading>
                                                                            <h4 class=panel-title>
                                                                                <a href=view-profile.html#collapseOne data-toggle=collapse data-parent=#accordion5>
                                                                                Collapsible Group Item #1
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class='in collapse panel-collapse'id=collapseOne>
                                                                            <div class=panel-body>
                                                                                Degree 1
                                                                            </div>
                                                                        </div>
                                                                    </div>
														
														
														
														";
														}
														//$conn->close();
														
														
														?>
														
                                            
											
																
																	
																	
																	
                                                                </div>
                                                            </div>
                                                            <div class="fade tab-pane pad0A"id=faq-tab-2>
                                                                <div class=panel-group id=accordion1>
                                                                    
																	
																	
																	<?php
														
														$countForLikesView = 0; //For likes Names
														
														
														
														$sql = "SELECT * FROM project_experience where graduate_id = '" . $_SESSION['graduate_id'] . "'";
														$result = $conn->query($sql);
														
														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																
																	$sql2 = "select count(*) 'nlikes' FROM likes where project_id='".$row['project_id']."'";
																$conn2 = new mysqli('localhost','root','','graduate_recruit_db');
																$result2 = $conn2->query($sql2);
																if ($result2->num_rows > 0) {
																	while($row2 = $result2->fetch_assoc()) {
																			$nlikes=$row2['nlikes'];
																	}
																}
															
																
																//--------------Likes names display -------------------------------------------
																echo "<div class='modal fade bs-example-modal-sm" . $countForLikesView."' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
																		<div class='modal-dialog modal-sm'>
																			<div class='modal-content'>
																				<div class='modal-header'>
																					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
																					<h4 class='modal-title'>Likes of Selected Project</h4>
																				</div>
																				<div class='modal-body'>
																					<p>";
																					
																
																$sql3 = "select u.username from likes l, users u where l.user_id = u.user_id and l.project_id='".$row['project_id']."'";
																$conn3 = new mysqli('localhost','root','','graduate_recruit_db');
																$result3 = $conn3->query($sql3);
																if ($result3->num_rows > 0) {
																	$countForColors=0;
																	$colors=array("success","danger","warning","info","blue-alt","yellow","purple","azure","black");
																	while($row3= $result3->fetch_assoc()) {
																			echo "<span class='bs-badge badge-".$colors[$countForColors]."' style='margin-left:1.25em; margin-bottom:1.0em'>".$row3['username']."</span>";		
																			$countForColors = $countForColors+1;
																	}
																}
															
																	echo "</p>
																			</div>
																			<div class='modal-footer'>
																				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
																				
																			</div>
																		</div>
																	</div>
																</div>";
					
																
																
																//--------------For likes names ends here -----------------
																
																
																
																
																
																echo "
																
																	<div class=panel>
                                                                        <div class=panel-heading>
                                                                            <h4 class=panel-title>
                                                                                <a href='view-profile.html#collapse".$count."'  data-toggle=collapse data-parent=#accordion1>
                                                                                ".$row["title"]."
                                                                                </a>
																			
																			
																			
																			<span class='bs-badge btn-default pull-right'  style='margin-left:1.25em' data-toggle='modal' data-target='.bs-example-modal-sm".$countForLikesView."'>View Likes</span>
																			
																			
																			
																			
																			
																			<span class='bs-badge badge-yellow pull-right' style='margin-left:1.25em'>".$nlikes."</span>
																			<span class='bs-badge badge-azure pull-right' style='margin-left:1.25em'>Likes: </span>
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
                                                                            
                                                                            </h4>
                                                                        </div>
                                                                        <div class='collapse panel-collapse' id='collapse".$count."'>
                                                                            <div class=panel-body>
                                                                               of type ".$row["type"]." consequenting to following skills gained ".$row["skill_gained"]."<br><a href='".$row['project_image']."'>Click here to download project file</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
																
																
																";
																$count = $count+1;
																$countForLikesView = $countForLikesView+1;
																	}
														} else {
														echo "
														
														<div class=panel>
                                                                        <div class=panel-heading>
                                                                            <h4 class=panel-title>
                                                                                <a href=view-profile.html#collapseOne1 data-toggle=collapse data-parent=#accordion1>
                                                                                Collapsible Group Item #1
                                                                                </a>
																				<span class='bs-badge badge-azure pull-right'>1</span>
                                                                            </h4>
                                                                        </div>
                                                                        <div class='in collapse panel-collapse'id=collapseOne1>
                                                                            <div class=panel-body>
                                                                               Project 1
                                                                            </div>
                                                                        </div>
                                                                    </div>
														
														";
														}
														//$conn->close();
														
														
														?>
										
																	
																	
																	
														
																	
																	
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
											<?php
														
														
														$sql = "SELECT * FROM graduate where user_id = '" . $_SESSION['user_id'] . "'";
														$result = $conn->query($sql);

														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																echo "
																
																<div class='fade tab-pane pad0A active in'id=tab-example-4>
                                                <div class=content-box>
                                                    <form class='bordered-row form-horizontal pad15L pad15R'>
                                                        <div class='form-group remove-border'>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-azure'>First Name:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='First name...' name=firstName disabled value='".$row["firstname"]."'>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-yellow'>Last Name:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='Last name...' name=lastName disabled value='".$row["lastname"]."'>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-success'>Email:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='Email address...' name=email disabled value='".$row["email"]."'>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-blue-alt'>Website:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder=Website... name=website disabled value='".$row["website"]."'>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-purple' value='".$row["about"]."'>About me:</span></label>
                                                            <div class=col-sm-6>
                                                                <textarea class='form-control textarea-autosize' rows=3 name=about disabled>".$row["about"]."</textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
											
																
																
																";
																}
														} else {
														echo "
															<div class='fade tab-pane pad0A active in'id=tab-example-4>
                                                <div class=content-box>
                                                    <form class='bordered-row form-horizontal pad15L pad15R'>
                                                        <div class='form-group remove-border'>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-azure'>First Name:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='First name...' name=firstName disabled>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-yellow'>Last Name:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='Last name...' name=lastName disabled>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-success'>Email:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder='Email address...' name=email disabled>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-blue-alt'>Website:</span></label>
                                                            <div class=col-sm-6>
                                                                <input class=form-control placeholder=Website... name=website disabled>
                                                            </div>
                                                        </div>
                                                        <div class=form-group>
                                                            <label class='col-sm-3 control-label'><span class='bs-label label-purple'>About me:</span></label>
                                                            <div class=col-sm-6>
                                                                <textarea class='form-control textarea-autosize' rows=3 name=about disabled></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
														
														
														";
														}
														
														//$conn->close();
														
														
														?>
														
                                            
											
											
											
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
        </div>