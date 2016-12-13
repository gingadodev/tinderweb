<div class="ct_swiper_container swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($list as $row) { 
                if($idProfile !== $row->getId())
                {
            ?>
            <div class="ct_swiper_slide swiper-slide">
                <div class="expand tx_center fill_outside_bottom">
                    <img src="<?php echo BASE_URL_UPLOAD .  $row->getImage(); ?>" class="bd_standard" />
                </div>
                <div class="expand tx_center fn_large fill_outside_bottom">
                    <?php echo $row->getFisrtName(); ?>, <?php echo $row->getAge(); ?>
                </div>
                <div class="wg6 pull_center">
                <ul class="lt_horizontal">
                    <li><i class="cr_pointer fa fa-2x fa-undo ct_lk_yellow"></i></li>
                    <li><i class="cr_pointer fa fa-2x fa-times ct_lk_red"></i></li>
                    <li><i class="cr_pointer fa fa-2x fa-heart ct_lk_green"></i></li>
                </ul>    
                </div>
            </div>
            <?php 
                     }
                 }
            ?>
        </div>
</div>

<div class="wg12 fill_outside_top tx_right">
<ul class="lt_horizontal pull_right">
    <li>
        <a class="bt ct_bt_primary" href="<?php echo BASE_URL; ?>sign_up/update">
            <i class="fa fa-user"></i> My Profile
        </a>
    </li>
    <li>
        <a class="bt bt_standard" href="<?php echo BASE_URL; ?>logoff">
            <i class="fa fa-power-off"></i>
        </a>
    </li>
</ul>
</div>
