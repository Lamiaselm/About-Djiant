
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<img id="djiant" style="margin-right: 6px; margin-top: 2px" src="assets/image/logo-djiant.svg" width="22px"> 

			 <span  > <img  style="margin-right: 10px;" src="assets/image/IconePage.svg" width="22px">   About</span> 
			 
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<div class="page-logo pull-right" style="width: 129px;">
			 

			  <span  class="tabbable-line note-header"> <a href="#" class="list-langue active-langue">EN</a> <a href="#" class="list-langue ">FR</a> <a href="#" class="list-langue">ES</a></span> 
			 
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>

		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->

		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->


		
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<div class="page-header -i navbar navbar-fixed-top" id="navbar-fixed-top" style="margin-top: 40px;">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
<div class="tabbable-line " style="    padding-left: 41px;">
							
								<ul class="nav nav-tabs ">
									<li class="active ">
										<a id="tab_1" data-toggle="tab">
										<h4 style="margin:0px;">Company</h4> </a>
									</li>
									<li>
										<a id="tab_2" data-toggle="tab">
										<h4 style="margin:0px;" >People</h4> </a>
									</li>
									<li >
										<a id="tab_3"style="pointer-events: none;color: #ccc;">
									<h4 style="margin:0px;" >Jobs</h4>	 </a>
									</li>
									<li  >
										<a id="tab_3" style="pointer-events: none;color: #ccc;">
									<h4 style="margin:0px;" >Localisation</h4>	 </a>
									</li>
								</ul>
								
							
		
	</div>
		
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix ">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container"  >
	<!-- BEGIN SIDEBAR -->
	<!-- END SIDEBAR -->
	<script>
	$(document).ready(function() {

var $tabs = $("#tabbable-line").tabs();

var changeTab = function(ev){

  ev.preventDefault();

  var tabIndex = this.hash.charAt(this.hash.length-1) -1;

  $tabs.tabs('select', tabIndex);

  $('html,body').scrollTop(0);  // Scroll to top
 };

$('a.tablink').click(changeTab);

});</script>
