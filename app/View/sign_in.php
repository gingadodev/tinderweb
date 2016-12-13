<div class="wg12"><?php echo $error; ?></div>
<div class="wg12">
<form action="" method="post">
    <div class="row">
        <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <input type="text" name="login" value="" placeholder="email" required class="expand" /></div>    
        <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <input type="password" name="password" value="" placeholder="password" required class="expand" />
        </div>    
        <div class="wg2 wg_tablet12 fill_mobile_outside_bottom">
            <button type="submit" name="submit" class="bt ct_bt_primary expand">Sign In</button>
        </div>    
        <div class="wg2 wg_tablet12 fill_mobile_outside_bottom">
            <a class="bt bt_standard expand" href="<?php echo BASE_URL; ?>sign_up">Sign Up</a>
        </div>    
  </div>
</form>
</div>
