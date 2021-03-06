<?php
define("URL_BASE", "/x3d");
define("INC_BASE", "./inc");
define("DATA_DIR", "./data");
define("PAGE_NO", 4);
define("SHOW_LOG", "false");

if (isset($_GET['name'])) {
    $filename = DATA_DIR . "/" . htmlentities($_GET['name'], ENT_QUOTES) . ".x3d";
} else {
    $filename = DATA_DIR . "/" . "sb_stitch.png";
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
            <x3d id="x3d_element" showStat="true" showLog="<?php echo SHOW_LOG; ?>">
                <scene id="x3d_scene">
                    <viewpoint position="0.0 0.0 8.0" zNear="0.01"
                               zFar="10000"></viewpoint>
                    <Transform>
                        <!--                        <VolumeData id='volume' dimensions='256 256 88'>-->
                        <!--                            <ImageTextureAtlas containerField='voxels' numberOfSlices='88' slicesOverX='11'-->
                        <!--                                               slicesOverY='8' url='./volume_data/1089_050622_4f4a_sn_stitch.png'>-->
                        <!--                            </ImageTextureAtlas>-->
                        <!--                            <!--                            <MPRVolumeStyle id='style' positionLine='0.5'></MPRVolumeStyle>-->
                        <!--                            <OpacityMapVolumeStyle lightFactor='1.4' opacityFactor='45.0'></OpacityMapVolumeStyle>-->
                        <!--                        </VolumeData>-->
                        <VolumeData id='volume_slice' dimensions='4 4 2' render="false">
                            <ImageTextureAtlas containerField='voxels' numberOfSlices='77' slicesOverX='11'
                                               slicesOverY='7' url='./volume_data/sb_stitch.png'>
                            </ImageTextureAtlas>
                            <MPRVolumeStyle id='mpr_volume_style' enabled='true' positionLine='0.5'
                                            finalLine='0.0,0.0,1.0' originLine='0.0,0.0,0.0'></MPRVolumeStyle>
                        </VolumeData>

                        <VolumeData id='volume' dimensions='4 4 2'>
                            <ImageTextureAtlas containerField='voxels' numberOfSlices='77' slicesOverX='11'
                                               slicesOverY='7' url='./volume_data/sb_stitch.png'>
                            </ImageTextureAtlas>
                            <OpacityMapVolumeStyle id='opacity_volume_style' enabled='true' lightFactor='1.2'
                                                   opacityFactor='6.0'>
                                <!--                                <ImageTexture containerField='transferFunction' url='./volume_data/transfer.png'/>-->
                            </OpacityMapVolumeStyle>
                        </VolumeData>

                    </Transform>
                </scene>
            </x3d>
        </div>
        <div class="panel-footer">
            <div class="container-fluid">
                <div class="row">
                    <ul class="list-group">
                        <?php echo draw_showinfo_button(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="container-fluid">
                <div class="row">
                    <ul class="list-group">
                        <?php echo draw_volume_mode_button(); ?>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <ul class="list-group">
                        <span class="dropdown">
                            <li class="list-group-item col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <s>Select Plane</s> <span class="caret"></span>
                            </li>
                            <ul class="dropdown-menu">
                                <li><a href="#">Not Show</a></li>
                                <li><a href="#">X-Y Plane</a></li>
                                <li><a href="#">Y-Z Plane</a></li>
                                <li><a href="#">Z-X Plane</a></li>
                            </ul>
                        </span>
                        <?php echo draw_slice_mode_button(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel-footer" id="log">
        </div>
    </div>
</div>
<?php require(INC_BASE . "/last_inc.php"); ?>
<script type='text/javascript' src='https://www.x3dom.org/release/components/VolumeRendering.js'></script>
</body>
</html>

