<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Djiant </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="assets/global/css/toastr.css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<!-- BEGIN PAGE STYLES -->
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="icon" type="image/png" href="assets/image/logo-djiant.png" />
      <script type="text/javascript">
    $(window).on('load',function(){
        $('#Djiant-popup').modal('show');
    });
</script>

<style>

.djiant-col-md-1, .djiant-col-md-10, .djiant-col-md-11, .djiant-col-md-12, .djiant-col-md-2, .djiant-col-md-3, .djiant-col-md-4, .djiant-col-md-5, .djiant-col-md-6, .djiant-col-md-7, .djiant-col-md-8, .djiant-col-md-9 {
    float: left;
}
.djiant-col-md-1,.djiant-col-md-2,.djiant-col-md-3,
.djiant-col-md-4,.djiant-col-md-6,.djiant-col-md-7
,.djiant-col-md-8,.djiant-col-md-9,.djiant-col-md-10,
.djiant-col-md-11.djiant-col-md-12{
    position: relative;
    min-height: 1px;
    padding-right: 7px;
    padding-left: 8px;
}
.djiant-col-md-1{
   max-width: 80px;
   width: 80px;
  }
.djiant-col-md-2{
   max-width: 200px;
   width: 200px;

  }
.djiant-col-md-3{
   max-width: 250px;
   width: 250px;
  }
.djiant-col-md-4{
   max-width: 305px;
   width: 305px;
  }
.djiant-col-md-5{
   max-width: 415px;
   width: 415px;
  }
.djiant-col-md-6{
    max-width: 530px;
    width: 530px;
  }
.djiant-col-md-7{
    max-width: 600px;
    width: 600px;
  }
.djiant-col-md-8{
    max-width: 690px;
    width: 690px;
  }
.popupInfo {
    width: 550px;
    height: auto;
    position: absolute;
    left: 75px;
    top: 2%;
    z-index: 1;
    overflow: hidden;
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    border-radius: 7px !important;
}
.djiant-list{
  padding-left: 20px;
  font-weight: 100;
  padding-bottom: 10px;
}
.djiant-title{
  font-size: 25px; 
  margin-top: 0px; 
  font-family: arial black; 
  margin-bottom: 3px;
}
.contact-us
{

  background-color: #008DD2;
  border-radius:4px !important;
  padding:  25px 30px;
  font-size: 20px;
  min-height:50px;
  position:fixed;
  right:10px;
  top: 40%;
  color:#FFF;
  cursor: pointer;
}
#tab_2_content,#tab_3_content{
display: none;
}
.portlet-light{
  margin-top: 50px;
}
.decouvrez-djiant {
    font-family: calibri;
    font-size: 25px;
    margin-top: 0px;
    margin-bottom: 0px;
    line-height: initial;
    font-weight: 100;
}
.djiant-block-4 {
    font-family: calibri;
    font-size: 15px;
    margin-bottom: 0px;
    margin-top: 2px;
    line-height: initial;
    font-weight: 100;
}
.djiant-block {
    font-family: calibri;
    font-size: 14px;
    margin-bottom: 0px;
    margin-top: 0px;
    line-height: initial;
    font-weight: 100;
}
.list-langue{
  color: #a7a7a7;
  margin-left: 8px;
  margin-right: 8px;
}

.active-langue{
  color: #383838;
  font-weight: bold;
}
.menu-footer{
    color: #383838;
  margin-left: 8px;
  margin-right: 8px;
  font-size: 14px;
}
/* width */
::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f2f2f2; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #e3e3e3;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #e3e3e3; 
}

.titre-4{
  margin-bottom: 0px;
  font-size: 15px;
}


.selected {
    text-decoration: none;
    background-color: #008DD2;
    border-radius: 4px !important;
    /* border: 1px solid #fff; */
}
.selected > .caption{
color: #FFF ;
}
.selected > .caption:hover{
color: #333 ;
}
 
.alert-black{
  background-color: #383838;
  margin-top: 25px;
  margin-left: 25px;
  margin-bottom: 0px;
  margin-right: 57px;
  color: #FFF;
}
.icon {
  display: inline-block;
}
.icon  img{
  width: 100%;
}

.contact{
  border-radius: 2px !important ;
}



</style>



</head>