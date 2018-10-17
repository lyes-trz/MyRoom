<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Gîte Touristiques
		</title>
		<meta name="description" content="User profile view and edit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="css/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
         <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">



         <style type="text/css">
         	   #main-footer a:hover{
	                          color: #9f97b1;
	                           text-decoration: none;
                                   }

         </style>
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default" style=" background: url('13.png');background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item    m-header "  style="background-color: transparent; box-shadow: none;
			    " >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left">
							<!-- BEGIN: Brand -->
							<a href="home.php" class="m-brand m-brand--desktop" style="text-decoration:none">	
                                 <p class="logo" style=" font-size: 24px;
	                                                    font-family: Great Day Personal Use;
	                                                     
	                                                     margin-top: 1em;
	                                                     margin-left: 0em;
	                                                     color: white;">Gîte Touristiques</p>
							</a>
							<!-- END: Brand -->
						</div>
						<div class="m-stack__item m-brand m-brand--mobile">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="home.html" class="m-brand__logo-wrapper" style="text-decoration:none">
										<p class="logo" style=" font-size: 24px;
	                                                     font-family: Great Day Personal Use;
	                                                     font-style: bolder;
	                                                     margin-top: 1em;
	                                                     margin-left: 0em;
	                                                     color: white;">Gîte Touristiques</p>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
							<div class="m-stack m-stack--ver m-stack--desktop">

								
								<div class="m-stack__item m-stack__item--fluid">
									<!-- BEGIN: Horizontal Menu -->
									<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
										<i class="la la-close"></i>
									</button>
									<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
										<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
											<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
												<a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__item-here"></span>
													<i class="m-menu__link-icon flaticon-calendar-3" style="color: white;"></i>
													<span class="m-menu__link-text" style="color: white;">
														Reservation
													</span>
													<i class="m-menu__hor-arrow la la-angle-down" style="color: white;"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
													<span class="m-menu__arrow m-menu__arrow--adjust"></span>
													<ul class="m-menu__subnav">
														
														
														<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
															<a  href="search.php" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-search-magnifier-interface-symbol"></i>
																<span class="m-menu__link-text">
																	Search B&B
																</span>
															</a>
														</li>
														<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
															<a  href="edit.php" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-edit"></i>
																<span class="m-menu__link-text">
																	Edit a Reservation
																</span>
															</a>
														</li>
														<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
															<a  href="delete.php" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-delete"></i>
																<span class="m-menu__link-text">
																	Delete a Reservation
																</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											
										</ul>
									</div>
									<!-- END: Horizontal Menu -->
								</div>
							</div>
						</div>
						
						<div class="m-stack__item m-stack__item--right">
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="
	m-nav__item m-nav__item--focus m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" 
	data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-search-1" style="color: white;"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form  class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													
												</div>
											</div>
										</li>
										
										
										<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__username m--hidden-mobile" style="color: white;">
													ilyas
												</span>
												<span class="m-topbar__userpic">
													<img src="IMG_7682.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<img src="IMG_7682.jpg" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	ilyas jabar
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	ilyasjabar@gmail.com
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Activity
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="login.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Logout
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
			

    






    <div class="test ">

       
       <h1>Gîtes Touristiques</h1>
       <p class="tagline" style="font-size: 14PX; margin: 0em 0 0.5em 0; ">Bed & Breakfeast , Best Accommodation !!!</p>
       <a  href="contactus.html">
                 <p class="banner-btn" >Contact us<p/>
      </a>
    </div>



    
    




    


   















<footer class="grid" id="main-footer">
	<p style="margin-bottom: 0px; margin-top: 26px;">Follow us on :</p>
	<dir style="margin-bottom: 0px;">
			<a href="" ><i class="m-menu__link-icon socicon-facebook" style="margin-right: 10px;margin-left: -30px;font-size: 14px;"></i></a>
			
			<a href=""><i class="m-menu__link-icon socicon-skype" style="margin-right: 10px;font-size: 14px;"></i></a>

			<a href=""><i class="m-menu__link-icon socicon-instagram" style="margin-right: 10px;font-size: 14px;"></i></a>

			<a href=""><i class="m-menu__link-icon socicon-twitter" style="margin-right: 10px;font-size: 14px;"></i></a>

			<a href=""><i class="m-menu__link-icon socicon-linkedin" style="margin-right: 10px;font-size: 14px;"></i></a>
	</dir>
	<a href="">Blog</a>
    
	<a href="">Help</a>
	<p>2018 &copy; Gîte Touristiques, All rights reserved.</p>
	
</footer>













		
		<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		
		<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->
		<script src="js/vendors.bundle.js" type="text/javascript"></script>
		<script src="js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
		<script src="js/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
		<script src="js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
