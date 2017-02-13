<?php
define("URL_BASE", "/x3d");
define("INC_BASE", "./inc");
define("DATA_DIR", "./data");

if (isset($_GET['name'])) {
    $filename = DATA_DIR . "/" . htmlentities($_GET['name'], ENT_QUOTES) . ".x3d";
} else {
    $filename = DATA_DIR . "/" . "standardbrain_aopt.x3d";
}
?>
<html>
<head><?php require(INC_BASE . "/header.php"); ?></head>
<body>
<?php require(INC_BASE . "/menu.php"); ?>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            3D Viewer [<?php echo $filename ?>]
        </div>
        <div class="panel-body panel-x3d">
            <x3d id="x3d_element" showStat="true" showLog="true"
                 xmlns="http://www.web3d.org/specifications/x3d-namespace">
                <scene id="x3d_scene">
                    <!--                    <viewpoint position="0.0 0.0 13.0" orientation="0.0 0.0 0.0"></viewpoint>-->
                    <Viewpoint position="308.65832 18.12571 85.00822" orientation="0.51687 0.47321 0.71338 2.09034"
                               zNear="0.01000" zFar="10000.00000" description="Default"></Viewpoint>
                    <Transform>
                        <VolumeData id='volume' dimensions='128 128 227'>
                            <ImageTextureAtlas containerField='voxels' numberOfSlices='227' slicesOverX='16'
                                               slicesOverY='16' url='internals2048.png'>
                            </ImageTextureAtlas>
                            <OpacityMapVolumeStyle lightFactor='1.4' opacityFactor='45.0'>
                            </OpacityMapVolumeStyle>
                        </VolumeData>
                    </Transform>
                    <!--                    <Inline nameSpaceName="cube" mapDEFToID="true" url="data/cube.x3d"/>-->
                </scene>
            </x3d>
        </div>
        <div class="panel-footer">
            <div class="container-fluid">
                <div class="row">
                    <ul class="list-group">
                        <span>
                            <li class=" list-group-item col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
                                Show Info
                                <div class="material-switch pull-right">
                                    <input type="checkbox" id="show_info" class="show_info" checked/>
                                    <label for="show_info" class="label-info"></label>
                                </div>
                            </li>
                        </span>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="container-fluid">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        Choose Model
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="./show_x3d.php?name=standardbrain_decimate">Standard Brain Decimated</a></li>
                        <li><a href="./show_x3d.php?name=standardbrain_decimate_trans">Standard Brain Transparent</a>
                        </li>
                        <li><a href="./show_x3d.php?name=standardbrain_full">Standard Brain Full</a></li>
                        <li><a href="./show_x3d.php?name=standardbrain_aopt">Standard Brain AOPT</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="./show_x3d.php?name=0004_regist_aopt">Neuron 0004</a></li>
                        <li><a href="./show_x3d.php?name=1080_regist_aopt">Neuron 1080</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-footer" id="log">
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL_BASE; ?>/lib/jquery-ui.min.js"></script>
<script src="<?php echo URL_BASE; ?>/lib/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#show_info').click(function () {
        if ($(this).is(":checked")) {
            $('#x3dom-state-viewer').css('display', 'block');
        } else {
            $('#x3dom-state-viewer').css('display', 'none');
        }
    });
</script>
</body>
</html>
