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
<script>
function hideMessage()  
{  
	$('#messegeBox').empty();
    $('#messegesDiv').fadeIn();
	
	
	
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
                            <img alt="Profile image"src="../assets/image-resources/profile-picture/graduate/accountID.jpg" width=28>
                            <span><?php echo $_SESSION["user_name"] ?></span>
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
                                            <?php echo $_SESSION["user_name"] ?>
                                            <i>Graduate</i>
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
                            <div class=panel>
                                <div class=panel-body>
                                    <h3 class=title-hero>
                                        List of all messeges
                                    </h3>
								
									
                                    <div class=example-box-wrapper id=messegesDiv>
                                        <table cellspacing=0 class="table table-bordered table-striped" id=datatable-row-highlight width=100%>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
													<th>Read</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
													<th>Read</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                
                                                   						<?php
														include("api-config.php");

														//$sql = "SELECT * FROM graduate where graduate_id <> '".$_SESSION["graduate_id"]."'";
														$sql = "SELECT * FROM messeges where receiver_id='".$_SESSION['user_id']."'";
														$result = $conn->query($sql);

														if ($result->num_rows > 0) {
															// output data of each row
															while($row = $result->fetch_assoc()) {
																
																echo "
																	 <tr>
																		<td>".$row["name"]."</td>
																		<td>".$row["email"]."</td>
																		<td>". substr($row["messeges"],0,10)."...</td>		 
																		<td><a title='link'  href='javascript:showmesseges(\"".$row['messeges']."\",\"".$row['name']."\",\"".$row['email']."\",\"".$row['sender_id']."\",\"".$_SESSION['user_id']."\");'>View</a></td>
																	</tr>
																";
																
															}
														} else {
															echo "No new messeges!";
															}
														//$conn->close();
														
														
														?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
									
									
									
									 
									
									
									<div class="content-box" id=messegeBox>
										
									</div>
									
									
									
									
									
									
									
									
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <script src=../assets-minified/admin-all-demo.js></script>
			<script>
			
			function reply(sender_id,reciever_id)  
			{  
				//$('#messegeBox').empty();
				
				$('#messegeBox').fadeOut();
				
				$('#messegeBox').html("<form class='bordered-row form-horizontal pad15L pad15R' action='api-send-messege-shortcut.php' method='post'> <div class='form-group remove-border'> <label class='col-sm-3 control-label'><span class='bs-label label-azure'>Name:</span></label> <div class=col-sm-6> <input class=form-control placeholder='Your Name..' name='contact-name' > </div> </div> <div class=form-group> <label class='col-sm-3 control-label'><span class='bs-label label-yellow'>Email:</span></label> <div class=col-sm-6> <input class=form-control placeholder='Your Email..' name='contact-email' > </div> </div> <div class='form-group' > <label class='col-sm-3 control-label'><span class='bs-label label-purple'>Message:</span></label> <div class='col-sm-6'> <textarea name='contact-message' rows='3' class='form-control textarea-autosize'></textarea> </div> </div> <div class='form-group'> <button class='btn ra-100 btn-azure col-md-3 pull-right' type=submit>Send</button> <button class='btn ra-100 btn-azure col-md-3 pull-left' onclick=removeReply("+sender_id+","+reciever_id+"); type=button>Return</button> </div> <div class='form-group' > <input class=form-control placeholder='' type=hidden name='contact-sender-id' value="+ reciever_id +"> <input class=form-control placeholder='' type=hidden name='contact-reciver-id' value="+ sender_id +"> </div> </form> ");
				$('#messegeBox').fadeIn();
				//$('#reply').fadeIn();
				//alert(sender_id +" "+reciever_id);
			}
			function showmesseges(messege,name,email,sender_id,reciever_id)  
			{  
				$('#messegesDiv').fadeOut();
				$('#messegeBox').html("<h3 class='content-box-header bg-primary'>Message from: "+name+  "<span class='pull-right'> Email: <code>"+email+"</code></span></h3><div class='content-box-wrapper'>"+messege+"</div><div class=form-group></div><button class='btn ra-100 btn-primary pull-left' type=button onclick=reply("+sender_id+","+reciever_id+");>Reply</button><button class='btn btn-round pull-right btn-azure' onclick=hideMessage();><i class='glyph-icon icon-code-fork '></i></button><div class=form-group></div>");
				$('#messegesBox').fadeIn();
				//alert(reciever_id + " " + sender_id + " " +messege);
				
			}
			
			
			
			function removeReply(sender_id,reciever_id){
				location.reload();
			}
			
			</script>
        </div>