<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gabifotos | Sis<?php echo $url; ?>tema de Controle</title>

<?php
$explodeUrl = explode('/', $_SERVER["REQUEST_URI"]);
$url = "http://".$_SERVER["HTTP_HOST"].'/'.$explodeUrl[1].'/';
?>
<!-- Bootstrap -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- datatables -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Ion.RangeSlider -->
<link href="<?php echo $url; ?>tema/gentelella/vendors/normalize-css/normalize.css" rel="stylesheet">
<link href="<?php echo $url; ?>tema/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
<link href="<?php echo $url; ?>tema/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="<?php echo $url; ?>tema/gentelella/build/css/custom.min.css" rel="stylesheet">