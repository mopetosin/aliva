<!doctype html>
<html lang="en">
<head>
	<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.course_title.value == "" ) {
            alert( "Please provide the course title!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.course_code.value == "" ) {
            alert( "Please provide the course code!" );
            document.myForm.EMail.focus() ;
            return false;

         if( document.myForm.course_unit.value == "" ) {
            alert( "Please provide the course unit!" );
            return false;
         }
         if( document.myForm.course_description.value == "" ) {
            alert( "Please provide the course description!" );
            return false;
         }
         return( true );
      }
   //-->
</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>School Management System</title>
	<!-- Bootstrap implementation -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	<!-- GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
	<!-- FONTELLO -->
	<link href="css/fontello/css/fontello.css" rel="stylesheet" type="text/css" />
	<link href="css/fontello/css/animation.css" rel="stylesheet" type="text/css" />
	<!--if IE 7
	link(rel='stylesheet', href='font/fontello/css/fontello-ie7.css')
	-->
	<!-- ANONYMOUS PRO FONT-->
	<link href="http://fonts.googleapis.com/css?family=Anonymous+Pro:400,700" rel="stylesheet" type="text/css" />
	<!-- DRIPICONS -->
	<link href="css/webfont.css" rel="stylesheet" type="text/css" />
	<!-- SIMPLE LINE ICONS -->
	<link href="css/simple-line-icons.css" rel="stylesheet" type="text/css" />
	<!-- THEMIFY ICONS -->
	<link href="css/themify-icons.css" rel="stylesheet" type="text/css" />
	<!-- FONTASTIC ICONS -->
	<link href="css/fontastic/styles.css" rel="stylesheet" type="text/css" />
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="css/extralayers.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- CarouFredSel -->
	<link href="css/caroufredsel.css" rel="stylesheet" type="text/css" />
	<!-- WOW.JS REVEAL ANIMATIONS -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" />
	<!-- PYE CHART -->
	<link href="css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
	<!-- Hover Effect Ideas -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css' />
	<link href="css/HoverEffectIdeas/css/demo.css" rel="stylesheet" type="text/css" />
	<link href="css/HoverEffectIdeas/css/set1.css" rel="stylesheet" type="text/css" />
	<!-- Lightcase ( image popup preview ) -->
	<link href="plugins/lightcase/css/lightcase.css" rel="stylesheet" type="text/css" />
</head>