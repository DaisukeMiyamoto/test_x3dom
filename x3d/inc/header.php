<?php
/**
 * Created by IntelliJ IDEA.
 * User: nebula
 * Date: 17/02/09
 * Time: 17:32
 */
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CNS-PF 3D Viewer</title>
<!-- x3d -->
<script type='text/javascript' src='https://www.x3dom.org/release/x3dom.js'></script>
<script type='text/javascript' src='https://www.x3dom.org/release/components/VolumeRendering.js'></script>
<link rel='stylesheet' type='text/css' href='https://www.x3dom.org/release/x3dom.css'/>

<!-- jquery -->
<script src="<?php echo URL_BASE; ?>/lib/jquery-3.1.1.min.js"></script>
<!--<link href="--><?php //echo URL_BASE; ?><!--/lib/jquery-ui.css" rel="stylesheet">-->
<!--<script src="--><?php //echo URL_BASE; ?><!--/lib/jquery-ui.min.js"></script>-->

<!-- Bootstrap -->
<link href="<?php echo URL_BASE; ?>/lib/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo URL_BASE; ?>/lib/bootstrap.min.js"></script>

<!-- Bootstrap extensions -->
<link rel='stylesheet' type='text/css' href='<?php echo URL_BASE; ?>/lib/switch.css'/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.min.css" />

<!-- mycss -->
<link rel='stylesheet' type='text/css' href='<?php echo URL_BASE; ?>/my.css'/>
<?php require(INC_BASE . "/common.php"); ?>

