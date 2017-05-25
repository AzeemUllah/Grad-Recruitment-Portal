<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta content="IE=edge"http-equiv=X-UA-Compatible>
        <meta content="width=device-width,initial-scale=1"name=viewport>
        <meta content="recruitment Portal"name=description>
        <meta content="recruitment, portal"name=keywords>
        <meta content="Azeem Ullah"name=author>
        <title>Recruitment Portal</title>
        <link href=assets/landing-page-assets/bootstrap/css/bootstrap.min.css rel=stylesheet>
        <link href=assets/landing-page-assets/fonts/linear-fonts.css rel=stylesheet>
        <link href=assets/landing-page-assets/fonts/font-awesome.css rel=stylesheet>
        <link href=assets/landing-page-assets/owlcarousel/css/owl.carousel.css rel=stylesheet>
        <link href=assets/landing-page-assets/owlcarousel/css/owl.theme.css rel=stylesheet>
        <link href=assets/landing-page-assets/css/magnific-popup.css rel=stylesheet>
        <link href=assets/landing-page-assets/css/animate.min.css rel=stylesheet>
        <link href=assets/landing-page-assets/css/effects.css rel=stylesheet>
        <link href=assets/landing-page-assets/css/style.css rel=stylesheet>
        <link href=assets/landing-page-assets/css/responsive.css rel=stylesheet>
        <link href=assets/landing-page-assets/switcher/switcher.css rel=stylesheet>
        <link href=assets/landing-page-assets/switcher/style1.css rel=stylesheet id=colors>
    </head>
    <body>
	
	
        <div class=preloader-area>
            <div class=spinner>
                <div class=dot1></div>
                <div class=dot2></div>
            </div>
        </div>
        <header class=welcome-area id=home>
            <div class=header-top-area>
                <div class=container>
                    <div class=row>
                        <div class=col-md-3>
                            <div class=logo>
                                <a href="">
                                    <p>Rec. Por.</p>
                                </a>
                            </div>
                        </div>
                        <div class=col-md-9>
                            <div class=mainmenu>
                                <div class="navbar navbar-nobg">
                                    <div class=navbar-header>
                                        <button class=navbar-toggle data-target=.navbar-collapse data-toggle=collapse type=button>
                                        <span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span>
                                        <span class=icon-bar></span>
                                        <span class=icon-bar></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class=active>
                                                <a href=#home class=smoth-scroll>
                                                    Home
                                                    <div class=ripple-wrapper></div>
                                                </a>
                                            </li>
                                           
                                            <li><a href=#team class=smoth-scroll>Team</a></li>
                                            <li><a href=#testimonial class=smoth-scroll>Testimonials</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=welcome-image-area data-stellar-background-ratio=0.6 id=welcome-image-area>
                <div class=display-table>
                    <div class=display-table-cell>
                        <div class=container>
                            <div class=row>
                                <div class=col-md-8>
                                    <div class=header-text>
                                        <h2>Ultimate Solutions for Your Placement</h2>
                                        <p>Offering better comparisions for Recruiter. More opportunities for Graduates. Get Regestered Below.</p>
                                        <a href="../Portal/Recruiter/login.php" class="smoth-scroll slide-btn">Recruiter</a>
                                        <a href="../Portal/Graduate/login.php" class="smoth-scroll slide-btn other-btn">Graduate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section class=complete-project-area data-stellar-background-ratio=0.6>
            <div class=container>
                <div class=row>
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "graduate_recruit_db";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT ( SELECT COUNT(*) FROM graduate ) AS count_graduate, ( SELECT COUNT(*) FROM recruiter ) AS count_recruiter, ( SELECT COUNT(*) FROM users ) AS count_users, ( SELECT COUNT(*) FROM views ) AS count_views FROM dual";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						 while($row = $result->fetch_assoc()) {
							echo "<div class='col-sm-6 col-md-3'>
									<div class='wow fadeInDown single-project-complete'data-wow-delay=.2s>
										<h2 class=counter-num>" .$row["count_graduate"]."</h2>
										<h6>Total Graduates</h6>
									</div>
								</div>
								<div class='col-sm-6 col-md-3'>
									<div class='wow fadeInDown single-project-complete'data-wow-delay=.4s>
										<h2 class=counter-num>" . $row["count_recruiter"] . "</h2>
										<h6>Total Recruiters</h6>
									</div>
								</div>
								<div class='col-sm-6 col-md-3'>
									<div class='wow fadeInDown single-project-complete'data-wow-delay=.6s>
										<h2 class=counter-num>" . $row["count_users"] . "</h2>
										<h6>Total Users</h6>
									</div>
								</div>
								<div class='col-sm-6 col-md-3'>
									<div class='wow fadeInDown single-project-complete'data-wow-delay=.8s>
										<h2 class=counter-num>" . $row["count_views"] . "</h2>
										<h6>Total Views</h6>
									</div>
								</div>";
						 }
					} else {
						echo "0 results";
					}
					$conn->close();
				?>
                   
                </div>
            </div>
        </section>
        
        
        
        <section class="section-padding team-area"id=team>
            <div class=container>
                <div class=row>
                    <div class=col-sm-12>
                        <div class=section-title>
                            <h2>Meet Our Top Recruiters</h2>
                            <p>Ask Client for Text.</p>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="wow fadeInDown col-sm-6 col-md-3"data-wow-delay=.2s>
                        <div class=single-team>
                            <img alt=""src=assets/landing-page-assets/images/team/team1.jpg>
                            <div class=team-social>
                                <ul>
                                    <li><a href=index-image.html><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class=team-description>
                                <h4>Mr. One</h4>
                                <h6>CEO/Founder ABC Company</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInDown col-sm-6 col-md-3"data-wow-delay=.4s>
                        <div class=single-team>
                            <img alt=""src=assets/landing-page-assets/images/team/team2.jpg>
                            <div class=team-social>
                                <ul>
                                    <li><a href=index-image.html><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class=team-description>
                                <h4>Mr. Two</h4>
                                <h6>Head Adviser ABC Company</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInDown col-sm-6 col-md-3"data-wow-delay=.6s>
                        <div class=single-team>
                            <img alt=""src=assets/landing-page-assets/images/team/team3.jpg>
                            <div class=team-social>
                                <ul>
                                    <li><a href=index-image.html><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class=team-description>
                                <h4>Mr. Three</h4>
                                <h6>Graphics designer ABC Company</h6>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInDown col-sm-6 col-md-3"data-wow-delay=.8s>
                        <div class=single-team>
                            <img alt=""src=assets/landing-page-assets/images/team/team4.jpg>
                            <div class=team-social>
                                <ul>
                                    <li><a href=index-image.html><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=index-image.html><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class=team-description>
                                <h4>Mr. Four</h4>
                                <h6>Lead Developer ABC Company</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding testimonial-area"id=testimonial data-stellar-background-ratio=0.6>
            <div class=container>
                <div class=row>
                    <div class=col-sm-12>
                        <div class=section-title>
                            <h2>what people are saying</h2>
                            <p>Ask client for Text.</p>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-12>
                        <div class=testimonial-list>
                            <div class=single-testimonial>
                                <div class=single-testi-des>
                                    <p>Ask client for Text.</p>
                                </div>
                                <div class=testi-name>
                                    <img alt=""src=assets/landing-page-assets/images/testimonial/1.jpg>
                                    <h2>Review One</h2>
                                    <h3>Businees men</h3>
                                </div>
                            </div>
                            <div class=single-testimonial>
                                <div class=single-testi-des>
                                    <p>Ask client for Text.</p>
                                </div>
                                <div class=testi-name>
                                    <img alt=""src=assets/landing-page-assets/images/testimonial/2.jpg>
                                    <h2>Review Two</h2>
                                    <h3>actress</h3>
                                </div>
                            </div>
                            <div class=single-testimonial>
                                <div class=single-testi-des>
                                    <p>Ask client for Text.</p>
                                </div>
                                <div class=testi-name>
                                    <img alt=""src=assets/landing-page-assets/images/testimonial/3.jpg>
                                    <h2>Review Three</h2>
                                    <h3>Businees men</h3>
                                </div>
                            </div>
                            <div class=single-testimonial>
                                <div class=single-testi-des>
                                    <p>Ask client for Text.</p>
                                </div>
                                <div class=testi-name>
                                    <img alt=""src=assets/landing-page-assets/images/testimonial/1.jpg>
                                    <h2>Review Four</h2>
                                    <h3>Businees men</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="section-padding footer-area">
            <div class=container>
                <div class=row>
                    <div class="col-sm-12 text-center">
                        <div class=footer-text>
                            <h6>©copyright | Azeem Ullah 2017.all right Reserved<br>Developed by Azeem Ullah</h6>
                        </div>
                        <div class=footer-social-link>
                            <ul>
                                <li class="wow fadeInDown"data-wow-delay=.2s><a href=index-image.html><i class="fa fa-facebook"></i></a></li>
                                <li class="wow fadeInDown"data-wow-delay=.4s><a href=index-image.html><i class="fa fa-twitter"></i></a></li>
                                <li class="wow fadeInDown"data-wow-delay=.6s><a href=index-image.html><i class="fa fa-dribbble"></i></a></li>
                                <li class="wow fadeInDown"data-wow-delay=.8s><a href=index-image.html><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id=style-switcher>
            <h2>Choose Color<a href=index-image.html#><i class="fa fa-cog fa-spin"></i></a></h2>
            <div>
                <ul class=colors id=color1>
                    <li>
                        <a href=index-image.html# class=style1></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style2></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style3></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style4></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style5></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style6></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style7></a>
                    </li>
                    <li>
                        <a href=index-image.html# class=style8></a>
                    </li>
                </ul>
            </div>
        </div>
        <script src=assets/landing-page-assets/js/jquery.min.js></script>
        <script src=assets/landing-page-assets/bootstrap/js/bootstrap.min.js></script>
        <script src=assets/landing-page-assets/owlcarousel/js/owl.carousel.min.js></script>
        <script src=assets/landing-page-assets/js/jquery.magnific-popup.min.js></script>
        <script src=assets/landing-page-assets/js/jquery.stellar.min.js></script>
        <script src=assets/landing-page-assets/js/jquery.mb.YTPlayer.min.js></script>
        <script>$(".player").mb_YTPlayer()</script>
        <script src=assets/landing-page-assets/js/jquery.waypoints.min.js></script>
        <script src=assets/landing-page-assets/js/jquery.counterup.min.js></script>
        <script src=assets/landing-page-assets/js/wow.min.js></script>
        <script src=assets/landing-page-assets/js/form-contact.js></script>
        <script src=assets/landing-page-assets/js/switcher.js></script>
        <script src=assets/landing-page-assets/js/scripts.js></script>