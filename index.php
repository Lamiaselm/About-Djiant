<?php
	require_once("header/header.php");
	require_once("header/navbar.php");
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper" >
		<div class="page-content">
			<!-- BEGIN DASHBOARD  -->

				<div id="notification" >
				</div>
			<!-- END DASHBOARD STATS -->

		</div>
	</div>
	<!-- END CONTENT -->
</div>
<div class="clearfix ">
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner pull-right"style="margin-top:-8px;">
	<button type="button" class="link-button" >A propos</button>
		<span  class="tabbable-line "> <a href="#" class="menu-footer" >Legal Notice  </a> <a href="#" class="menu-footer" >Privacy Policy</a> <a href="#" class="menu-footer" >Privacy Policy</a>  </span>
       
	</div>

	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://technoparks.djiant.com/assets/global/plugins/racine/racine.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/global/scripts/toastr.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->


<script>
    $(document).on("click",".contact-us",function(){
    $('.popupInfo').show();

});

    $(document).on("click","a.list-langue",function(){
    $('a.list-langue').removeClass('active-langue');
    $(this).addClass('active-langue');

});

    $(document).on("click","#tab_1",function(){
    $(".portlet-light").hide();
	$('#tab_1_content').show();
    
});
    $(document).on("click","#tab_2",function(){
    $(".portlet-light").hide();
	$('#tab_2_content').show();
    
});
    $(document).on("click","#tab_3",function(){
    $(".portlet-light").hide();
	$('#tab_3_content').show();
    
});
    $(document).on("click","#submit",function(){
    	var emailaddressVal = $("#mail").val();
    	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    	var name = $("#name").val();
    	var phone = $("#phone").val();
    	var hasError = false;
    	 
    	 if( !emailaddressVal || !name || !phone ){
    		if( !emailaddressVal ) {

           toastr.error(" Mail is empty","Error !");
       } 
       if(!emailReg.test(emailaddressVal)) {
            toastr.warning(" Enter a valid email address ","Warning !");
			hasError == true;

        }
        if (!name) {
       		toastr.error(" Name is empty","Error !");
       }  if (!phone) {
       		toastr.error(" Phone is empty","Error !");
       }
    	}
           if( emailaddressVal && name &&  phone && hasError == false ){
              $.ajax({
				type: "POST",
				url: "ajax/form_contact.php",
				data: $('#formcontact').serialize(),
				success: function(message){
				$("#notification").html(message)
				},
				error: function(){
				alert("Error");
				}
				});
              $("#index_content").show();
              $("#form_content").hide();
              $('#Djiant-popup').modal('show');
              $('#formcontact input[type="text"]').val('');
              $('#formcontact input[type="mail"]').val('');
            } 

});
jQuery(document).ready(function() {    
	
       Layout.init(); // init current layout

});
</script>



<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>