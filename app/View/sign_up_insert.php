<div class="wg12">
    <h1 class="ct_tx_primary tx_right">Sign Up</h1>
</div>
<div class="wg12"><?php echo $error; ?></div>
<div class="wg12">
<form action="" method="post" enctype="multipart/form-data">
    
        <div class="row">
            <div class="wg4 wg_tablet6 wg_phone12 fill_mobile_outside_bottom">
            <label for="firstName" class="expand">First Name:</label>
                <input type="text" name="firstName" id="firstName" class="expand" value="" required />
            </div>
            <div class="wg4 wg_tablet6 wg_phone12 fill_mobile_outside_bottom">
            <label for="lastName" class="expand">Last Name:</label>
                <input type="text" name="lastName" id="lastName" class="expand" value="" required />
            </div>
            <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <label for="age" class="expand">Age:</label>
            <select name="age" id="age" class="expand">
                <?php for($i=18; $i<=60; $i++){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="row">
            <div class="wg6 wg_tablet12 fill_mobile_outside_bottom">
            <label for="email" class="expand">Email:</label>
                <input type="email" name="email" id="email" class="expand" value="" required />
            </div>
            <div class="wg6 wg_tablet12 fill_mobile_outside_bottom">
            <label for="password" class="expand">Password:</label>
                <input type="password" name="password" id="password" class="expand" value="" required />
            </div>
        </div>
        <div class="wg12 fill_outside_bottom">
            <label for="image" class="expand">Image:</label>
            <input type="file" name="image" id="image" class="expand" required />
        </div>
        <div class="wg12 fill_outside_bottom">
            <fieldset>
                <legend>I'm:'</legend>
            <ul class="lt_horizontal">
                <li class="fill_inside_right">
                    <input type="radio" id="gender_male" name="gender" checked="checked" value="male" />
                    <label for="gender_male">a man</label>
                </li>
                <li class="fill_inside_left">
                    <input type="radio" id="gender_female" name="gender" value="female" />
                    <label for="gender_female">a woman</label>
                </li>
            </ul>    
            </fieldset>
        </div>

        <div class="wg12 fill_outside_bottom">
            <fieldset>
                <legend>Show profile of:</legend>
            <ul class="lt_horizontal">
                <li class="fill_inside_right">
                    <input type="radio" id="show_male" name="showProfileOf" value="male" />
                    <label for="show_male">Men</label>
                </li>
                <li class="fill_inside_left">
                    <input type="radio" id="show_female" name="showProfileOf" checked="checked"  value="female" />
                    <label for="show_female">women</label>
                </li>
            </ul>    
            </fieldset>
        </div>
        <div class="row">
        <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <label for="radius" class="expand">Show people on radius:</label>
            <select name="showPeopleOnRadius" id="radius" class="expand">
                <?php for($i=1; $i<=10; $i++){ $raio = $i * 10; ?>
                    <option value="<?php echo $raio; ?>"><?php echo $raio; ?>km</option>
                <?php } ?>
            </select>
        </div>
        <div class="wg4 wg_tablet6 fill_mobile_outside_bottom">
            <label for="show_min_age" class="expand">Show min. age:</label>
            <select name="showMinAge" id="show_min_age" class="expand">
                <?php for($i=18; $i<=50; $i++){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="wg4 wg_tablet6 fill_mobile_outside_bottom">
            <label for="showMaxAge" class="expand">Show max. age:</label>
            <select name="showMaxAge" id="showMaxAge" class="expand">
                <?php for($i=19; $i<=60; $i++){ $s = ($i !== 25)? '' : ' selected="selected"'; ?>
                    <option value="<?php echo $i; ?>"<?php echo $s; ?>><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
        </div>

        <div class="wg12 fill_mobile_outside_bottom tx_right">
            <button type="submit" class="bt ct_bt_primary" name="submit">Sign Up</button>

        </div>    
</form>

